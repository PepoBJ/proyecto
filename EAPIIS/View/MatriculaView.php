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
			<form action="<?=$helper->url('matricula','gestion')?>" method="POST">
			<div class="grupo">
				<div class="caja">
					<h3 class="formulario__titulo centrar-contenido">Registro Matricula</h3>
				</div>
				<div class="caja">
					<label class="item__formulario" for="curso">Codigo Curso: </label>					
				</div>
				<div class="caja">
					<input type="text" id="curso" name="curso" maxlength="6" minlength="6" class="item__formulario" required>	
				</div>
				<div class="caja">
					<label class="item__formulario" for="alumno">Codigo Alumno: </label>					
				</div>
				<div class="caja">
					<input type="text" id="alumno" name="alumno" maxlength="6" minlength="6" class="item__formulario" required>	
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
					<div class="caja centrar-contenido tablet-50">Cod Curso</div>
					<div class="caja centrar-contenido tablet-50">Cod Alumno</div>
				</div>
			</article>
			<?php foreach($alumnos as $alumno) :?>
				<article class="alumno">
					<div class="grupo">
						<div class="caja tablet-50"><?=$alumno->getCodCurso()?></div>
						<div class="caja tablet-50"><?=$alumno->getCodAlumno()?></div>
					</div>
				</article>
			<?php endforeach; ?>
		</section>

		<?=$helper->pie();?>
	</main>	

	<?=$helper->js('jquery')?>
</body>
</html>