<?php

namespace App\Http\Controllers;

use App\Models\Oblast;

class OblastController extends Controller
{
    public function index()
    {
        $oblasts = Oblast::with('rayons')->get();
        return view('oblast', ['oblasts' => $oblasts]);
    }
}
