<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function create()
    {
      return view('animal.create');
    }

    public function store()
    {
      dd(request()->all());
    }

    
}
