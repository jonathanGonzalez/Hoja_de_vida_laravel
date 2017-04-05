<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index()
    {
        return view('principal/index');
    }
    public function personal()
    {
        return view('principal/personal');
    }
    public function academico()
    {
        return view('principal/academico');
    }
    public function laboral()
    {
        return view('principal/laboral');
    }
}
