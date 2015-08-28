<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>EAPIIS</title>
	<?=$helper->favicon()?>

	<?=$helper->css('ed-grid')?>
	<?=$helper->css('generales')?>

</head>
<body>
	
	<main id="contenedor">
		
		<?=$helper->menu_header()?>
		
		<aside id="formulario">
			<form action="<?=$helper->url('curso','gestion')?>" method="POST">
			<div class="grupo">
				<div class="caja">
					<h3 class="formulario__titulo centrar-contenido">Registro Curso</h3>
				</div>
				<div class="caja">
					<label class="item__formulario" for="codigo">Codigo: </label>					
				</div>
				<div class="caja">
					<input type="text" id="codigo" name="codigo" maxlength="6" minlength="6" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="nombre">Nombre: </label>
				</div>
				<div class="caja">
					<input type="text" id="nombre" name="nombre" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="creditos">Creditos: </label>
				</div>
				<div class="caja">
					<input type="number" min="2" max="5" id="creditos" name="creditos" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="dni">Dni Profesor: </label>
				</div>
				<div class="caja">
					<input type="text" id="dni" name="dni" maxlength="8" minlength="8" class="item__formulario" required>	
				</div>
				<div class="caja">
					<input class="enviar" type="submit" value="Insertar">
				</div>
			</div>
			</form>
		</aside>

		<section id="alumnos">
			<article class="alumno caption">
				<div class="grupo">
					<div class="caja centrar-contenido tablet-25">Codigo</div>
					<div class="caja centrar-contenido tablet-25">Nombre</div>
					<div class="caja centrar-contenido tablet-25">Creditos</div>
					<div class="caja centrar-contenido tablet-25">Profesor</div>
				</div>
			</article>
			<?php foreach($alumnos as $curso) :?>
				<article class="alumno">
					<div class="grupo">
						<div class="caja tablet-25"><?=$curso->getCodigo()?></div>
						<div class="caja tablet-25"><?=$curso->getNombre()?></div>
						<div class="caja tablet-25"><?=$curso->getCreditos()?></div>
						<div class="caja tablet-25"><?=$curso->getIdProfesor()?></div>
					</div>
				</article>
			<?php endforeach; ?>
		</section>

		<?=$helper->pie();?>
	</main>	

	<?=$helper->js('jquery')?>
</body>
</html>