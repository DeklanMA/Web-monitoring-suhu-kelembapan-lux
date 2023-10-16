<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Msensor;

class sensor extends Controller
{
    //
    public function bacasuhu()
    {
        //baca nilai/isi tabel sensor
        $sensor = Msensor::select('*')->get();
        //baca suhu(view baca suhu)
        return view('bacasuhu',['nilaisensor'=>$sensor]);

    }

}
