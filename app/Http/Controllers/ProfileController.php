<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    //
    public function update(Request $request){

        if($request->input('name')){
            auth()->user()->update($request->only('name', 'email'));
            // $user = Auth::user();
            // $user->update($request->only('userName','email'));

            // Flash::message("YOur account has been updated!");

        }else{
            return print_r($request->input('name'));
        }

        if($request->input('password')){
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile');
    }
}
