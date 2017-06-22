<?php

namespace App\Http\Controllers;

use App\Specialisatie;
use Illuminate\Http\Request;

class SpecialisatieSpecialisatievakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($specialisatie)
    {
        //
        return Specialisatie::find($specialisatie)->specialisatievakken;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($specialisatie, $id)
    {
        //
        return Specialisatie::find($specialisatie)->specialisatievakken->find($id);
    }
}
