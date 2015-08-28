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
			<form action="<?=$helper->url('alumno','gestion')?>" method="POST">
			<div class="grupo">
				<div class="caja">
					<h3 class="formulario__titulo centrar-contenido">Registro Alumno</h3>
				</div>
				<div class="caja">
					<label for="codigo">Codigo: </label>					
				</div>
				<div class="caja">
					<input type="text" id="codigo" name="codigo" maxlength="6" minlength="6" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label for="nombre">Nombre: </label>
				</div>
				<div class="caja">
					<input type="text" id="nombre" name="nombre" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label for="apellidos">Apellidos: </label>
				</div>
				<div class="caja">
					<input type="text" id="apellidos" name="apellidos" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label for="dni">DNI: </label>
				</div>
				<div class="caja">
					<input type="text" id="dni" name="dni" maxlength="8" minlength="8" class="item__formulario" required>	
				</div>
				<div class="caja">
					<input type="submit" value="Insertar">
				</div>
			</div>
			</form>
		</aside>

		<section id="alumnos">
			<?php foreach($alumnos as $alumno) :?>
				<article class="alumno">
					<div class="grupo">
						<div class="caja tablet-25"><?=$alumno->getCodigo()?></div>
						<div class="caja tablet-25"><?=$alumno->getNombre()?></div>
						<div class="caja tablet-25"><?=$alumno->getApellidos()?></div>
						<div class="caja tablet-25"><?=$alumno->getDni()?></div>
					</div>
				</article>
			<?php endforeach; ?>
		</section>

		<?=$helper->pie();?>
	</main>	

	<?=$helper->js('jquery')?>
</body>
</html>