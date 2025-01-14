<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
{

    public function Donation() {
        return Inertia::render('Index/Donation');
    }

    public function loadAllDonation() {
        $all_donation = Donation::all();
        return Inertia::render('Index/Dashboard/Donation/Donation', ['all_donation'=>$all_donation]);
    }

    public function DonationForm() {
        return inertia('Index/Dashboard/Donation/AddDonation');
    }

    public function AddDonations(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'amount_received' => 'required|integer',
        ]);

        Donation::create($validated);

        return redirect('/');
    }

    public function AddDonation(Request $request) {

        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'amount_received' => 'required|integer',
        ]);

        Donation::create($validated);

        return Redirect::route('Donation.index')->with('message', 'Donation created succesfully');
    }

    public function destroyDonation(Donation $donation){
        $donation->delete();
        return Redirect::route('Donation.index')->with('message', 'Donation deleted succesfully');
    }

    public function EditDonation(Donation $donation){
        return Inertia::render('Index/Dashboard/Donation/EditDonation', [
            'donation' => $donation
        ]);
    }

    public function updateDonation(Request $request, Donation $Donation){
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'amount_received' => 'required|integer',
        ]);

        $Donation->update($validated);

        return Redirect::route('Donation.index')->with('message', 'Donation update succesfully');
    }
}
