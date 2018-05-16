@extends('layouts.principal')

@section('content')

@include('alerts.errors')
@include('alerts.request')

<div class="header">
	<img class="img-responsive" src="images/m1.jpg?v=003" class="img-responsive">
</div>

<div class="review-slider">
	 <ul id="flexiselDemo1">
	<li><img src="images/voto1.jpg?v=001" alt=""/></li>
	<li><img src="images/voto2.jpg?v=001" alt=""/></li>
	<li><img src="images/voto3.jpg?v=001" alt=""/></li>
	<li><img src="images/voto4.jpg?v=001" alt=""/></li>
	<li><img src="images/voto5.jpg?v=001" alt=""/></li>
	<li><img src="images/voto6.jpg?v=001" alt=""/></li>
	<li><img src="images/voto7.jpg?v=001" alt=""/></li>
	<li><img src="images/voto8.jpg?v=001" alt=""/></li>
	<li><img src="images/voto9.jpg?v=001" alt=""/></li>
	<li><img src="images/voto10.jpg?v=001" alt=""/></li>
	<li><img src="images/voto11.jpg?v=001" alt=""/></li>
	<li><img src="images/voto12.jpg?v=001" alt=""/></li>
	<li><img src="images/voto13.jpg?v=001" alt=""/></li>
	<li><img src="images/voto14.jpg?v=001" alt=""/></li>
	<li><img src="images/voto15.jpg?v=001" alt=""/></li>
	<li><img src="images/voto16.jpg?v=001" alt=""/></li>
	<li><img src="images/voto17.jpg?v=001" alt=""/></li>
	<li><img src="images/voto18.jpg?v=001" alt=""/></li>
	<li><img src="images/voto19.jpg?v=001" alt=""/></li>
</ul>
	<script type="text/javascript">
$(window).load(function() {
	
  $("#flexiselDemo1").flexisel({
		visibleItems: 6,
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
				visibleItems: 4
			}
		}
	});
	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>

<div class="col-md-12 titulo">
	<h2>Hola amigas y amigos!</h2>
	<h2>Los invito a conocer mis</h2>
	<h1 style="color: #073692"><b>COMPROMISOS</b></h1>
</div>

<div class="news">
	<div class="col-md-6 news-left-grid">
		<h1 style="color: #073692"><b>PROGRAMA</b></h1>
		<div class="news-grid">
			<p>
				Con base en 4 ejes programáticos fundamentales voy a formular, presentar y gestionar proyectos de Ley ante el Congreso de la República que mejoren la productividad, la educación, la situación de la mujer y la protección del medio ambiente, en el fin supremo de contribuir a un verdadero desarrollo regional.
			</p><p>
				También en función de 4 ejes transversales voy a apoyar, defender y patrocinar Proyectos de Ley que contribuyan a mejorar la oferta de salud, la implementación de los acuerdos de paz dentro del marco de la ley, el cuidado del patrimonio de los colombianos y el manejo proactivo de la inmigración de venezolanos a nuestro país. 
			</p><p>
				Me comprometo específicamente:
			</p>
		</div>

		<div class="news-grid">
			<h5>Conciencia de región</h5>
			<p>A promover y liderar "conciencia de región" con los gobernantes y los ciudadanos para sacar adelante proyectos de ley que nos beneficien, independientemente de la ideología política.</p>
		</div>
		<div class="news-grid">
			<h5>Equipo comprometido</h5>
			<p>A formar un equipo de profesionales idóneos para desde ya activar, dar a conocer, y sacarle el máximo provecho a las leyes ya aprobadas que facilitan nuestro impulso al desarrollo.</p>
		</div>
		<div class="news-grid">
			<h5>Control político</h5>
			<p>A ejercer control político en las leyes que puedan perjudicar a la comunidad, y a apoyar las que conlleven a favorecerla.</p>
		</div>
		<!-- <a class="more" href="#">Ver todo el programa</a> -->
	</div>

	<div class="col-md-6 news-right-grid">
		<h1 style="color: #073692"><b>MI PERFIL</b></h1>
		<div class="news-grid">
			<p>
				Soy Myriam Elsy Camargo de Gamboa, casada con el ingeniero civil Álvaro Fernando Gamboa, madre de dos hijas profesionales.
			</p>
		</div>

		<div class="news-grid">
			<h5>Una mujer preparada</h5>
			<p>
				- Especialista en finanzas de la EAFIT <br>
				- Contadora púbica de la UFPS
			</p>
		</div>
		<div class="news-grid">
			<h5>Con vocación docente</h5>
			<p>
				- Docente universitaria por más de 25 años<br>
				- Decana de la facultad de ciencias empresariales de la UFPS<br>
				- Líder en la creación y puesta en  marcha de la carrera negocios internacionales de la UFPS
			</p>
		</div>
		<div class="news-grid">
			<h5>Experiencia administrativa</h5>
			<p>
				- Directora del ICETEX. Gestionó becas de manutención con las alcaldías del departamento para jóvenes de estrato 1 y 2.<br>
				- Asesora financiera y comercial de empresas importantes de la región
			</p>
		</div>
		<div class="news-grid">
			<h5>y sentido social</h5>
			<p>
				- Líder social para el empoderamiento de la mujer en Norte de Santander.
			</p>
		</div>
		
	</div>

	<div class="clearfix"></div>
	
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