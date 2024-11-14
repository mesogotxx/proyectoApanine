<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function login()
    {
        return view('login.login');
    }
    public function sidebar()
    {
        return view('header.base-views');
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

    public function formularioBeneficiario()
    {
        return view('views.formularioBeneficiario'); 
    }

    public function verBeneficiario()
    {
        return view('views.verBeneficiario'); 
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
