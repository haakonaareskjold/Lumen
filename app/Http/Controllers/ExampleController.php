<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show($id)
    {
       $user = \App\Models\User::query()->findOrFail($id);

       return view('main', ['user' => $user]);
    }
}
