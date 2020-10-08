<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $d=['name'=>$request->name,'email'=>$request->email,'password'=>bcrypt($request->_token),'_token'=>$request->_token];
        $data=User::create($d);
        $user=User::whereId($data['id'])->first();
        // $user->assignRole('Customer Has Not Verified Email');
        $user->givePermissionTo('View','Review Movie');
        if($data){
            return response()->json(['data'=>$data,200]);
        }else{
            return response()->json(['err'=>'Lỗi',404]);
        }
    }
    public function postLogin(Request $request){
        $d=$request->only('email','password');
        if(Auth::attempt($d)){
            if(Auth::check()){
                $user=Auth::user();
                array_push($d,$user->)
            }
        }
    }
}
