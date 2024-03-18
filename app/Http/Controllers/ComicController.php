<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        // Prendo dalla richiesta tutto il suo contenuto e lo metto in $data
        $data = $request->validated();

        // Istanzio un nuovo comic
        $comic = new Comic();

        // Inserisco i valori di $data al nuovo comic
        $comic->fill($data);

        // Salvo nel database
        $comic->save();

        // Faccio il redirect alla pagina show e passo l'id del nuovo comic per vederlo in pagina
        return to_route('comics.show', $comic->id)
        ->with('type', 'success')
        ->with('message', "$comic->title creato con successo.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // Prendo dalla richiesta tutto il suo contenuto e lo metto in $data
        $data = $request->validated();

        // Inserisco i valori di $data al comic
        $comic->fill($data);

        // Salvo nel database
        $comic->save();

        // Faccio il redirect alla pagina show e passo l'id del comic per vederlo in pagina
        return to_route('comics.show', $comic->id)
        ->with('type', 'success')
        ->with('message', "$comic->title modificato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return to_route('comics.index')
        ->with('type', 'success')
        ->with('message', "$comic->title eliminato con successo.");
    }
}
