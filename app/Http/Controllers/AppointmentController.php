<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    public function loadAllAppointment() {
        $all_appointment = Appointment::all();
        return Inertia::render('Index/Dashboard/Appointment/Appointment', ['all_appointment' => $all_appointment]);
    }

    public function AppointmentForm() {
        return inertia('Index/Dashboard/Appointment/AddAppointment');
    }

    public function AddAppointment(Request $request) {
        $validated = $request->validate([
            'authentification' => 'required|string',
            'datetime' => 'required|date',
            'motif' => 'required|string',
        ]);

        Appointment::create($validated);

        return Redirect::route('Appointment.index')->with('message', 'Appointment created succesfully');
    }

    public function destroyAppointment(Appointment $Appointment){
        $Appointment->delete();
        return Redirect::route('Appointment.index')->with('message', 'Appointment deleted succesfully');
    }

    public function EditAppointment(Appointment $Appointment){
        return Inertia::render('Index/Dashboard/Appointment/EditAppointment', [
            'appointment' => $Appointment
        ]);
    }

    public function updateAppointment(Request $request, Appointment $Appointment){
        $validated = $request->validate([
            'authentification' => 'required|string',
            'datetime' => 'required|date',
            'motif' => 'required|string',
        ]);

        $Appointment->update($validated);

        return Redirect::route('Appointment.index')->with('message', 'Appointment update succesfully');
    }
}
