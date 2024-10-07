<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show($numero = null)
    {
        return view('contacto', ['numero' => $numero]);
    }
}

