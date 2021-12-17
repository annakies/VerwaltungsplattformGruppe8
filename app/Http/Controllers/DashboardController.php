<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // if (Auth::user()->hasRole('Kunde'))
        if (auth()->user()->hasRole('kunde')) {
            return view('users.kunde.adminDashboard');
        } elseif (auth()->user()->hasRole('lieferant')) {
            // dd(auth()->user());
            return view('users.lieferant.adminDashboard');
        } elseif (auth()->user()->hasRole('administrator')) {
            // dd(auth()->user());
            return view('users.admin.adminDashboard');
        } elseif (auth()->user()->hasRole('mitarbeiter')) {
            // dd(auth()->user());
            return view('users.mitarbeiter.adminDashboard');
        } elseif (auth()->user()->hasRole('verwaltung')) {
            // dd(auth()->user());
            return view('users.verwaltung.adminDashboard');
        }
    }
}
