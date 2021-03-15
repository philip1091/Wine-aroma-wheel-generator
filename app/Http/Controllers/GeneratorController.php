<?php

namespace App\Http\Controllers;

use App\Generator;
use App\RedWine;
use App\WhiteWine;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $whiteWine = WhiteWine::all();
      $redWine = RedWine::all();
      $lastWhiteWine = $whiteWine->last();
      $lastRedWine = $redWine->last();
      // dd($lastWine);
      return view('generator', compact('lastWhiteWine', 'lastRedWine'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function select(Request $request)
    // {

    //   // dd($request->all());
    //     $selected = Generator::pluck('wines', 'id');

    //     $selectedID = 2;

    //     return view('generator', compact('selectedID', 'selected'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function show(Generator $generator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function edit(Generator $generator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generator $generator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generator $generator)
    {
        //
    }
}
