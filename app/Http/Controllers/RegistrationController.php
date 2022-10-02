<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegistrationController extends Controller
{
   public function index(){
    return view('auth.register');
   }
   public function store (Request $request){
    $data=$request->only(['name','email']);
    $data['password']=Hash::make($request->get('password'));
    User::create($data);
    return 'registerd successfully';

   }

}
