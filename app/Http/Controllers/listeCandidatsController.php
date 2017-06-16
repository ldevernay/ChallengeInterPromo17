<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Form;
use App\Role_user;

class listeCandidatsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function getCandidats(Request $request)
    {
        //  $candidats = \App\candidats::All();  // a ce moment nous n'avons pas les roles liés aux utilisateurs donc on ne peux pas faire de difference pour l'instant;
        $users = User::All();
        $rolesuser = Role_user::All();
        $roles = [];
        $candidats = [];
        foreach ($users as $user) {
            if(Form::All()->where('user_id', '=', $user->id)->first()){
                $candidats[]=$user;
            }
        }
        // ->where(user()->roles->implode("slug"), 'Can');
        // ->roles->implode("slug");

        // foreach ($candidats as $candidat){
        //     // $candidat=$request=>input('candidat');
        //     if ($user->roles->implode("slug")=="Can"){
        //         $candidats[]=$user;
        //         return view ('listeCandidats',['candidat', => $user]);
        //     }
        // }

        return view('listeCandidats', ['candidats'=>$candidats]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
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
