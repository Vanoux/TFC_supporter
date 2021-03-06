<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    // récupère tous les matchs passés
    public function pastGames()
    {
        $res = Game::with('topphotos')->whereDate('day','<',date('Y-m-d'))->orderBy('day','desc')->get();
        return response()->json([
            'games' => $res
        ]);
    }

    // récupère tous les matchs à venir
    public function futureGames()
    {
        $res = Game::whereDate('day','>=',date('Y-m-d'))->orderBy('day','asc')->get();
        return response()->json([
            'games' => $res
        ]);
    }

    // récupère le match (s'il existe) dont le coup d'envoi était il y a moins d'un jour
    public function currentGame()
    {
        $res = Game::whereDate('day','>=',date('Y-m-d H:i:s',strtotime("-1 day")))
        ->whereDate('day','<=',date('Y-m-d H:i:s',strtotime("+1 day")))
        ->get();
        return response()->json([
            'game' => $res
        ]);
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
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
