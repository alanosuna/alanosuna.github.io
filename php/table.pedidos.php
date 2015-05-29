<?php

/*
 * Editor server script for DB table pedidos
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'pedidos', 'id' )
	->fields(
		Field::inst( 'nombre' ),
		Field::inst( 'domicilio' ),
		Field::inst( 'correo' ),
		Field::inst( 'telefono' ),
		Field::inst( 'sexo' ),
		Field::inst( 'deporte' ),
		Field::inst( 'prenda1' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'prenda2' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'prenda3' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'cantidad1' ),
		Field::inst( 'cantidad2' ),
		Field::inst( 'cantidad3' ),
		Field::inst( 'comentarios' )
	)
	->process( $_POST )
	->json();
