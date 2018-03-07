<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\userCreateRequest;
use Cinema\Http\Requests\userUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cinema\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}

	public function find(Route $route){
		$this->user = User::find($route->getParameter('user'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(10);
		return view('user.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(userCreateRequest $request)
	{
		//User::create($request->all());
		User::create([
			'name'=> $request['name'],
			'email'=>$request['email'],
			'password'=>bcrypt($request['password']),
		]);
		Session::flash('message','Usuario creado correctamente');
		return redirect('/user')->with('message','Usuario creado correctamente');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('user.edit', ['user'=>$this->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, userUpdateRequest $request)
	{
		$this->user->fill($request->all());
		$this->user->save();

		Session::flash('message','Usuario editado correctamente');
		return Redirect::to('/user');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->delete();
		Session::flash('message','Usuario eliminado correctamente');
		return Redirect::to('/user');
	}

}
