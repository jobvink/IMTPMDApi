<?php

namespace App\Http\Controllers;

use App\Keuzevak;
use Illuminate\Http\Request;

class KeuzevakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Keuzevak::all();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Keuzevak  $keuzevak
     * @return \Illuminate\Http\Response
     */
    public function show(Keuzevak $keuzevak)
    {
        return $keuzevak;
    }
}
