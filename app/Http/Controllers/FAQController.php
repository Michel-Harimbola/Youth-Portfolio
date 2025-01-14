<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FAQController extends Controller
{
    public function loadAllFAQ() {
        $all_faq = FAQ::all();
        return Inertia::render('Index/Dashboard/FAQ/FAQ', ['all_faq' => $all_faq]);
    }

    public function FAQForm() {
        return inertia('Index/Dashboard/FAQ/AddFAQ');
    }

    public function AddFAQ(Request $request) {

        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        FAQ::create($validated);

        return Redirect::route('FAQ.index')->with('message', 'FAQ created succesfully');
    }

    public function destroyFAQ(FAQ $faq){
        $faq->delete();
        return Redirect::route('FAQ.index')->with('message', 'FAQ deleted succesfully');
    }

    public function EditFAQ(FAQ $faq){
        return Inertia::render('Index/Dashboard/FAQ/EditFAQ', [
            'faq' => $faq
        ]);
    }

    public function updateFAQ(Request $request, FAQ $faq){
        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq->update($validated);

        return Redirect::route('FAQ.index')->with('message', 'FAQ update succesfully');
    }
}
