<?php

namespace App\Http\Controllers;

use App\Jaar;
use Illuminate\Http\Request;

class JaarVerplichtvakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jaar)
    {
        //
        return Jaar::find($jaar)->verplichtevakken;
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
        return Jaar::find($jaar)->verplichtevakken->find($id);
    }
}
