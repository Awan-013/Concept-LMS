<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz()
    {
        $questions = Pertanyaan::with('jawaban')->get();
        return view('pembelajaran.quiz', compact('questions'));
    }

    public function submitQuiz(Request $request)
    {
        $totalScore = 0;
        $results = [];

        foreach ($request->jawaban as $idPertanyaan => $idJawaban) {
            $question = Pertanyaan::findOrFail($idPertanyaan);
            $answer = $question->jawaban()->where('id', $idJawaban)->first();
            $correctAnswer = $question->jawaban()->where('benar', true)->first();

            $isCorrect = $answer && $answer->benar;
            if ($isCorrect) {
                $totalScore += $question->skor;
            }

            $results[] = [
                'question' => $question->deskripsi,
                'selected_answer' => $answer ? $answer->deskripsi : 'No answer selected',
                'correct_answer' => $correctAnswer ? $correctAnswer->deskripsi : 'No correct answer',
                'correct' => $isCorrect,
            ];
        }

        return view('pembelajaran.result', compact('totalScore', 'results'));
    }
}
