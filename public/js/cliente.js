$('#registro').click(function(){
  var nombre = $('#nombre_r').val();
  var apellido = $('#apellido_r').val();
  var telefono = $('#telefono_r').val();
  var profesion_id = $('#profesion_r').val();
  var email = $('#email_r').val();
  var route = 'http://localhost/blogs_web/public/cliente';
  var token = $('#token').val();

	$.ajax({
	  url: route,
	  headers: {'X-CSRF-TOKEN': token},
	  type: 'POST',
	  dataType: 'json',
	  data: {
	  	nombre:nombre,
		apellido:apellido,
		telefono:telefono,
		estado:'Pendiente',
		profesion_id:profesion_id,
		email:email,
		user_id:'1'
	  },

	  success:function(){
	  	$("#msjerror").fadeOut();
	  	$('#msjsuccess').fadeIn();
	  },
	  error:function(msj) {
	  	var errormessages = "";
        $.each(msj.responseJSON, function(i, field){
            errormessages+="<li>"+field+"</li>";
        });

        $('#msjr').html(
            "<ul>"+errormessages+"</ul>"
        );

	  	$("#msjerror").fadeOut();
	  	$('#msjsuccess').fadeOut();
	  	$("#msjerror").fadeIn();
	  }

	});
});

// $('#ingresar').click(function(){
//   var email = $('#email').val();
//   var password = $('#password').val();
//   var route = 'http://localhost/blogs_web/public/ingreso';
//   var token = $('#token').val();

// 	$.ajax({
// 	  url: route,
// 	  headers: {'X-CSRF-TOKEN': token},
// 	  type: 'GET',
// 	  dataType: 'json',
// 	  data: {
// 		email:email,
// 		password:password
// 	  },

// 	  success:function(){
// 	  	$("#msj-error").fadeOut();
// 	  	$('#msj-success').fadeIn();
// 	  },
// 	  error:function(msj) {
// 	  	var errormessages = "";
//         $.each(msj.responseJSON, function(i, field){
//             errormessages+="<li>"+field+"</li>";
//         });

//         $('#msj').html(
//             "<ul>"+errormessages+"</ul>"
//         );

// 	  	$("#msj-error").fadeOut();
// 	  	$('#msj-success').fadeOut();
// 	  	$("#msj-error").fadeIn();
// 	  }

// 	});
// });