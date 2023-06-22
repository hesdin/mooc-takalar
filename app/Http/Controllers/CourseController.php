<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('category', 'instructor')
            ->where('instructor_id', auth()->guard('instruktur')->user()->id)
            ->get();
        return view('instruktur.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CourseCategory::all();
        return view('instruktur.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->uuid = Str::uuid();
        $course->title = $request->title;
        $course->sub_title = $request->sub_title;
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->instructor_id = auth()->guard('instruktur')->user()->id;

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '_' . time() . '.' . $image->extension();
            $imagePath = $image->storeAs('public/images/course', $imageName);
            $course->image = $imageName;
        }

        $save = $course->save();

        if ($save) {
            // Redirect atau response JSON dengan pesan sukses
            return redirect()->route('instruktur.courses.index')->with('success', 'Course created successfully');
        }

        // Redirect atau response JSON dengan pesan gagal
        return redirect()->route('instruktur.courses.index')->with('failed', 'Create course failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {

        $course = Course::where('uuid', $uuid)->first();
        $categories = CourseCategory::all();

        return view('instruktur.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $course = Course::where('uuid', $uuid)->first();

        // Periksa apakah kursus ditemukan
        if (!$course) {
            return redirect()->route('instruktur.courses.index')->with('failed', 'Course not found');
        }

        // Update data kursus
        $course->title = $request->title;
        $course->sub_title = $request->sub_title;
        $course->description = $request->description;
        $course->category_id = $request->category_id;

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($course->image) {
                Storage::delete('public/images/course/' . $course->image);
            }

            $image = $request->file('image');
            $imageName = Str::uuid() . '_' . time() . '.' . $image->extension();
            $imagePath = $image->storeAs('public/images/course', $imageName);
            $course->image = $imageName;
        }

        $save = $course->update();

        if ($save) {
            // Redirect atau response JSON dengan pesan sukses
            return redirect()->route('instruktur.courses.index')->with('success', 'Course updated successfully');
        }

        // Redirect atau response JSON dengan pesan gagal
        return redirect()->route('instruktur.courses.index')->with('failed', 'Update course failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course = Course::find($course->id);
        foreach ($course->subcurriculum as $subcurriculum) {
            if (Str::contains($subcurriculum->content, ['.pdf', '.ppt', '.pptx'])) {
                File::delete(public_path('doc/subcurriculum/' . $subcurriculum->content));
            }
        }
        $course->delete();

        return redirect()->back()->with('success', 'Kursus berhasil dihapus');
    }
}
