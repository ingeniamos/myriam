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
		profesion_id:'1',
		email:email,
		user_id:'1'
	  },

	  success:function(){
	  	$("#msj-error").fadeOut();
	  	$('#msj-success').fadeIn();
	  },
	  error:function(msj) {
	  	var errormessages = "";
        $.each(msj.responseJSON, function(i, field){
            errormessages+="<li>"+field+"</li>";
        });

        $('#msj').html(
            "<ul>"+errormessages+"</ul>"
        );

	  	$("#msj-error").fadeOut();
	  	$('#msj-success').fadeOut();
	  	$("#msj-error").fadeIn();
	  }

	});
});