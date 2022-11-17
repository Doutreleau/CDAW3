<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listePokemonsController extends Controller
{
    public function show($param){
        return view('listePokemons',['param'=>$param]);
    }
}