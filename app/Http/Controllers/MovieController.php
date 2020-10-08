<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieModel;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=MovieModel::all();
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
        $d=$request->only('nameMovie','introductionMovie','descriptionMovie','caster','director','genreMovie','countryMovie','releaseDate','minAge','image','imageList','linkTrailer','priceSingleSeat','priceDouble','active');
        $data=MovieModel::create($d);
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
        $data=MovieModel::whereId($id)->first();
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
        $data=MovieModel::whereId($id)->first();
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
        $d=$request->only('nameMovie','introductionMovie','descriptionMovie','caster','director','genreMovie','countryMovie','releaseDate','minAge','image','imageList','linkTrailer','priceSingleSeat','priceDouble','active');
        $data=MovieModel::whereId($id)->update($d);
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
        $data=MovieModel::whereId($id)->delete();
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }
}
