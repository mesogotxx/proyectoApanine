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
        return view('posts.sidebar');
    }
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }
    
    // Vistas sidebar
    // VIEWS DEL BENEFICIARIO
    public function fichabeneficiario()
    {
        return view('views.beneficiario.fichabeneficiario'); 
    }

    public function formularioBeneficiario()
    {
        return view('views.beneficiario.formularioBeneficiario'); 
    }

    public function verBeneficiario()
    {
        return view('views.beneficiario.verBeneficiario'); 
    }

    // VIEWS DE ASISTENCIA
    public function asistencia()
    {
        return view('views.asistencia.asistencia'); 
    }

    public function registroactividad()
    {
        return view('views.asistencia.registroactividad'); 
    }
}
