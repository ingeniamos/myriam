<?php

namespace Cinema\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Cinema\User;
use Cinema\Cliente;
use Cinema\Http\Requests;
use Cinema\Http\Requests\ClienteRequest;
use Cinema\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;

class ClienteController extends Controller
{
    public function listing() {
        $user = Auth::id();
        $clientes = Cliente::all();
        // $votantesfilt = $votantes->where('user_id', $user);
        return response()->json(
            $clientes->toArray()
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::lists('name','id');
        // $profesiones = Profesion::lists('profesion','id');
        return view('cliente.create',compact('profesiones'),compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        if($request->ajax()){
            Cliente::create($request->all());
            return response()->json([
                'message' => "creado OK",
            ]);
        }
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
