<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitarbeiterController extends Controller
{
    public function index()
    {
        return view('users.mitarbeiter.index');
    }
}
