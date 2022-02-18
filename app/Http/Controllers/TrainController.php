<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        //dd($trains);
        //$date = Train::now();
        //dd($date);
         $currentTime = Train::where('departure_day', '2022-02-18')->get();
        dd($currentTime);
        
        
        return view('home');
    }
}
