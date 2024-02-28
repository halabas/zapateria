<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZapatoRequest;
use App\Http\Requests\UpdateZapatoRequest;
use App\Models\User;
use App\Models\Zapato;

class ZapatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!is_null(auth()->user())){
            $n = User::find(auth()->id())->carritos->count();
        }
        else{
            $n="";
        }
        $zapatos = Zapato::all();
        return view('welcome',['n' =>$n,'zapatos'=>$zapatos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreZapatoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Zapato $zapato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zapato $zapato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZapatoRequest $request, Zapato $zapato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zapato $zapato)
    {
        //
    }
}
