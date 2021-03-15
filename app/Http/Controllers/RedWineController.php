<?php

namespace App\Http\Controllers;

use App\RedWine;
use Illuminate\Http\Request;

class RedWineController extends Controller
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
        return view('red.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // RedWine::create($request->all());

        $request->validate([
          'sku' => 'required',
          'redFruit' => 'required|integer|between:0,6',
          'blackFruit' => 'required|integer|between:0,6',
          'floral' => 'required|integer|between:0,6',
          'herbaceous' => 'required|integer|between:0,6',
          'pepper' => 'required|integer|between:0,6',
          'earth' => 'required|integer|between:0,6',
          'sweetSpice' => 'required|integer|between:0,6',
          'leather' => 'required|integer|between:0,6',
          'tannin' => 'required|integer|between:0,6',
          'body' => 'required|integer|between:0,6',
        ]);

        $newRed = new RedWine();

        $newRed->sku = $request->input('sku');
        $newRed->redFruit = $request->input('redFruit');
        $newRed->blackFruit = $request->input('blackFruit');
        $newRed->floral = $request->input('floral');
        $newRed->herbaceous = $request->input('herbaceous');
        $newRed->pepper = $request->input('pepper');
        $newRed->earth = $request->input('earth');
        $newRed->sweetSpice = $request->input('sweetSpice');
        $newRed->leather = $request->input('leather');
        $newRed->tannin = $request->input('tannin');
        $newRed->body = $request->input('body');

        // $newWhite->user_id = auth()->id();

        $newRed->save();


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RedWine  $redWine
     * @return \Illuminate\Http\Response
     */
    public function show(RedWine $redWine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RedWine  $redWine
     * @return \Illuminate\Http\Response
     */
    public function edit(RedWine $redWine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RedWine  $redWine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RedWine $redWine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RedWine  $redWine
     * @return \Illuminate\Http\Response
     */
    public function destroy(RedWine $redWine)
    {
        //
    }
}
