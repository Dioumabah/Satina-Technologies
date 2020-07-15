<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $etudiants=Etudiant::finder();
       return view('etudiant.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etudiants=Etudiant::all();
        return view('etudiant.create', compact('etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'matricule'=>'required|min:3',
            'nom'=>'required|min:3',
            'prenom'=>'required|min:6',
            'formation'=>'required',
            'montant'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
        ]);
        $data=new Etudiant;
        $data->matricule=$request->matricule;
        $data->nom=$request->nom;
        $data->prenom=$request->prenom;
        $data->formation=$request->formation;
        $data->montant=$request->montant;
        $data->date_debut=$request->date_debut;
        $data->date_fin=$request->date_fin;
        $data->avance=$request->avance;

        $data->save();
        session()->flash('message', 'Etudiant enregistré avec succès');
        return redirect()->route('etudiant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant=Etudiant::findOrFail($id);
        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant=Etudiant::findOrFail($id);
        return view('etudiant.edit', compact('etudiant'));
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
        $this->validate($request, [
            'matricule'=>'required|min:3',
            'nom'=>'required|min:3',
            'prenom'=>'required|min:6',
            'formation'=>'required',
            'montant'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
        ]);
        $data=Etudiant::findOrFail($id);
        $data->matricule=$request->matricule;
        $data->nom=$request->nom;
        $data->prenom=$request->prenom;
        $data->formation=$request->formation;
        $data->montant=$request->montant;
        $data->date_debut=$request->date_debut;
        $data->date_fin=$request->date_fin;
        $data->avance=$request->avance;

        $data->update();
        session()->flash('message', 'Etudiant modifié avec succès');
        return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
       return redirect()->route('etudiant.index');
    }
}
