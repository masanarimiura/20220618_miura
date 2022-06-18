<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, ::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
}