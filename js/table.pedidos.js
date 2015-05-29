
/*
 * Editor client script for DB table pedidos
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.pedidos.php",
		"table": "#pedidos",
		"fields": [
			{
				"label": "Nombre",
				"name": "nombre"
			},
			{
				"label": "Domicilio",
				"name": "domicilio"
			},
			{
				"label": "Correo",
				"name": "correo"
			},
			{
				"label": "Telefono",
				"name": "telefono"
			},
			{
				"label": "Sexo",
				"name": "sexo",
				"type": "radio",
				"options": [
					"Masculino",
					"Femenino"
				]
			},
			{
				"label": "Deporte",
				"name": "deporte",
				"type": "select",
				"options": [
					"Beisbol",
					" Futbol",
					" Voleybol",
					" Softbol",
					" Otros"
				]
			},
			{
				"label": "Prenda1",
				"name": "prenda1",
				"type": "select",
				"options": [
					"Gorra",
					"Vicera",
					"Nada"
				]
			},
			{
				"label": "Prenda2",
				"name": "prenda2",
				"type": "select",
				"options": [
					"Casaca",
					"Playera",
					"Polo",
					"Camisa",
					"Nada"
				]
			},
			{
				"label": "Prenda3",
				"name": "prenda3",
				"type": "select",
				"options": [
					"Pantalon",
					"Short",
					"Nada"
				]
			},
			{
				"label": "Cantidad1",
				"name": "cantidad1"
			},
			{
				"label": "Cantidad2",
				"name": "cantidad2"
			},
			{
				"label": "Cantidad3",
				"name": "cantidad3"
			},
			{
				"label": "Detalles",
				"name": "comentarios"
			}
		]
	} );

	$('#pedidos').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.pedidos.php",
		"columns": [
			{
				"data": "nombre"
			},
			{
				"data": "domicilio"
			},
			{
				"data": "correo"
			},
			{
				"data": "telefono"
			},
			{
				"data": "sexo"
			},
			{
				"data": "deporte"
			},
			{
				"data": "prenda1"
			},
			{
				"data": "prenda2"
			},
			{
				"data": "prenda3"
			},
			{
				"data": "cantidad1"
			},
			{
				"data": "cantidad2"
			},
			{
				"data": "cantidad3"
			},
			{
				"data": "comentarios"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

