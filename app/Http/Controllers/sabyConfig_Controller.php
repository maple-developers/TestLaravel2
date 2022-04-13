<?php

namespace App\Http\Controllers;

use App\Models\saby_config;
use Illuminate\Http\Request;

class sabyConfig_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(saby_config::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\saby_config  $saby_config
     * @return \Illuminate\Http\Response
     */
    public function show(saby_config $saby_config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\saby_config  $saby_config
     * @return \Illuminate\Http\Response
     */
    public function edit(saby_config $saby_config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\saby_config  $saby_config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saby_config $saby_config)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\saby_config  $saby_config
     * @return \Illuminate\Http\Response
     */
    public function destroy(saby_config $saby_config)
    {
        //
    }
}
