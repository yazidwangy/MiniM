<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function one()
    {
        return view('selections.one', [
            'title' => 'One'
        ]);
    }
    
    public function oneInside()
    {
        return view('selections.oneInside', [
        'title' => 'One Inside'
        ]);
    }
}
