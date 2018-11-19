<?php

namespace App\Http\Controllers;

use App\Storephoto;
use Illuminate\Http\Request;

class StorephotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Storephoto::All();
        return view('tfcphotos.index', compact('photos'));
        
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
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Storephoto::find($id);
        return view('tfcphotos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Storephoto $storephoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storephoto $storephoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storephoto $storephoto)
    {
        //
    }
}
