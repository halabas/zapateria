<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\User;
use App\Models\Zapato;
use Illuminate\Http\Request;



class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->authorizeResource(Carrito::class, 'carrito');
     }
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $carrito = Carrito::where('user_id',auth()->id())->where('zapato_id',$request->zapato)->first();
        $zapatos = Zapato::all();

        if($carrito==null){
            Carrito::create(['user_id' =>auth()->id(),
            'zapato_id' =>$request->zapato,
            'cantidad' =>1]);
        }

        else{
            $carrito->cantidad +=1;
            $carrito->save();
        }
        $n = User::find(auth()->id())->carritos->count();


        return view('welcome',['n' =>$n,'zapatos'=>$zapatos]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    public function ver()
    {
        $this->authorize('viewAny', Carrito::class);

        $carritos = auth()->user()->carritos;
        return view('carritos.ver', ['carritos' => $carritos]);
    }
}
