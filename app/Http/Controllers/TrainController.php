<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        //dd($trains);
        // $date = Train::now()->get();
        // dd($date);

        $date = Carbon::now()->format('Y-m-d');
        
        
          $currentTime = Train::where('departure_day', $date)->get();
         dd($currentTime);
        
        
        return view('home');
    }
}
