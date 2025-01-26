<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StatisticController extends Controller
{
    public function loadAllStatistic() {
        $all_Statistic = Statistic::limit(8)->get();
        return Inertia::render('Index/Dashboard/Statistic/Statistic', ['all_Statistic' => $all_Statistic]);
    }

    public function StatisticForm() {
        return inertia('Index/Dashboard/Statistic/AddStatistic');
    }

    public function AddStatistic(Request $request) {

        $validated = $request->validate([
            'Training_nbr' => 'required|integer',
            'Student_nbr' => 'required|integer',
            'activitie_nbr' => 'required|integer',
            'Certified_training' => 'required|integer',
        ]);

        Statistic::create($validated);

        return Redirect::route('Statistic.index')->with('message', 'Statistic created succesfully');
    }

    public function destroyStatistic(Statistic $Statistic){
        $Statistic->delete();
        return Redirect::route('Statistic.index')->with('message', 'Statistic deleted succesfully');
    }

    public function EditStatistic(Statistic $Statistic){
        return Inertia::render('Index/Dashboard/Statistic/EditStatistic', [
            'Statistic' => $Statistic
        ]);
    }

    public function updateStatistic(Request $request, Statistic $Statistic){
        $validated = $request->validate([
            'Training_nbr' => 'required|integer',
            'Student_nbr' => 'required|integer',
            'activitie_nbr' => 'required|integer',
            'Certified_training' => 'required|integer',
        ]);

        $Statistic->update($validated);

        return Redirect::route('Statistic.index')->with('message', 'Statistic update succesfully');
    }
}
