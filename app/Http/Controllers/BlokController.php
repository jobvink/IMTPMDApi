<?php

namespace App\Http\Controllers;

use App\Blok;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blok::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blok  $blok
     * @return \Illuminate\Http\Response
     */
    public function show(Blok $blok)
    {
        return $blok;
    }
}
