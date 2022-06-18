<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TastController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '本文',
        ];
        return view('index', $item);
    }
}