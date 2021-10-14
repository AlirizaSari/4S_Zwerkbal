<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class UpcomingTournamentController extends Controller
{
    public function show()
    {
        $tournaments = Tournament::where('date', '>', date("Y-m-d"))->orderBy('date')->get(); 
    }
}
