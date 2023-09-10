<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    //
    public function index () 
    {
        return view('auth.register');

        
    }

    public function store (Request $request)
    {

        // Modificar el request

        $request->request->add(['username' => Str::slug( $request->username )]);


        // Validacion
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:6|confirmed' // confirmed para password_confirmation, debe ser el mismo nombre y _confirmation
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username, // slug lo convierte a una url
            'email' => $request->email,
            'password' => Hash::make( $request->password )
        ]);


        return redirect()->route('posts.index');

    }

}
