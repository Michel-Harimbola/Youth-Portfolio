<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AproposController extends Controller
{
    public function AproposView() {
        return Inertia::render('Index/Apropos');
    }
}
