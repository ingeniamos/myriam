@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cédula</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Puesto</th>
			<th>Líder</th>
			<th></th>
		</thead>
		<tbody id="datos">
		@foreach ($votantes as $user)
			<tr>
				<td>{{$user->nombre}}</td>
				<td>{{$user->apellido}}</td>
				<td>{{$user->cedula}}</td>
				<td>{{$user->telefono}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->puesto_id}}</td>
				<td>{{$user->lider_id}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{!! $votantes->render() !!}

@endsection

@section('scripts')
	{!!Html::script('js/script6.js?v=01')!!}
@endsection