<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use PhpParser\Node\Stmt\Return_;

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
        dd('save');

        if ($save) {
            // Redirect atau response JSON dengan pesan sukses
            return redirect()->route('courses.show', $course->id)->with('success', 'Course created successfully');
        }


        // Redirect atau response JSON dengan pesan sukses
        return redirect()->route('courses.show', $course->id)->with('success', 'Course created successfully');
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
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
