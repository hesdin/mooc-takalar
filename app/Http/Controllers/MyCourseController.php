<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Course;
use App\Models\FinishedSubCurriculum;
use App\Models\Gtk;
use App\Models\Quiz;
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

        $preTestCheck = Quiz::where('course_id', $course->id)->where('test_type', 'pre')->whereHas('result', function ($query) {
            return $query->where('user_id', auth()->user()->id);
        })->first();

        $postTestCheck = Quiz::where('course_id', $course->id)->where('test_type', 'post')->whereHas('result', function ($query) {
            return $query->where('user_id', auth()->user()->id);
        })->first();

        if ($preTestCheck) {
            $data = [
                'course' => $course,
                'finished' => FinishedSubCurriculum::where('course_id', $course->id)->where('user_id', auth()->user()->id)->get(),
                'preTest' => Quiz::where('course_id', $course->id)->where('test_type', 'pre')->first(),
                'postTest' => Quiz::where('course_id', $course->id)->where('test_type', 'post')->first(),
                'preTestCheck' => $preTestCheck,
                'postTestCheck' => $postTestCheck
            ];
            return view('user.my_course_detail', $data);
        }

        $data = [
            'uuid' => $uuid,
            'quiz' => Quiz::where('course_id', $course->id)->where('test_type', 'pre')->first()
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

        return redirect()->back()->with('success', 'Pre Test selesai');
    }

    public function myCourseSubCurriculumDone(Request $request, $uuid)
    {
        $course = Course::where('uuid', $uuid)->first();

        $finished = new FinishedSubCurriculum();
        $finished->user_id = auth()->user()->id;
        $finished->course_id = $course->id;
        $finished->sub_curriculum_id = $request->subcurriculum;
        $finished->save();

        return redirect()->back();
    }

    public function myCoursePostTest($uuid)
    {
        $course = Course::where('uuid', $uuid)->first();

        $data = [
            'uuid' => $uuid,
            'quiz' => Quiz::where('course_id', $course->id)->where('test_type', 'post')->first()
        ];

        return view('user.pages.post_test', $data);
    }

    public function myCoursePostTestSubmit(Request $request, $uuid)
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

        return redirect()->route('guru.mycourse.detail', $uuid)->with('success', 'Post test selesai');
    }

    public function myCourseComment(Request $request)
    {
        $komentar = new Comment();
        $komentar->user_id = auth()->user()->id;
        $komentar->course_id = $request->course;
        $komentar->curriculum_id = $request->curriculum;
        $komentar->comment_text = $request->content;
        $komentar->save();

        return redirect()->back()->with('commented', 'Komentar telah terpublish');
    }

    public function myCourseCommentReplies($uuid, $id)
    {
        $data = [
            'course' => Course::where('uuid', $uuid)->first(),
            'comment' => Comment::find($id),
        ];
        return view('user.comment', $data);
    }

    public function myCourseCommentReply(Request $request, $uuid, $id)
    {
        $komentar = new CommentReply();
        $komentar->user_id = auth()->user()->id;
        $komentar->comment_id = $id;
        $komentar->comment_text = $request->content;
        $komentar->save();

        return redirect()->back()->with('commented', 'Komentar telah terpublish');
    }
}
