<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Curriculum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCurriculum;

class SubCurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course, Curriculum $curriculum)
    {
        $data = [
            'course' => $course,
            'curriculum' => $curriculum
        ];

        return view('instruktur.subcurriculum.index', $data);
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
    public function store(Request $request, Course $course, Curriculum $curriculum)
    {
        $file = $request->file('content');

        if ($file != null) {
            $konten = $course->id.'-'.time().'.'.$file->extension();
            $file->move(public_path('doc/subcurriculum'), $konten);
        } else {
            $konten = $request->content;
        }

        $sub = new SubCurriculum();
        $sub->uuid = Str::uuid();
        $sub->curriculum_id = $curriculum->id;
        $sub->order = $request->order;
        $sub->title = $request->title;
        $sub->content = $konten;
        $sub->save();

        return redirect()->back()->with('success', 'Sub curriculum created');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
