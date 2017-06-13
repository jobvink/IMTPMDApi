<?php

namespace App\Http\Controllers;

use App\Jaar;
use Illuminate\Http\Request;

class JaarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Jaar::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jaar  $jaar
     * @return \Illuminate\Http\Response
     */
    public function show(Jaar $jaar)
    {
        //
        return $jaar;
    }
}
