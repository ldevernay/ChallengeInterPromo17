<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Role;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function ajoutFormateur(Request $request)
    {

        // $user = User::create($request->only([
        //     'lastName' => $data['lastName'],
        //     'firstName' => $data['firstName'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]));
        // dd($user);

        $user = new User;
        $user->lastName = $request->input('lastName');
        $user->firstName = $request->input('firstName');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $role = $user->roles();
        dd($role);
        //  $user->roles()->attach(Role::where('slug', 'forma')->first());
        // $user->save();
        // dd($role);
        // $role->users()->save($user);
        // 'lastName' => 'test',
        // 'firstName' => $data['firstName'],
        // 'email' => $data['email'],
        // 'password' => bcrypt($data['password']),
        //  dd($user);
        //  return $user;
    }
/**
    * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
    public function index()
    {
        return view('adminpanel');
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
