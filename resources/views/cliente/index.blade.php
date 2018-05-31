@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cédula</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Profesión</th>s
			<th></th>
		</thead>
		<tbody id="datos">
		@foreach ($clientes as $cliente)
			<tr>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->apellido}}</td>
				<td>{{$cliente->cedula}}</td>
				<td>{{$cliente->telefono}}</td>
				<td>{{$cliente->email}}</td>
				<td>{{$cliente->profesion_id}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{!! $clientes->render() !!}

@endsection

@section('scripts')
	{!!Html::script('js/script6.js?v=01')!!}
@endsection