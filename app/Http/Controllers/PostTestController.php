<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'courses' => Course::where('instructor_id', auth()->user()->id)->doesntHave('postTest')->get(),
            'quizzes' => Quiz::where('test_type', 'post')->get()
        ];

        return view('posttest.index', $data);
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
        $quiz = new Quiz();
        $quiz->uuid = Str::uuid();
        $quiz->course_id = $request->course;
        $quiz->test_type = 'post';
        $quiz->title = $request->title;
        $quiz->save();

        return redirect()->back()->with('success', 'Quiz berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'quiz' => Quiz::find($id)
        ];

        return view('posttest.show', $data);
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
        $preTest = Quiz::find($id);
        $preTest->delete();

        return redirect()->back()->with('success', 'Quiz berhasil dihapus');
    }
}
