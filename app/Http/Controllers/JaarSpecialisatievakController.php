<?php

namespace App\Http\Controllers;

use App\Jaar;
use Illuminate\Http\Request;

class JaarSpecialisatievakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jaar)
    {
        //
        $jaar = Jaar::find($jaar);
        return $jaar->specialisatievakken;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($jaar, $id)
    {
        //
        $jaar = Jaar::find($jaar);
        return $jaar->specialisatievakken->find($id);
    }
}
