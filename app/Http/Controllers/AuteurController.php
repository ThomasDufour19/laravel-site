<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Auteur;

class AuteurController extends Controller
{
    public function index()
    {
        $auteurs = Auteur::all();
        return view('auteur.index', compact("auteurs"));
    }
    
    public function create()
    {
        return view('auteur.create');
    }

    public function store(Request $request)
    {
        $auteur = new Auteur();
        $auteur->name = $request->get('name');
        $auteur->save();

        return redirect()->route('auteur.index');
    }
    public function show($id)
    {
        $auteur = Auteur::with("books")->find($id);

        return view('auteur.show', compact("auteur"));
    }
    public function edit($id)
    {
        $auteur = Auteur::find($id);

        return view('auteur.edit', compact("auteur"));
    }
    public function update(Request $request, $id)
    {
        $auteur = Auteur::find($id);
        $auteur->name = $request->get('name');
        $auteur->save();

        return redirect()->route('auteur.index');
    }
    public function destroy(Request $request)
    {
        Auteur::destroy( $request->get("auteur_id"));

        return redirect()->route('auteur.index');
    }
}
