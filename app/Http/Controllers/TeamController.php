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
            'name' => 'required|string',
            'role' => 'required|string',
            'image' => 'required|image|mimetypes:image/jpeg,image/png,image/jpg,image/svg+xml',
        ]);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Team', 'public');
        } else {
            return back()->withErrors(['image' => "L'image n'a pas été téléchargée"]);
        }
        
        Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        // return dd('Redirection test');
        // return Redirect::route('Team.index');
        return Redirect::route('Team.index')->with('message', 'Team created succesfully');
    }

    public function destroyTeam(Team $Team){
        $Team->delete();
        return Redirect::route('Team.index')->with('message', 'Team deleted succesfully');
    }

    public function EditTeam(Team $Team){
        return Inertia::render('Index/Dashboard/Team/EditTeam', [
            'team' => $Team
        ]);
    }

    public function updateTeam(Request $request, Team $Team){
        $validated = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
        ]);

        $Team->update($validated);

        return Redirect::route('Team.index')->with('message', 'Team update succesfully');
    }
}
