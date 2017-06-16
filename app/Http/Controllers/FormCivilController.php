<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use Illuminate\Support\Facades\Auth;

class FormCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formCivil');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formcandidat()
    {
        return view('formCandidatureCandidat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createformCivil(Request $request)
    {
        //  si ca existe c'est qu'il en a deja créé un donc il peut modifier ce dernier. Cyril.
        // $form = Form::all()->where('user_id', '=', Auth::user()->id)->first()
        $form = new Form;
        $form->user_id=Auth::user()->id;
        $form->prenom=$request->input('prenom');
        $form->nom=$request->input('nom');
        $form->email=$request->input('email');
        $form->date=$request->input('date');
        $form->pays=$request->input('pays');
        $form->national=$request->input('national');
        $form->adresse=$request->input('adresse');
        $form->tel=$request->input('tel');
        $form->statut=$request->input('statut');
        $form->numpole=$request->input('numpole');
        $form->secu=$request->input('secu');
        $form->save();
        return redirect()->route('formCandidatureCandidat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createformCandid(Request $request)
    {
        $form = Form::all()->where('user_id', '=', Auth::user()->id)->first();
        $form->etudes=$request->input('etudes');
        $form->parcours=$request->input('parcours');
        $form->statut_form='1';
        $form->anglais=$request->input('anglais');
        $form->motivation=$request->input('motivation');
        $form->superpouvoirs=$request->input('superpouvoirs');
        $form->codecademy=$request->input('codecademy');
        $form->OCR=$request->input('OCR');
        $form->dispo8mois=$request->input('dispo8mois');
        $form->contraintes=$request->input('contraintes');
        $form->financement=$request->input('financement');
        $form->notoriete=$request->input('notoriete');
        $form->update();
        return redirect()->route('GG');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
