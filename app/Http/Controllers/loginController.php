<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cinema\Http\Requests;
use Cinema\Http\Requests\loginRequest;
use Cinema\Http\Controllers\Controller;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(loginRequest $request)
    {
        //return ($request['password'].$request['email']);

        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
            return Redirect::to('admin');
        }
        Session::flash('message-error','Los datos ingresados son incorrectos');
        return Redirect::to('/');
    }

    // public function ingreso(loginRequest $request)
    // {
    //     if($request->ajax()){
    //         // return ($request['password'].$request['email']);
    //         if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
    //             return Redirect::to('admin');
    //         }
    //         Session::flash('message-error','Los datos ingresados son incorrectos');
    //         return Redirect::to('/');
    //     }
    // }

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

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
