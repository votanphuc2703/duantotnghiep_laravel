<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShowTimeModel;

class ShowTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ShowTimeModel::all();
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d=$request->only('dateShow','startTime','idMovie','idRom');
        $data=ShowTimeModel::create($d);
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=ShowTimeModel::whereId($id)->first();
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ShowTimeModel::whereId($id)->first();
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=ShowTimeModel::whereId($id)->update($id);
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=ShowTimeModel::whereId($id)->delete();
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }
}
