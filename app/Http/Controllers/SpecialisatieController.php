<?php

namespace App\Http\Controllers;

use App\Specialisatie;
use App\Specialisatievak;
use Illuminate\Http\Request;

class SpecialisatieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Specialisatie::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialisatie  $specialisatie
     * @return \Illuminate\Http\Response
     */
    public function show($specialisatie)
    {
        return Specialisatie::find($specialisatie);
    }

}
