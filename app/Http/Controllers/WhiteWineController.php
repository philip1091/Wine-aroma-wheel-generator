<?php

namespace App\Http\Controllers;

use App\WhiteWine;
use Illuminate\Http\Request;

class WhiteWineController extends Controller
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
        return view('white.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
          'sku' => 'required',
          'citrusFruit' => 'required|integer|between:0,6',
          'stoneFruit' => 'required|integer|between:0,6',
          'tropicalFruit' => 'required|integer|between:0,6',
          'honey' => 'required|integer|between:0,6',
          'sweetness' => 'required|integer|between:0,6',
          'body' => 'required|integer|between:0,6',
          'minerality' => 'required|integer|between:0,6',
          'creamness' => 'required|integer|between:0,6',
          'herbalGreen' => 'required|integer|between:0,6',
          'floral' => 'required|integer|between:0,6',
        ]);

        // WhiteWine::create($request->all());

        $newWhite = new WhiteWine();

        $newWhite->sku = $request->input('sku');
        $newWhite->citrusFruit = $request->input('citrusFruit');
        $newWhite->stoneFruit = $request->input('stoneFruit');
        $newWhite->tropicalFruit = $request->input('tropicalFruit');
        $newWhite->honey = $request->input('honey');
        $newWhite->sweetness = $request->input('sweetness');
        $newWhite->body = $request->input('body');
        $newWhite->minerality = $request->input('minerality');
        $newWhite->creamness = $request->input('creamness');
        $newWhite->herbalGreen = $request->input('herbalGreen');
        $newWhite->floral = $request->input('floral');

        // $newWhite->user_id = auth()->id();

        $newWhite->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WhiteWine  $whiteWine
     * @return \Illuminate\Http\Response
     */
    public function show(WhiteWine $whiteWine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WhiteWine  $whiteWine
     * @return \Illuminate\Http\Response
     */
    public function edit(WhiteWine $whiteWine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WhiteWine  $whiteWine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhiteWine $whiteWine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WhiteWine  $whiteWine
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhiteWine $whiteWine)
    {
        //
    }
}
