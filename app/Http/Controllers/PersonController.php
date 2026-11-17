<?php

namespace App\Http\Controllers;

use App\Models\Oblast;
use App\Models\Person;
use Illuminate\Http\Request;
use App\Models\Rayon;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::with('oblast', 'rayon')->get();
        return view('people.index', ['people' => $people]);
    }

    public function create()
    {
        $oblasts = Oblast::all();
        $rayons = Rayon::all();
        return view('people.create', ['oblasts' => $oblasts, 'rayons' => $rayons]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:2|max:100',
            'passport'  => 'required|string|size:9|unique:people,passport',
            'inn'       => 'required|digits:14|unique:people,inn',
            'oblast_id' => 'required|exists:oblasts,id',
            'rayon_id'  => 'required|exists:rayons,id',
        ]);

        Person::create($request->only('name', 'passport', 'inn', 'oblast_id', 'rayon_id'));

        return redirect('/people');
    }

}
