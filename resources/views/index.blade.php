@extends('layouts.principal')

@section('content')

@include('alerts.errors')
@include('alerts.request')

<div class="row" style="display: inline;">
	<div class="float-left">
		<a href="#">
			<img src="images/logoconstruprecios.png?v=003" width="350" height="auto" class="d-inline-block align-top" alt="">
		</a>
	</div>
	<div class="float-right" style="padding: 25px 10px;">
		<span style="font-size: 18px"></span>
		<a href="tel: 301-7570140" target="_blank"><i class="fa fa-phone-square fa-3x" aria-hidden="true"></i></a> 
		<a href="https://www.facebook.com/construprecios" target="_blank">&nbsp;<i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a> 
	  	<a href="https://www.facebook.com/construprecios" target="_blank">&nbsp;<i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
	  	<a href="https://www.facebook.com/construprecios" target="_blank">&nbsp;<i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
	</div>
</div>
<div class="row" style="display: block;">
	<img class="img-responsive" src="images/m1.jpg?v=003">
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background-color: white;">
		  <h2 class="display-4">Experiencia académica</h2>
		   <hr class="my-4">
		  <table class="table table-striped">
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
				    {{-- <h5 class="card-title">Hasta el 31 de mayo de 2018</h5> --}}
				    <p class="card-text">Hasta el 31 de mayo de 2018</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-success mb-3" style="width: 100%;">
				  <div class="card-header">PREVENTA 25%</div>
				  <div class="card-body">
				    {{-- <h5 class="card-title">Hasta el 30 de junio de 2018</h5> --}}
				    <p class="card-text">Hasta el 30 de junio de 2018</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-secondary mb-3" style="width: 100%;">
				  <div class="card-header">PREVENTA 20%</div>
				  <div class="card-body">
				    {{-- <h5 class="card-title">Hasta el 15 de julio de 2018</h5> --}}
				    <p class="card-text">Hasta el 15 de julio de 2018</p>
				  </div>
				</div>
			</div>
		  </div>
		  <hr class="my-4">
		  <h2 class="display-4 text-center">Mayor información al teléfono <span><a href="tel:3017570140">301-7570140</a></span></h2>
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
		    <div class="card-header" id="headingFour">
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

