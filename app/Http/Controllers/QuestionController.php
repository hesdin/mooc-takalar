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

    public function update(Request $request, $id)
    {

        $question = Question::findOrFail($id);
        $question->question_text = $request->question;
        $question->update();

        $correctChoice = $question->correctAnswer;
        $correctChoice->choice_text = $request->correct;
        $correctChoice->update();

        foreach ($request->input('answer') as $choiceId => $choiceText) {
            $choice = AnswerChoice::findOrFail($choiceId);
            $choice->choice_text = $choiceText;
            $choice->update();
        }

        return redirect()->back()->with('success', 'Pertanyaan berhasil diubah');
    }

    public function destroy(Request $request)
    {
        $pertanyaan = Question::find($request->id);

        $pertanyaan->delete();

        return redirect()->back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}
