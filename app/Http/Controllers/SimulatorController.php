<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulatorController extends Controller
{

    public function statsView()
    {
        return view('Simulator.stats');
    }
}
