<?php

namespace App\Http\Controllers;

use App\Specialisatievak;
use Illuminate\Http\Request;

class SpecialisatievakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Specialisatievak::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialisatievak  $specialisatievak
     * @return \Illuminate\Http\Response
     */
    public function show($specialisatievak)
    {
        return Specialisatievak::find($specialisatievak);
    }
}
