@extends('layouts.principal')

@section('content')

@include('alerts.errors')
@include('alerts.request')

<div class="row" style="display: block;">
	<img class="img-responsive" src="images/m1.jpg?v=003">
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background-color: white;">
		  <h2 class="display-4">Experiencia académica</h2>
		   <hr class="my-4">
		  <table class="table table-striped" style="font-size: 1.6rem; margin: 30px 0 0">
		  	<tr>
		  		<td>
		  			Intensidad Horaria
		  		</td>
		  		<td>
		  			120 horas
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>
		  			Horarios
		  		</td>
		  		<td>
		  			Viernes 6:00  a 10:00 pm –  Sábado 7:00 a.m. – 1:00 pm  
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>
		  			Inicio
		  		</td>
		  		<td>
		  			27 de julio de 2018
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>
		  			Finaliza
		  		</td>
		  		<td>
		  			13 de octubre de 2018
		  		</td>
		  	</tr>
		  </table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron">
		  <h2 class="display-4">Inversión</h2>
		  <hr class="my-4">

		  <div class="row">
			<div class="col-md-4 col-12">
				<div class="card text-white bg-primary mb-3" style="width: 100%;">
				  <div class="card-header">PREVENTA 30%</div>
				  <div class="card-body">
				    <h5 class="card-title">Hasta el 25 de mayo de 2018</h5>
				    <p class="card-text">$2.800.000</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-success mb-3" style="width: 100%;">
				  <div class="card-header">PREVENTA 25%</div>
				  <div class="card-body">
				    <h5 class="card-title">Hasta el 30 de junio de 2018</h5>
				    <p class="card-text">$2.950.000</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-secondary mb-3" style="width: 100%;">
				  <div class="card-header">PREVENTA 20%</div>
				  <div class="card-body">
				    <h5 class="card-title">Hasta el 15 de julio de 2018</h5>
				    <p class="card-text">$3.200.000</p>
				  </div>
				</div>
			</div>
		  </div>
		  <h2 class="display-4 text-center">Valor sin descuentos: $3.927.000</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background-color: aliceblue;">
		  <h2 class="display-4">¿Quiénes somos?</h2>
		  <hr class="my-4">
		  <p>
		  	<b>CONSTRUPRECIOS</b> “El informe de los precios de construcción”, es una empresa colombiana especializada desde hace más de 15 años en el área de costos de construcción y que ha suministrado al país la herramientas para la elaboración de presupuestos mejor posicionada en la región Nororiental de Colombia; analizando las deficiencias presentes en el gremio para la elaboración de presupuestos, Construprecios presenta su primer diplomado en presupuesto, programación y control de obra. <br><br>
		  	<b>Nuestro objetivo</b> es dar a conocer herramientas útiles para realizar una adecuada elaboración  de presupuestos, programación y control de obra; con el fin de cumplir metas y objetivos en un tiempo determinado. 
		  </p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background-color: white;">
		  <h2 class="display-4">Generalidades del Diplomado</h2>
		  <hr class="my-4">
		  <p>
		  </p>

		<div class="accordion" id="accordion">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          ¿Quién debe aprovechar esta oportunidad?
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		       El diplomado está dirigido a ingenieros civiles, arquitectos, constructores, contratistas, interventores, consultores, profesionales de áreas afines y relacionadas con el sector constructor, que ejerzan actividades de gestión de proyectos, con poca experiencia de campo o que quieran mejorar su desempeño en la elaboración de presupuesto, programación y control de obra.
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Requisitos mínimos
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
		      	<ol>
					<li>Formulario de inscripción diligenciado y con firma.</li>
					<li>2 fotografías 3×4 fondo azul.</li>
					<li>Fotocopia de la cédula de ciudadanía ampliada al 150% o equivalente según el país de origen del estudiante, pasaporte y visa.</li>
					<li>Consignación del pago de matrícula.</li>
					<li>Fotocopia de la tarjeta profesional, diploma o acta de grado; o constancia de la universidad que acredite que está cursando 9 semestre.</li>
					<li>Resumen de la hoja de vida del aspirante.</li>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Certificación
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body">
				Se certifica a quienes cumplan con el 85% de asistencia y que obtengan un promedio igual o superior a 3.5.
			</div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          Metodología
		        </button>
		      </h5>
		    </div>

		    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
		      <div class="card-body">
				El diplomado se desarrollará con conferencias y sesiones teórico-prácticas, apoyadas en medios audiovisuales a través de los cuales los docentes presentarán  los conceptos y contenidos de cada tema reforzado con el análisis de casos reales, además de desarrollar ejercicios prácticos con la asistencia de los docentes que permitan la completa comprensión de los temas.
			</div>
		    </div>
		  </div>		  
		</div>		  

		</div>
	</div>
</div>


<div class="video">
	<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
</div>
<div class="more-reviews">
	 <ul id="flexiselDemo2">
	<li><img src="images/m3.jpg?v=002" alt=""/></li>
	<li><img src="images/m4.jpg?v=002" alt=""/></li>
	<li><img src="images/m6.jpg?v=002" alt=""/></li>
	<li><img src="images/m7.jpg?v=002" alt=""/></li>
	<li><img src="images/m8.jpg?v=002" alt=""/></li>
	<li><img src="images/m9.jpg?v=002" alt=""/></li>
	<li><img src="images/m10.jpg?v=002" alt=""/></li>
</ul>
	<script type="text/javascript">
$(window).load(function() {
	
  $("#flexiselDemo2").flexisel({
		visibleItems: 4,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: false,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 2
			}, 
			landscape: { 
				changePoint:640,
				visibleItems: 3
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});
	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>
<div class="news row">
	<div class="col-md-6">
		<h2 style="color: #073692; padding-bottom: 30px">INSCRIPCIÓN EN EL DIPLOMADO</h2>
		{!! Form::open(['route'=>'login.store']) !!}
			<div class="form-group">
				{!! Form::label('nombre','Nombre') !!}
				{!! Form::text('text',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('apellidos','Apellidos') !!}
				{!! Form::text('text',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('cedula','Cédula de ciudadanía') !!}
				{!! Form::number('text',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('correo','Correo') !!}
				{!! Form::email('email',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('contrasena','Contraseña') !!}
				{!! Form::password('password',['class'=>'form-control']) !!}
			</div>
			{!! Form::submit('Ingresar',['class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>
@stop