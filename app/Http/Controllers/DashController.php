<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashController extends Controller
{
    public function DashIndex() {
        return Inertia::render('Index/Dashboard/Dashboard');
    }
}
