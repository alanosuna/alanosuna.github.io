var inicio = function()
{
	//Declaramos las funciones.
	var validaUsuario = function()
	{
		var u = $("#txtUsuario").val();
		var c = $("#txtClave").val();
		var parametros = "opc=validaentrada"+"&usuario="+u+"&clave="+c+"&id="+Math.random();
		if(u!="" && c!="")
		{
			$.ajax({
				cache:false,
				url: "data/funciones.php",
				type: "POST",
				dataType: "json",
				data: parametros,
				success: function(response){
					if(response.respuesta == true) 
					{
						$("#panelEntrada").hide("slow");
						$("nav").show("slow");
						alert("Bienvenido: "+response.nombre);
					}
					else
						alert("Nombre de usuario y/o contraseña incorrectos");
				}
			});
		}
		else
			alert("Llene todos campos");
		// if(u=="pw" && c=="clave")
		// {
		// 	$("#panelEntrada").hide("slow");
		// 	$("nav").show("slow");
		// }
	}

	var traeUsuarios = function()
	{
		$.ajax({
		  url: 'http://api.randomuser.me/',
		  dataType: 'json',
		  success: function(data){
		  	$("img").attr("src",data.results[0].user.picture.medium);
		  	$("h1").html(data.results[0].user.name.first+' '+
		  		         data.results[0].user.name.last);
		  	$("h2").html(data.results[0].user.email);
		  }
		});
	
	}

	var teclaUsuario = function(tecla)
	{
		if(tecla.which == 13) //Enter
		{
			//Pongo el cursor en el cuadro 
			//de texto de la Clave.
			$("#txtClave").focus();
		}
	}

	var teclaClave = function(tecla)
	{
		if(tecla.which == 13)
		{
			validaUsuario();
		}
	}

	var DivUsuarios = function()
	{
		$("#altaUsuarios").show("slow");
		$("#btnGuardaUsuario").show();
		$("#btnEliminaUsuario").hide();
	}

	var GuardaUsuario = function()
	{
		var u = $("#txtNombreUsuario").val();
		var n = $("#txtNombre").val();
		var a = $("#txtApellido").val();
		var t = $("#txtTipoUsuario").val();
		var e = $("#txtEstatus").val();
		var c = $("#txtClaveUsuario").val();
		var r = $("#txtRepiteClave").val();
		if(c == r)
		{
			var parametros = "opc=guardausuario"+"&usuario="+u+"&nombre="+n+"&apellido="+a+"&tipousuario="+t+"&estatus="+e+"&clave="+c+"&repiteclave="+r+"&id="+Math.random();
			$.ajax({
				cache:false,
				type: "POST",
				dataType: "json",
				url:'data/funciones.php',
				data: parametros,
				success: function(response){
					if(response.respuesta == true)
					{
						alert("Usuario actualizado con éxito");
					}
					else
						alert("No se ha podido actualizar al usuario");
				},
				error: function(xhr,ajaxOption,x){
					alert("Sin conexión");
				}
			});
		}
		else
			alert("Las claves no coinciden");
	}

	var mostrarDatosUsuario = function()
	{
		var u = $("#txtNombreUsuario").val();
		var parametros = "opc=mostrarDatosUsuario"+
						 "&usuario="+u+
						 "&id="+Math.random();
		$.ajax({
			cache: false,
			type: "POST",
			dataType: "json",
			url: "data/funciones.php",
			data: parametros,
			success: function(response){
				if(response.respuesta == true)
				{
					$("#txtNombre").val(response.nombre);
					$("#txtApellido").val(response.apellido);
					$("#txtTipoUsuario").val(response.tipousuario);
					$("#txtEstatus").val(response.estatus);
				}
				else
					$("#txtNombre").focus();
			},
			error: function(xhr,ajaxOption,x){
				alert("Error de conexión");
			}
		});
	}

	var teclaNombreUsuario = function(tecla)
	{
		if(tecla.which == 13) //Enter
		{
			mostrarDatosUsuario();
		}		
	}

	var DivEliminar = function()
	{
		$("#altaUsuarios").show("slow");
		$("#btnGuardaUsuario").hide();
		$("#btnEliminaUsuario").show();
	}

	var EliminaUsuario = function()
	{
		var u = $("#txtNombreUsuario").val();
		var parametros = "opc=EliminaUsuario"+"&usuario="+u+"&id="+Math.random();
		$.ajax({
			cache: false,
			url: "data/funciones.php",
			type: "POST",
			dataType: "json",
			data:parametros,
			success: function(response){
				if(response.respuesta == true)
				{
					alert("El usuario ha sido dado de baja");
					$("#altaUsuarios > input").val("");
				}
			},
			error: function(xhr,ajaxOption,x){

			}
		});
	}

	var MuestraListaUsuarios = function()
	{
		var parametros = "opc=MuestraListaUsuarios"+
						 "&id="+Math.random();
		$.ajax({
			cache: false,
			url: "data/funciones.php",
			type: "POST",
			dataType: "json",
			data: parametros,
			success: function(response){
				if(response.respuesta == true)
				{
					$("#tablaListaUsuarios").html(response.renglones);
				}
				else
					alert("No hay usuarios que mostrar");
			},
			error: function(xhr,ajaxOption,x){
				alert("Error en la conexión");
			}
		});
	}

	var ListaUsuarios = function()
	{
		$("#divListaUsuarios").show("slow");
		MuestraListaUsuarios();
	}

	var EditarBoton = function()
	{
		var usuario = $(this).attr("id");
		alert(usuario);
	}

	var EliminarBoton = function()
	{
		alert("Borrando usuario");
	}

	//Configuramos los eventos.
	$("#btnEntrar").on("click",validaUsuario);
	$("#btnUsuarios").on("click",traeUsuarios);
	$("#txtUsuario").on("keypress",teclaUsuario);
	$("#txtClave").on("keypress",teclaClave);
	$("#btnDivUsuarios").on("click",DivUsuarios);
	$("#btnGuardaUsuario").on("click",GuardaUsuario);
	$("#txtNombreUsuario").on("keypress",teclaNombreUsuario);
	$("#btnDivEliminar").on("click",DivEliminar);
	$("#btnEliminaUsuario").on("click",EliminaUsuario);
	$("#btnListaUsuarios").on("click",ListaUsuarios);
	$("#tablaListaUsuarios").on("click",".btnEditar",EditarBoton);
	$("#tablaListaUsuarios").on("click",".btnEliminar",EliminarBoton);
	


}
$(document).on("ready",inicio);












