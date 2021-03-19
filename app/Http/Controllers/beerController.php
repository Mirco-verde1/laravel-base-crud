<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $beers = Beer::all();
        return view('home', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
          'brand'=> 'required|max:100',
          'type'=> 'required|max:100',
          'nationality'=> 'required|max:100',
          'manufactoring_plant'=> 'required|max:200',
          'label_image'=> 'required|max:2048',
          'description'=> 'required|max:500',
          'price'=> 'required',       ]);

        $data = $request->all();

        $createBeer = new Beer;

        $createBeer->fill($data);

        $createBeer->save();

        $beerStored= Beer::orderBy('id', 'desc')->first();

        return redirect()->route('show', $beerStored);
    }


 /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer  $beerDetails
     * @return \Illuminate\Http\Response
     */


    public function show(Beer $beer)
    {
      return view('show', compact('beer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
