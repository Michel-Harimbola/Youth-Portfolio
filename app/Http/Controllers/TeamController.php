<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TeamController extends Controller
{
    public function loadAllTeam() {
        $all_Team = Team::all();
        return Inertia::render('Index/Dashboard/Team/Team',['all_team' => $all_Team]);
    }

    public function TeamForm() {
        return Inertia::render('Index/Dashboard/Team/AddTeam');
    }

    public function AddTeam(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'images' => 'required|image|mimetypes:image/jpeg,image/png,image/jpg,image/svg+xml|max:2048',
        ]);

        if($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('Team', 'public');
        } else {
            return back()->withErrors(['images' => "L'image n'a pas été téléchargée"]);
        }
        

        Team::create([
            'name' => $request->name,
            'post' => $request->post,
            'images' => $imagePath,
        ]);

        return Redirect::route('Team.index')->with('message', 'Team created succesfully');
    }

    public function destroyTeam(Team $Team){
        $Team->delete();
        return Redirect::route('Team.index')->with('message', 'Team deleted succesfully');
    }

    public function EditTeam(Team $Team){
        return Inertia::render('Index/Dashboard/Team/EditTeam', [
            'Team' => $Team
        ]);
    }

    public function updateTeam(Request $request, Team $Team){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
        ]);

        $Team->update($validated);

        return Redirect::route('Team.index')->with('message', 'Team update succesfully');
    }
}
