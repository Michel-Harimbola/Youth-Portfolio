<?php

namespace App\Http\Controllers;

use App\Models\Historic;
use App\Models\Team;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AproposController extends Controller
{
    public function AproposView() {
        $historic = Historic::limit(6)->get();
        $team = Team::all();

        return Inertia::render('Index/Apropos', [
            'Historics' => $historic,
            'Teams' => $team,
        ]);
    }
}
