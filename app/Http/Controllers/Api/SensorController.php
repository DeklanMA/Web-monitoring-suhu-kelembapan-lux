<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Msensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Msensor::orderBy('id')->get();
        return response()->json([
            'status'=>true,
            'message'=>'data ditemukan',
            'data'=>$data

            

        ],200);
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataSensor = new Msensor;

        $validator = Validator::make($request->all(), [
            'suhu'     => 'required',
            'kelembaban'     => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json([
            'status'=>false,
            'message'=>'Data gagal di buat',
            'data' => $validator->errors()

            ]);
        }

        $dataSensor->suhu = $request->suhu;
        $dataSensor->kelembaban = $request->kelembaban;

        $post = $dataSensor->save();

        return response()->json([
            'status'=>true,
            'message'=>'Data berhasil di buat',
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Msensor::find($id);
        if($data){
            return response()->json([
                'status'=>true,
                'message'=>'Data Ditemukan',
                'data'=>$data
            ],200);
        }else{
            return response()->json([
                'status'=>False,
                 'message'=>'Data Tidak Ditemukan',
                'data'=>$data

            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $dataSensor = Msensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak Ditemukan',
                'data'=>$dataSensor
            ],404);
        
        }
        $validator = Validator::make($request->all(), [
            'suhu'     => 'required',
            'kelembaban'     => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json([
            'status'=>false,
            'message'=>'Data gagal di update',
            'data' => $validator->errors()

            ]);
        }

        $dataSensor->suhu = $request->suhu;
        $dataSensor->kelembaban = $request->kelembaban;

        $post = $dataSensor->save();

        return response()->json([
            'status'=>true,
            'message'=>'Data berhasil di update',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         //
        $dataSensor = Msensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak Ditemukan',
                'data'=>$dataSensor
            ],404);
        
        }
        $post = $dataSensor->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Data berhasil di delete',
            ]);
    }
}
