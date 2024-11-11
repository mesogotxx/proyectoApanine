<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function login()
    {
        return view('login.login');
    }
    public function sidebar()
    {
        return view('posts.sidebar');
    }
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }
    
    // Vistas sidebar
    public function fichabeneficiario()
    {
        return view('views.fichabeneficiario'); 
    }

    public function asistencia()
    {
        return view('views.asistencia'); 
    }

    public function registroactividad()
    {
        return view('views.registroactividad'); 
    }
}