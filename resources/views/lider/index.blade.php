@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<th>Cod.</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cédula</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Puesto</th>
			<th>Coordinador</th>
			<th></th>
		</thead>
		<tbody id="datos">
		@foreach ($liders as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->nombre}}</td>
				<td>{{$user->apellido}}</td>
				<td>{{$user->cedula}}</td>
				<td>{{$user->telefono}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->puesto_id}}</td>
				<td>{{$user->coordinador_id}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{!! $liders->render() !!}
@endsection

@section('scripts')
	{!!Html::script('js/script4.js?v=01')!!}
@endsection