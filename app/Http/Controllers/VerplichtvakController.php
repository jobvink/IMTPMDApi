<?php

namespace App\Http\Controllers;

use App\Verplichtvak;
use Illuminate\Http\Request;

class VerplichtvakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Verplichtvak::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Verplichtvak  $verplichtvak
     * @return \Illuminate\Http\Response
     */
    public function show(Verplichtvak $verplichtvak)
    {
        return $verplichtvak;
    }
}
