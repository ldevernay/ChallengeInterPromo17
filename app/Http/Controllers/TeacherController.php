<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class TeacherController extends Controller
{


    /**
    *Create a new controller instance.
                            *
                            * @return void
                            */
    public function __construct()
    {
        $this->middleware('auth');
    }







    /**
    *Display a listing of the resource.
                            *
                            * @return \Illuminate\Http\Response
                            */
    public function index()
    {
        return redirect('/listeCandidats');
    }







    /**
    *Show the form for creating a new resource.
                            *
                            * @return \Illuminate\Http\Response
                            */
    public function create()
    {
        //
    }







    /**
    *Store a newly created resource in storage.
                            *
                            * @param  \Illuminate\Http\Request  $request
                            * @return \Illuminate\Http\Response
                            */
    public function store(Request $request)
    {
        //
    }







    /**
    *Display the specified resource.
                            *
                            * @param  int  $id
                            * @return \Illuminate\Http\Response
                            */
    public function show($id)
    {
        //
    }







    /**
    *Show the form for editing the specified resource.
                            *
                            * @param  int  $id
                            * @return \Illuminate\Http\Response
                            */
    public function edit($id)
    {
        //
    }







    /**
    *Update the specified resource in storage.
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
    *Update the specified resource in storage.
                            *
                            * @param  \Illuminate\Http\Request  $request
                            * @param  int  $id
                            * @return \Illuminate\Http\Response
                            */
    public function candidatDetaille(Request $request, $id)
    {
        $details = Form::all()->where('user_id', '=', $id)->first;
        // 		$details = Form::findOrFail($id);

        return view('candidatDetaille', ['details' => $details]);
    }







    /**
    *Remove the specified resource from storage.
                            *
                            * @param  int  $id
                            * @return \Illuminate\Http\Response
                            */
    public function destroy($id)
    {
        //
    }
}
