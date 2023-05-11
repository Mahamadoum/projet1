<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //AFFICHER LA VUE CREATE
    public function create()
    {
        return view('produits.index');
    }
    // ENRREGISTREE UN PRODUIT
    public function store(Request $request)
    {
        $prod = new Produit();
        $prod->lib=$request->lib;
        $prod->code=$request->code;
        $prod->datexp=$request->dateexp;
        $prod->prix=$request->prix;
        $prod->save();

        return redirect()->route('indexpt');


    }
    //INDEX POUR AFFICHER TOUS LES PRODUITS
    public function index()
    {
        return view('produits.index');
    }
}
