<?php

namespace App\Http\Controllers;

use App\Models\viewprices;
use Illuminate\Http\Request;

class ViewpricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.viewprices');
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
     * @param  \App\Models\viewprices  $viewprices
     * @return \Illuminate\Http\Response
     */
    public function show(viewprices $viewprices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\viewprices  $viewprices
     * @return \Illuminate\Http\Response
     */
    public function edit(viewprices $viewprices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\viewprices  $viewprices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viewprices $viewprices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\viewprices  $viewprices
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewprices $viewprices)
    {
        //
    }
}