<div class="row">
	<div class="col">
		<div class="jumbotron">
		  <h2 class="display-4">Contenidos del programa</h2>
		  <hr class="my-4">
		<p>
			El diplomado está conformado por 11 módulos académicos que se desarrollarán a lo largo de los 12 fines de semana de duración de este.
		</p>
		<div class="accordion" id="accordion1">
		  <div class="card">
		    <div class="card-header" id="heading1">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#modulo1" aria-expanded="true" aria-controls="modulo1">
		          Módulo 1. Herramientas para la excelencia con técnicas de programación neurolinguística- (4 horas)
		        </button>
		      </h5>
		    </div>

		    <div id="modulo1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo.</b> Habilitar a todos los participantes en el uso de estrategias efectivas para potenciar su marca personal, crear relaciones más sanas, positivas y constructivas, manejar asertivamente sus emociones, potenciar la capacidad de persuasión, inspirar el trabajo en equipo y lograr mayor capacidad de comunicación asertiva.
				<ul>
					<li>Orígenes de la programación neurolingüística.</li>
					<li>Características y virtudes del cerebro y la mente inconsciente.</li>
					<li>El poder de las anclas para potenciar la excelencia.</li>
					<li>Claves científicas para construir y materializar metas.</li>
					<li>Las claves para la resolución asertiva de conflictos.</li>
					<li>Cómo liberarse del estrés (vivir en segunda persona).</li>
					<li>Aprender a conocer las inteligencias de percepción.</li>
					<li>El papel de las emociones en el equilibrio y la salud.</li>
					<li>Eliminando mapas mentales tóxicos (cerrar géstales).</li>
				</ul>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading2">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo2" aria-expanded="false" aria-controls="modulo2">
		          Módulo 2. Emprendimiento de liderazgo de proyectos- (6 horas)
		        </button>
		      </h5>
		    </div>
		    <div id="modulo2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
		      <div class="card-body">
		      	<b>Objetivo.</b> Integrar lazos emocionales, aprender a identificar lo que debes mirar y escuchar, desarrollar la conciencia, empezar a actuar, cuando recurrir al empoderamiento, entender a ejercer la responsabilidad y la sincronía.<br><br>
				Al identificar tu perfil de emprendedor y los valores que quieres desarrollar tendrás las habilidades para que emerja tu potencial de grandeza con todo su poderío para impulsar las cualidades como líder como creatividad, inteligencia, poder de convocatoria y amor. Este será el motor de cambio que requiere tu vida, fuerza de espíritu y acción incontenible para que seas un triunfador.
		      	<ul>
		      		<li>Conciencia de liderazgo.</li>
					<li>Liderar desde el alma.</li>
					<li>10 principios del liderazgo.</li>
					<li>Manejo del estrés.</li>
					<li>Bienestar laboral en proyectos de construcción.</li>
					<li>Creación de equipos altamente productivos de obra altamente productivos.</li>
				</ul>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading3">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo3" aria-expanded="false" aria-controls="modulo3">
		          Módulo 3. Planeación integral de la obra - (4 horas)
		        </button>
		      </h5>
		    </div>
		    <div id="modulo3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Examinar los procesos que se presentan en desarrollo de un proyecto de construcción y el proceso de planeación de la obra, esencia del proyecto.<br><br>
				<div style="margin-left: 30px">
					<b>3.1 LOS PROYECTOS</b><br>
					3.1.1 Propósito de los proyectos<br>
					3.1.2 Características de los proyectos<br>
					3.2 Administración Del Proyecto<br>
					<b>3.2 LOS PROYECTOS DE CONSTRUCCIÓN</b><br>
					3.3.1 Alcance de los proyectos de construcción<br>
					3.3.2 Los participantes<br>
					3.3.3 Los procesos<br>
					<b>3.3 EL PROCESO CONSTRUCTIVO</b><br>
					3.3.1 El proceso estratégico<br>
					3.3.2 Los procesos operacionales técnicos<br>
					3.3.3 Los procesos operacionales administrativos<br>
					<b>3.4 PROCESO INTEGRADO DE PLANEACIÓN DE OBRA</b><br>
					3.4.1 Información de partida<br>
					3.4.1.1 Estudios y diseños<br>
					3.4.1.2 Plan estratégico<br>
					3.4.1.3 Información de proyectos anteriores<br>
					3.4.2 Estructura de división del trabajo<br>
					3.4.2.1 Criterios de división<br>
					3.4.2.2 Ejemplo de aplicación<br>
					3.4.3 Programación de obra<br>
					3.4.3.1 Técnicas usuales de programación de obras<br>
					3.4.3.2 Relaciones entre las actividades<br>
					3.4.3.3 Matriz de Relaciones<br>
					3.4.3.4 Elaboración del diagrama<br>
					3.4.4 Estimación de los recursos<br>
					3.4.5 Duración de las actividades<br>
					3.4.6 Organización de campo<br>
					3.4.7 Costos y presupuestos de obra<br>
					3.4.8 Ajustes y programa final<br>
				</div>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading4">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo4" aria-expanded="false" aria-controls="modulo4">
		          Módulo 4. Estimación de recursos - 16 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Identificar, analizar y calcular los recursos requeridos para la ejecución de la obra.<br><br>
				<div style="margin-left: 30px">
					<b>4.1 CANTIDADES DE PRODUCCIÓN</b><br>
					4.1.1 Unidades de medida<br>
					4.1.2 Cálculo de cantidades<br>
					<b>4.2 RENDIMIENTOS</b><br>
					4.2.1 Rendimientos de los materiales<br>
					4.2.1.1 Unidades de medida de los materiales<br>
					4.2.1.2 Factores que afectan el consumo de los materiales<br>
					4.2.1.3 Tablas de rendimientos<br>
					4.2.2 Rendimientos de la mano de obra<br>
					4.2.2.1	Unidades de medida de la mano de obra<br>
					4.2.2.2 Determinación de los rendimientos en obra<br>
					4.2.2.3 Factores que afectan el rendimiento de la mano de obra<br>
					4.2.2.4 Tablas de rendimientos de mano de obra<br>
					4.2.3 Rendimientos de los equipos<br>
					4.2.3.1 Unidades de consumos de los equipos<br>
					4.2.3.2 Rendimiento de la maquinaria y factores que la afectan<br>
					4.2.3.3 Rendimiento del equipo auxiliar<br>
					<b>4.3 ESTIMACIÓN DE LOS RECURSOS</b><br>
					4.3.1 Consumo de materiales en la actividad<br>
					4.3.2 Consumo de mano de obra<br>
					4.3.3 Requerimientos de equipos<br>
					<b>4.4 ESTIMACIÓN DE LA DURACIÓN DE LA ACTIVIDAD</b><br>
				</div>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading5">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo5" aria-expanded="false" aria-controls="modulo5">
		          Módulo 5. Programación de obra - 20 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Examinar y comparar los diferentes diagramas utilizados en la programación de obras.<br><br>
				<div style="margin-left: 30px">
					<b>5.1 EL DIAGRAMA DE BARRAS</b><br>
					5.1.1 Diagrama de barras tradicional<br>
					5.2.2 El diagrama de barras y marcas<br>
					<b>5.2 EL DIAGRAMA DE FLECHAS</b><br>
					5.2.1 Construcción del diagrama<br>
					5.2.2 Cálculo del diagrama<br>
					5.2.2.1 Tiempos de ocurrencia próximos<br>
					5.2.2.2 Tiempos de ocurrencia tardíos<br>
					5.2.2.3 Tiempos flotantes y ruta crítica<br> 
					<b>5.3 LA RED DE PRECEDENCIAS</b><br>
					5.3.1 Origen y desarrollo del diagrama<br>
					5.3.2 Ventajas de la red de precedencias<br>
					5.3.2.1 Simplicidad<br>
					5.3.2.2 Facilidad de actualización<br>
					5.3.2.3 El sistema de numeración<br>
					5.3.2.4 Representación de eventos<br>
					5.3.2.5 Representación en escala de tiempos<br>
					5.3.2.6 Adaptabilidad al empleo de computadoras<br>
					5.3.3.1 La red simple<br>
					5.3.3.2 Inclusión de eventos en la red<br>
					5.3.4 Cálculo de la Red<br>
					5.3.4.1 Iniciación y terminación próxima<br>
					5.3.4.2 Iniciación y terminación tardía<br>
					5.3.4.3 Intervalos, ruta crítica y tiempos flotantes<br>
					5.3.5 Esperas y traslapos<br>
					5.3.5.1 Inclusión de esperas en la red<br>
					5.3.5.2 Inclusión de traslapos en la red<br>
					<b>5.4 DIAGRAMA DE PRECEDENCIAS MODIFICADO</b><br>
					5.4.1 Relación fin a principio<br>
					5.4.2 Relaciones principio a principio<br>
					5.4.3 Relación fin a fin<br>
					5.4.4 Relaciones principio a fin<br>
					5.4.5 Relaciones compuestas<br>
					<b>5.5 UTILIZACIÓN DE SUB-REDES</b><br>
					5.5.1 Ventajas del empleo de sub-redes<br>
					5.5.2 Tipos de sub-redes<br>
					<b>5.6 EL DIAGRAMA VECTORIAL</b><br>
				</div>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading6">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo6" aria-expanded="false" aria-controls="modulo6">
		          Módulo 6. Costos de obra - 20 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Analizar los diferentes conceptos que intervienen en el costo de una obra y su incidencia en el presupuesto.<br><br>
				<div style="margin-left: 30px">
					<b>6.1 COSTOS DIRECTOS</b><br>
					6.1.1 Costo de los materiales<br>
					6.1.1.1 Valor de adquisición<br>
					6.1.1.2 El impuesto a las ventas<br>
					6.1.1.3 El Transporte<br>
					6.1.1.4 Tabla de costos de materiales en obra<br>
					6.1.2 Costo de la mano de obra<br>
					6.1.2.1 Salario<br>
					6.1.2.2 Prestaciones sociales<br>
					6.1.2.3 Aportes<br>
					6.1.2.4 Otros conceptos<br>
					6.1.2.5 Costo de la mano de obra en términos de salario básico<br>
					6.1.3 Costo de los equipos<br>
					6.1.3.1 Costos de propiedad<br>
					6.1.3.3	 Tarifas de alquiler de equipos<br>
					<b>6.2 COSTOS INDIRECTOS DE OBRA</b><br>
					6.2.1 Costos indirectos de campo<br> 
					6.2.1.1 Salarios y prestaciones sociales del personal directivo y administrativo<br>
					6.2.1.2 Instalaciones y facilidades<br>
					6.2.1.3 Servicios<br>
					6.2.1.4 Otros costos indirectos de campo<br>
					6.2.2 Costos especiales de campo<br>
					6.2.3 Costos de obra diferentes a los de campo<br>
					6.2.4 Costos empresariales<br>
					<b>6.3 ESTIMACIÓN DE LOS COSTOS</b><br>
					6.3.1 Tipo de estimaciones<br>
					6.3.2 Estimaciones conceptuales y preliminares<br>
					6.3.3 Estimaciones detalladas<br>
					6.3.3.1 Estimación detallada de los costos directos<br>
					6.3.3.2 Estimación de los costos indirectos<br>
					<b>6.4 PRESUPUESTO DE OBRA Y PROGRAMA DE INVERSIÓN</b><br>
					6.4.1 Elaboración del presupuesto de obra<br>
					6.4.2 Holguras presupuestales<br>
					6.4.3 El programa de inversión<br>
				</div>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading7">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo7" aria-expanded="false" aria-controls="modulo7">
		          Módulo 7. Integración tiempo-costo-recursos - 10 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Examinar los métodos para ajustar la duración de la obra a un tiempo determinado o para buscar la duración óptima.<br><br>
				<div style="margin-left: 30px">
					<b>7.1 RELACIONES COSTO-TIEMPO</b><br>
					<b>7.2 COMPRESIÓN DE LA RED</b><br>
					<b>7.3 AJUSTE DE LA RED A UN PLAZO PREFIJADO</b><br>
					<b>7.4 DURACIÓN ÓPTIMA DE UN PROYECTO</b><br>
					<b>7.5 NIVELACIÓN DE RECURSOS</b><br>
					7.5.1.1 Factor de mejoramiento<br>
					7.5.1.2 Flotante hacia atrás<br>
					7.5.3 Coeficiente de mejoramiento<br>
					7.5.4 Nivelación de varios recursos<br>
				</div>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading8">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo8" aria-expanded="false" aria-controls="modulo8">
		          Módulo 8. Control de obra – 10 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo8" class="collapse" aria-labelledby="heading8" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> xxxxxx.
					<ul>
						<li>Fundamentos prácticos de contabilidad</li>
						<li>Particularidades de la contabilidad en empresas constructoras e inmobiliarias</li>
						<li>Los estados financieros y la estructura del balance</li>
						<li>Análisis de balances y de la situación económico financiera de la empresa</li>
						<li>Análisis de proyectos de inversión</li>
						<li>Project finance -Financiación estructurada- modelos financieros concesionales</li>
						<li>Valoración de empresas</li>
					</ul>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading9">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo9" aria-expanded="false" aria-controls="modulo9">
		          Módulo 9. SG – SST - 4 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo9" class="collapse" aria-labelledby="heading9" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Conocer el Sistema de Gestión de la Seguridad y salud en el trabajo, los peligros y la evaluación de los riesgos de la construcción y las implicaciones económicas en presupuesto de obra de implementación en el SG-SST.
					<ul>
						<li>Entendimiento del Sistema Colombiano de Seguridad y Salud en el Trabajo (SST)</li>
						<li>Conocimiento de las herramientas básicas para gestionar un Sistema de Gestión en Seguridad y Salud en el Trabajo</li>
						<li>Compartir estrategias preventivas y propuestas de gestión de riesgos laborales</li>
						<li>Identificación de peligros y evaluación de riesgos de la construcción</li>
						<li>Indicadores de desempeño</li>
						<li>Plan estratégico</li>
						<li>Acciones de mejora</li>
						<li>Implicaciones del SSST en el presupuesto</li>
					</ul>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading10">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo10" aria-expanded="false" aria-controls="modulo10">
		          Módulo 10. Herramientas – 16 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo10" class="collapse" aria-labelledby="heading10" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> Conocer en detalle el manejo de la revista Construprecios “El informe de los precios de Construcción” y Software para la elaboración de presupuestos de obra, con precios actualizados con una base de datos de más de 1000 APU detallados con sus insumos, y un curso de introducción sobre conocimientos básicos de software afines a la ingeniería y arquitectura como AutoCAD, SketchUp, CorelDRAW.
					<ul>
						<li>Revista CONSTRUPRECIOS “El informe de los precios de Construprecios” </li>
						<li>Software CONSTRUPRECIOS</li>
						<li>Sketchup</li>
						<li>Autocad 2D</li>
					</ul>
			  </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="heading11">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#modulo11" aria-expanded="false" aria-controls="modulo11">
		          Módulo 11. Contratación de obra pública y privada - 10 horas
		        </button>
		      </h5>
		    </div>

		    <div id="modulo11" class="collapse" aria-labelledby="heading11" data-parent="#accordion1">
		      <div class="card-body">
				<b>Objetivo general.</b> zzz.
					<ul>
						<li>Marco conceptual</li>
						<li>Elaboración de un perfil para un presupuesto de licitación</li>
					</ul>
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

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background: white;">
		  <h2 class="display-4">Formas depago</h2>
		  <hr class="my-4">

		  <div class="row">
			<div class="col-md-4 col-12">
				<div class="card text-white bg-primary mb-3" style="width: 100%;">
				  <div class="card-header">EFECTIVO O PAGO EN EFECTY</div>
				  <div class="card-body">
				    <h5 class="card-title">Pague en nuestras instalaciones</h5>
				    <p class="card-text">$</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-success mb-3" style="width: 100%;">
				  <div class="card-header">TARJETAS DÉBITO Y CRÉDITO</div>
				  <div class="card-body">
				    <h5 class="card-title">Múltiples franquicias</h5>
				    <p class="card-text">$</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="card text-white bg-secondary mb-3" style="width: 100%;">
				  <div class="card-header">CONSIGNACIÓN O TRANSFERENCIA</div>
				  <div class="card-body">
				    <h5 class="card-title">Cuenta de ahorros</h5>
				    <p class="card-text">$</p>
				  </div>
				</div>
			</div>
		  </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="jumbotron" style="background: lightskyblue;">
			<h2 class="display-4">Acceso a usuarios registrados</h2>
			<hr class="my-4">
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
</div>


@stop