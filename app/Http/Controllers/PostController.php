<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth'); //revisa antes de mostrar el index, que el usuario está autenticado
    }
    public function index(){
        return view('dashboard');
    }
}
