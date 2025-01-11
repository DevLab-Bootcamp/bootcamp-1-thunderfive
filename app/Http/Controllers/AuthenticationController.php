<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function loginProcess(Request $request){
        //dd($request->all());
        $auth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if(!$auth){
            return redirect()->back()->with('error', 'Credential Anda salah');
        }

        return redirect()->route('dashboard.index')->with('success', 'Berhasil Login!');
               // dd($auth);


    }
    
}
