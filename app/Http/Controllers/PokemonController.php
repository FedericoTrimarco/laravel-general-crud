<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        // dump($pokemon);

        return view('pokemon.index', compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_pokemon = new Pokemon();

        $new_pokemon->fill($data);

        $new_pokemon->save();

        return redirect()->route('pokemon.show', $new_pokemon->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        // dump($pokemon);

        if ($pokemon) {
            return view('pokemon.show', compact('pokemon'));
        }

        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);

        if ($pokemon) {
            return view('pokemon.edit', compact('pokemon'));
        }
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
        $data = $request->all();
        // dump($data);

        // 1 - ottenere il dato da aggiornare
        $pokemon = Pokemon::find($id);

        // 2 - aggiornare le colonne (save non richiest)
        $pokemon->update($data);

        // 3 - redirect
        return redirect()->route('pokemon.show', $pokemon->id);
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
