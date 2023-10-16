<?php

namespace App\Http\Controllers;

use App\Models\Msensor;
use Illuminate\Http\Request;

class SensorLaravel extends Controller
{
    //
    public function bacasuhu()
    {
        $sensor = Msensor::select('*')->get();

        return view('bacasuhu', ['nilaisensor' =>$sensor]);
    }
    public function bacakelembaban()
    {
        $sensor = Msensor::select('*')->get();

        return view('bacakelembaban', ['nilaisensor' =>$sensor]);
    }

     public function showData()
{
    $data = Msensor::latest()->paginate(1);
    return view('index', compact('data'));
}
}
