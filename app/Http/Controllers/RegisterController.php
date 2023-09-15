<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'name' => 'required|max:30 ',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|confirmed|min:6',
        ]);

        //dd('creando-usuario'); 

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  Hash::make($request->password)
        ]);
    }
}
