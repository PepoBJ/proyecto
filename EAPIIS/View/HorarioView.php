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
			<form action="<?=$helper->url('horario','gestion')?>" method="POST">
			<div class="grupo">
				<div class="caja">
					<h3 class="formulario__titulo centrar-contenido">Registro Horario</h3>
				</div>
				
				
				<div class="caja">
					<label class="item__formulario" for="aula">Aula: </label>
				</div>
				<div class="caja">
					<input type="number" min="2" id="aula" name="aula" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="curso">Codigo Curso: </label>					
				</div>
				<div class="caja">
					<input type="text" id="curso" name="curso" maxlength="6" minlength="6" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="dni">Dni Profesor: </label>
				</div>
				<div class="caja">
					<input type="text" id="dni" name="dni" maxlength="8" minlength="8" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="dia">Día: </label>					
				</div>
				<div class="caja">
					<select name="dia" class="item__formulario" id="dia">
						<option value="1">Lunes</option>
						<option value="1">Martes</option>
						<option value="1">Miercoles</option>
						<option value="1">Jueves</option>
						<option value="1">Viernes</option>
					</select>
				</div>
				<div class="caja">
					<label class="item__formulario" for="hora">Hora: </label>
				</div>
				<div class="caja">
					<input type="number" id="hora" name="hora" min="7" max="20" class="item__formulario" required>	
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
					<div class="caja centrar-contenido tablet-20">Dia</div>
					<div class="caja centrar-contenido tablet-20">Hora</div>
					<div class="caja centrar-contenido tablet-20">Aula</div>
					<div class="caja centrar-contenido tablet-20">Cod Curso</div>
					<div class="caja centrar-contenido tablet-20">Dni Profesor</div>
				</div>
			</article>
			<?php foreach($horarios as $horario) :?>
				<article class="alumno">
					<div class="grupo">
						<div class="caja tablet-20"><?=$horario->getDia()?></div>
						<div class="caja tablet-20"><?=$horario->getHora()?></div>
						<div class="caja tablet-20"><?=$horario->getAula()?></div>
						<div class="caja tablet-20"><?=$horario->getCodCurso()?></div>
						<div class="caja tablet-20"><?=$horario->getIdProfesor()?></div>
					</div>
				</article>
			<?php endforeach; ?>
		</section>

		<?=$helper->pie();?>
	</main>	

	<?=$helper->js('jquery')?>
</body>
</html>