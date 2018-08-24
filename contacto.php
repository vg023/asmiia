<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>

<section class="main container">
	<form action="	">
		<div class="form form-group">	
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" class="form-control">
		</div>
		<div class="form form-group">
			<label for="correo">Correo</label>
			<input type="email" id="correo" class="form-control">
		</div>
		<div class="form form-group">
			<label for="razons">Razon Social</label>
			<input type="text"  id="razons" class="form-control">
		</div>
		<div class="form form-group">
			<label for="rfc">RFC</label>
			<input type="text" id="rfc" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</section>