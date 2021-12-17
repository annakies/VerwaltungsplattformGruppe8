<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Adresse;
use App\Models\Auftrag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SupplierRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.sRegister');
    }

    public function store(Request $request)
    {

        // dd(auth()->attempt($request->only('email', 'password')));
        $this->validate($request, [
            'name' => 'required |string| max:225',
            'password' => 'required|confirmed',
            'email' => 'required | email| max:225',
            'straße' => 'required| string| max:225',
            'hausnummer' => 'required |int| max:1000',
            'plz' => 'required | int',
            'ortsname' => 'required|string| | max:50',
        ]);
        $adresse = Adresse::create([
            'straße' => $request->straße,
            'hausnummer' => $request->hausnummer,
            'plz' => $request->plz,
            'ortsname' => $request->ortsname,
        ]);
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'adress_nr' => $adresse->id
        ]);
        $user->attachRole('lieferant');
        // dd(redirect()->route('dashboard'));
        // dd($request->only('password', 'email'));
        auth()->attempt($request->only('password', 'email'));

        return redirect()->route('dashboard');
    }
}
