<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PartnerController extends Controller
{
    public function loadAllPartner() {
        $all_partner = Partner::all();
        return Inertia::render('Index/Dashboard/Partner/Partner',['all_partner' => $all_partner]);
    }

    public function PartnerForm() {
        return Inertia::render('Index/Dashboard/Partner/AddPartner');
    }

    public function AddPartner(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'required|image|mimetypes:image/jpeg,image/png,image/jpg,image/svg+xml|max:2048',
        ]);

        if($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('partner', 'public');
        } else {
            return back()->withErrors(['images' => "L'image n'a pas été téléchargée"]);
        }
        

        Partner::create([
            'name' => $request->name,
            'images' => $imagePath,
        ]);

        return Redirect::route('Partner.index')->with('message', 'Partner created succesfully');
    }

    public function destroyPartner(Partner $Partner){
        $Partner->delete();
        return Redirect::route('Partner.index')->with('message', 'Partner deleted succesfully');
    }

    public function EditPartner(Partner $Partner){
        return Inertia::render('Index/Dashboard/Partner/EditPartner', [
            'partner' => $Partner
        ]);
    }

    public function updatePartner(Request $request, Partner $Partner){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $Partner->update($validated);

        return Redirect::route('Partner.index')->with('message', 'Partner update succesfully');
    }
}
