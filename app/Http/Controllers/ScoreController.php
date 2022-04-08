<?php

namespace App\Http\Controllers;

use App\Models\score;
use App\Http\Requests\StorescoreRequest;
use App\Http\Requests\UpdatescoreRequest;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorescoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorescoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatescoreRequest  $request
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatescoreRequest $request, score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        //
    }
}
