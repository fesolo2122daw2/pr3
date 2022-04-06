<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorSoci extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('llistarSocis', compact('soci'));

}
