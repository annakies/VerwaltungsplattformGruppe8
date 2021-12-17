<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LieferantController extends Controller
{
    public function index()
    {
        return view('users.lieferant.index');
    }
}
