<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function principal() {
        return view('principal');
    }

    public function store(Request $request){
        //Modificar el request
        $request->request->add(['username' => Str::slug($request -> username)]);
        //REALIZANDO VALIDACIONES DE CAMPOS
        $this -> validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:5|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        //dd('Creando Usuario');
        //TOMANDO VALORES E INSERTARLOS A LA BD
        User::create([
            'name' => $request -> name,
            'username' => $request -> username, //USERNAME A URL
            'email' => $request -> email,
            'password' => Hash::make($request -> password), //PASSWORD HASHEADO
        ]);

        //REDIRECCIONAR
        return redirect() -> route('post.index');
    }

}
