<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KundeController extends Controller
{
    public function index()
    {
        return view('users.kunde.index');
    }
}
