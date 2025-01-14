<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

use function Laravel\Prompts\alert;
use function Termwind\render;

class FeedBackController extends Controller
{
    public function loadAllFeedback() {
        $all_feedback = FeedBack::all();
        return Inertia::render('Index/Dashboard/FeedBack/Feedback', ['all_feedback' => $all_feedback]);
    }

    public function FeedbackForm() {
        return inertia('Index/Dashboard/FeedBack/AddFeedback');
    }

    public function AddFeedback(Request $request) {

        $validated = $request->validate([
            'description' => 'required|string',
            'email' => 'required|email',
            'posts' => 'required|string',
        ]);

        FeedBack::create($validated);

        return Redirect::route('Feedback.index')->with('message', 'Feedback created succesfully');
    }

    public function destroyFeedback(FeedBack $feedback ){
        $feedback->delete();
        return Redirect::route('Feedback.index')->with('message', 'Feedback deleted succesfully');
    }

    public function EditFeedback(FeedBack $feedback){
        return Inertia::render('Index/Dashboard/FeedBack/EditFeedback', [
            'feedback' => $feedback
        ]);
    }

    public function updateFeedback(Request $request, FeedBack $feedback){
        $validated = $request->validate([
            'description' => 'required|string',
            'email' => 'required|email',
            'posts' => 'required|string',
        ]);

        $feedback->update($validated);

        return Redirect::route('Feedback.index')->with('message', 'Feedback update succesfully');
    }

}
