<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RealisationController extends Controller
{
    public function RealisationAll() {
        $all_Realisation = Realisation::all();
        return Inertia::render('Index/RealisationAll', ['all_Realisation' => $all_Realisation]);
    }

    public function loadAllRealisation() {
        $all_Realisation = Realisation::limit(8)->get();
        return Inertia::render('Index/Dashboard/Realisation/Realisation',['all_Realisation' => $all_Realisation]);
    }

    public function RealisationForm() {
        return Inertia::render('Index/Dashboard/Realisation/AddRealisation');
    }

    public function AddRealisation(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'images' => 'required|image|mimetypes:image/jpeg,image/png,image/jpg,image/svg+xml',
            'client' => 'required|string',
            'link' => 'required|string',
        ]);

        if($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('Realisation', 'public');
        } else {
            return back()->withErrors(['images' => "L'image n'a pas été téléchargée"]);
        }
        

        Realisation::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'images' => $imagePath,
            'client' => $request->client,
            'link' => $request->link,
        ]);

        return Redirect::route('Realisation.index')->with('message', 'Realisation created succesfully');
    }

    public function destroyRealisation(Realisation $Realisation){
        $Realisation->delete();
        return Redirect::route('Realisation.index')->with('message', 'Realisation deleted succesfully');
    }

    public function EditRealisation(Realisation $Realisation){
        return Inertia::render('Index/Dashboard/Realisation/EditRealisation', [
            'Realisation' => $Realisation
        ]);
    }

    public function updateRealisation(Request $request, Realisation $Realisation){
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'client' => 'required|string',
            'link' => 'required|string',
        ]);

        $Realisation->update($validated);

        return Redirect::route('Realisation.index')->with('message', 'Realisation update succesfully');
    }
}
