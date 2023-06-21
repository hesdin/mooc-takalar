<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:instructors',
            'password' => 'required',
            'expertise' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses penyimpanan data instruktur
        $instructor = new Instructor();
        $instructor->uuid = Str::uuid();
        $instructor->name = $validatedData['name'];
        $instructor->username = $validatedData['username'];
        $instructor->password = Hash::make($validatedData['password']);
        $instructor->bio = $request->input('bio');
        $instructor->expertise = $validatedData['expertise'];

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '_' . time() . '.' . $image->extension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $instructor->image = $imageName;
        }

        $instructor->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('admin.instructors.index')->with('success', 'Instructor created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:instructors,username,' . $id,
            // 'password' => 'required',
            'expertise' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan instruktur berdasarkan ID
        $instructor = Instructor::findOrFail($id);

        // Update data instruktur
        $instructor->name = $validate['name'];
        $instructor->username = $validate['username'];

        // Periksa apakah password valid bukan null
        if ($request->filled('password')) {
            $instructor->password = Hash::make($validate['password']);
        }

        $instructor->bio = $request->input('bio');
        $instructor->expertise = $validate['expertise'];

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Hapus gambar lama jika ada
            if ($instructor->image && $instructor->image != 'user.jpg') {
                Storage::delete('public/images/' . $instructor->image);
            }

            $image = $request->file('image');
            $imageName = Str::uuid() . '_' . time() . '.' . $image->extension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $instructor->image = $imageName;
        }

        $instructor->update();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('admin.instructors.index')->with('success', 'Instructor updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan instruktur berdasarkan ID
        $instructor = Instructor::findOrFail($id);

        // Hapus gambar jika ada
        if ($instructor->image) {
            Storage::delete('public/images/' . $instructor->image);
        }

        // Hapus data instruktur
        $instructor->delete();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('admin.instructors.index')->with('success', 'Instructor deleted successfully.');
    }
}
