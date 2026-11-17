<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSum extends Controller
{
    public function index()
    {
        return view('sum');
    }

    public function calculate (Request $request)
    {
        $a = $request->a;
        $b = $request->b;

        $result = $a + $b;

        return view('sum', compact('result'));
    }
}
