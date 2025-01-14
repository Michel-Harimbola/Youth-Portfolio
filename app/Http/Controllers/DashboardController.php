<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function DashboardIndex() {
        return Inertia::render('Dash/Index');
    }
}
