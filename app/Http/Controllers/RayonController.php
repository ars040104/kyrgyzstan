<?php

namespace App\Http\Controllers;

use App\Models\Rayon;

class RayonController extends Controller
{
    public function byOblast($oblast_id)
    {
        $rayons = Rayon::where('id_oblast', $oblast_id)->get();
        return response()->json($rayons);
    }
}
