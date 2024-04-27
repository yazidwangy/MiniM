<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function read()
    {
        return view('letters/level1/read', [
            'title' => 'Read'
        ]);
    }

    public function readB()
    {
        return view('letters/level1/readB', [
            'title' => 'Read'
        ]);
    }

    public function readC()
    {
        return view('letters/level1/readC', [
            'title' => 'Read'
        ]);
    }

    public function readD()
    {
        return view('letters/level1/readD', [
            'title' => 'Read'
        ]);
    }

    public function selamat()
    {
        return view('letters/level1/selamat', [
            'title' => 'Selamat'
        ]);
    }
}
