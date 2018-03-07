@extends('layouts.admin')

@section('content')

	@include('alerts.success')

	<table class="table">
		<thead>
			<th>Cod.</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operación</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
				{!! link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}

@stop