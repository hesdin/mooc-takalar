<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gtk;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\QuizResult;
use App\Models\UserAnswer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class MyCourseController extends Controller
{
    public function myCourse()
    {
        $guru = Gtk::find(auth()->guard('guru')->user()->id);

        $enrollments = $guru->enrollments()->with('course')->get();

        return view('user.my_course', compact('enrollments'));
    }



    public function myCourseDetail($uuid)
    {
        $course = Course::where('uuid', $uuid)->first();
        // dd($course->id);
        $result = Quiz::where('course_id', $course->id)->where('test_type', 'pre')->whereHas('result', function ($query) {
            return $query->where('user_id', 1);
        })->first();

        if ($result) {
            return view('user.my_course_detail', compact('course'));
        }

        $data = [
            'uuid' => $uuid,
            'quiz' => Quiz::where('course_id', $course->id)->first()
        ];

        return view('user.pages.pre_test', $data);
    }

    public function myCoursePreTest(Request $request)
    {
        $quiz = Quiz::find($request->quiz);

        $score = 0;
        foreach ($request->keys() as $key) {
            if ($key != "_token" && $key != "quiz") {
                $answer = new UserAnswer();
                $answer->uuid = Str::uuid();
                $answer->user_id = auth()->user()->id;
                $answer->quiz_id = $request->quiz;
                $answer->question_id = explode('-', $key)[1];
                $answer->selected_choice_id = $request->$key;
                $answer->save();

                if ($answer->selectedChoice->is_correct == '1') {
                    $score += 100;
                }
            }
        }

        $totalQuestion = $quiz->question->count();
        $finalScore = $score / $totalQuestion;

        $result = new QuizResult();
        $result->uuid = Str::uuid();
        $result->user_id = auth()->user()->id;
        $result->quiz_id = $quiz->id;
        $result->score = $finalScore;
        $result->save();

        return redirect()->back()->with('success', 'Pre test telah selesai');
    }
}
