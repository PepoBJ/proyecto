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
		
		<aside id="slogan">
			<div class="grupo">
				<div class="caja">
					<p></p>
					<p class="frase">Pensar en disfrutar y creer que lo que estudio es muy interesante</p>
				</div>
			</div>
		</aside>

		<section id="contenido">
			<div class="grupo">
				<div class="caja">
					<h2 class="contenido__titulo centrar-contenido">Descripción del desarrollo</h2>
				</div>
				<div class="caja">
					<p class="contenido__descripcion">El presente proyecto, es un sistema de gestión de Gestión de una Escuela Academica, para el curso de Desarrollo de Sistemas Orientados a Internet dictado por el docente Ronal Renteria.</p>
				</div>
				<div class="caja">
					<p class="contenido__descripcion item">Procesos que realiza el sistema:</p>
				</div>
			

				<div class="caja tablet-20">
					<p class="item__proceso icon-triangulo-derecha espacio">Gestión de Alumnos</p>
				</div>
				<div class="caja tablet-20">
					<p class="item__proceso icon-triangulo-derecha espacio">Gestión de Cursos</p>
				</div>
				<div class="caja tablet-20">
					<p class="item__proceso icon-triangulo-derecha espacio">Gestión de Profesores</p>
				</div>
				<div class="caja tablet-20">
					<p class="item__proceso icon-triangulo-derecha espacio">Gestión de Matriculas</p>
				</div>
				<div class="caja tablet-20">
					<p class="item__proceso icon-triangulo-derecha espacio">Gestión de Horarios</p>
				</div>
				<div class="caja">
					<p class="contenido__descripcion item">Recursos utilizados en el proyecto:</p>
				</div>
				<div class="caja">
					<p class="item__recurso icon-triangulo-derecha espacio">Framework MVC desarrollado por <a href="https://github.com/PepoBJ/framework-pepo">[Robert BJ Huamán Cáceres]</a></p>
				</div>
				<div class="caja">
					<p class="item__recurso icon-triangulo-derecha espacio">Framework de maquetado CSS <a href="http://escueladigital.pe/ed-grid">[ED-GRID]</a></p>
				</div>
				<div class="caja">
					<p class="item__recurso icon-triangulo-derecha espacio">Libreria JavaScript <a href="https://jquery.com/">[JQuery]</a></p>
				</div>
			</div>
		</section>

		<?=$helper->pie();?>
	</main>	

	<?=$helper->js('jquery')?>
</body>
</html>