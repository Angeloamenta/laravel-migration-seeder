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
         //dd($currentTime);
        
        //  $data = ['trains' => $currentTime];
        $data = ['trains' => $trains];

        
        return view('home', $data);
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Train  $house
     * @return \Illuminate\Http\Response
     */
    public function show(Train $train) //findOrFail
    {
        
        return view('train', compact('train'));
    }


}
