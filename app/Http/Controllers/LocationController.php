<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{
    public function loadAllLocation() {
        $all_location = Location::all();
        return Inertia::render('Index/Dashboard/Location/Location', ['all_location' => $all_location]);
    }

    public function LocationForm() {
        return inertia('Index/Dashboard/Location/AddLocation');
    }

    public function AddLocation(Request $request) {
        $validated = $request->validate([
            'adress' => 'required|string',
            'lot' => 'required|string',
        ]);

        Location::create($validated);

        return Redirect::route('Location.index')->with('message', 'Location created succesfully');
    }

    public function destroyLocation(Location $Location){
        $Location->delete();
        return Redirect::route('Location.index')->with('message', 'Location deleted succesfully');
    }

    public function EditLocation(Location $Location){
        return Inertia::render('Index/Dashboard/Location/EditLocation', [
            'location' => $Location
        ]);
    }

    public function updateLocation(Request $request, Location $Location){
        $validated = $request->validate([
            'adress' => 'required|string',
            'lot' => 'required|string',
        ]);

        $Location->update($validated);

        return Redirect::route('Location.index')->with('message', 'Location update succesfully');
    }
}
