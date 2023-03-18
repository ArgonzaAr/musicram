<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        $this-> validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //verificando la autenticación
        if(!auth()->attempt($request->only('email', 'password'))){
            //Si no ve autentica correctamente regresa a la pantalla de login con el mensaje de error
            return back()->with('message', 'Credenciales incorrectas');
        }

        return redirect() -> route('post.index');
    }
}
