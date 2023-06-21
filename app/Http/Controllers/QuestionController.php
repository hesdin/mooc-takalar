<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Str;
use App\Models\AnswerChoice;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $question = new Question();
        $question->uuid = Str::uuid();
        $question->quiz_id = $request->id;
        $question->question_text = $request->question;
        $question->save();

        $choice = new AnswerChoice();
        $choice->uuid = Str::uuid();
        $choice->question_id = $question->id;
        $choice->choice_text = $request->correct;
        $choice->is_correct = '1';
        $choice->save();

        foreach ($request->answer as $answer) {
            $choice = new AnswerChoice();
            $choice->uuid = Str::uuid();
            $choice->question_id = $question->id;
            $choice->choice_text = $answer;
            $choice->is_correct = '0';
            $choice->save();
        }


        return redirect()->back()->with('success', 'Pertanyaan berhasil disimpan');
    }
}
