<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Historic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HistoricController extends Controller
{
    public function loadAllHistoric() {
        $all_Historic = Historic::all();
        return Inertia::render('Index/Dashboard/Historic/Historic',['all_Historic' => $all_Historic]);
    }

    public function HistoricForm() {
        return Inertia::render('Index/Dashboard/Historic/AddHistoric');
    }

    public function AddHistoric(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'images' => 'required|image|mimetypes:image/jpeg,image/png,image/jpg,image/svg+xml',
            'location' => 'required|string',
        ]);

        if($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('Historic', 'public');
        } else {
            return back()->withErrors(['images' => "L'image n'a pas été téléchargée"]);
        }
        
        Historic::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'images' => $imagePath,
            'location' => $request->location,
        ]);

        return Redirect::route('Historic.index')->with('message', 'Historic created succesfully');
    }

    public function destroyHistoric(Historic $Historic){
        $Historic->delete();
        return Redirect::route('Historic.index')->with('message', 'Historic deleted succesfully');
    }

    public function EditHistoric(Historic $Historic){
        return Inertia::render('Index/Dashboard/Historic/EditHistoric', [
            'Historic' => $Historic
        ]);
    }

    public function updateHistoric(Request $request, Historic $Historic){
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
        ]);

        $Historic->update($validated);

        return Redirect::route('Historic.index')->with('message', 'Historic update succesfully');
    }
}
