// $(document).ready(function(){
// 	Cargar();
// });

// function Cargar(){
// 	var tablaDatos = $("#datos");
// 	var route = "http://www.myriamc102.com/liders";

// 	$("#datos").empty();
// 	$.get(route, function(res) {
// 		$(res).each(function(key,value){
// 			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.apellido+"</td><td>"+value.cedula+"</td><td>"+value.telefono+"</td><td>"+value.email+"</td><td>"+value.puesto_id+"</td><td>"+value.coordinador_id+"</td></tr>");
// 		});
// 	});
// }

// <button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle= 'modal' data-target='#myModal'﻿>Editar</button> <button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td>