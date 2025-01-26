<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Inertia\Inertia;
use App\Models\Contact;
use App\Models\FeedBack;
use App\Models\Location;
use App\Models\Partner;
use App\Models\Realisation;
use App\Models\Statistic;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $faqs = FAQ::limit(4)->get();
        $location = Location::first();
        $contact = Contact::all();
        $feedback = FeedBack::limit(4)->get();
        $partner = Partner::limit(6)->get();
        $statistic = Statistic::first();
        $realisation = Realisation::limit(3)->get();

        return Inertia::render('Index/Index', [
            'faqs' => $faqs,
            'location' => $location,
            'contacts' => $contact,
            'feedbacks' => $feedback,
            'partners' => $partner,
            'statistic' => $statistic,
            'realisations' => $realisation,
        ]);
    }

    // Enregistrer le feedback depuis l'accueil pour les visiteurs
    public function AddFeedback(Request $request) {
        $request->validate([
            'description' => 'required|string',
            'email' => 'required|email',
        ]);

        FeedBack::create([
            'description' => $request->description,
            'email' => $request->email,
            'posts' => 'visiteur',//visiteur par défaut
        ]);
    }
}
