		<main role="main" class="container">
			<h1>Tabla de equipos</h1>
			<table class="table table-hover table-condensed table-bordered table-striped">
				<tr>
					<th># Posición</th>
			 		<th>Nombre del equipo</th>
			 		<th>Puntuación</th>
			  	</tr>
			<?php
			if($equipos != false) {
				$cont = 1;
				foreach ($equipos->result() as $equipo) {
					echo('<tr>');
						echo('<td>'.$cont++.'</td>');
						echo('<td>'.$equipo->nombre.'</td>');
						echo('<td>'.$equipo->puntosObtenidos.'</td>');
					echo('</tr>');
				}
			} else
				alert('Información: ','no se encontraron equipos registrados.', 'alert-warning');
			?>
			</table>
			<h1>Tabla de goleadores</h1>
			<table class="table table-hover table-condensed table-bordered table-striped">
				<tr>
					<th># Posición</th>
			 		<th>Nombre</th>
			 		<th>Equipo</th>
			 		<th>Goles</th>
			 		<th>Tarjetas amarillas</th>
			 		<th>Tarjetas rojas</th>
			  	</tr>
			<?php
			$cont = 1;
			if($jugadores != false) {
				foreach($jugadores->result() as $jugador) {
					echo('<tr>');
						echo('<td>'.$cont++.'</td>');
						echo('<td>'.$jugador->nombre.'</td>');
						echo('<td>'.$jugador->enombre.'</td>');
						echo('<td>'.$jugador->goles.'</td>');
						echo('<td>'.$jugador->tarjetasAmarillas.'</td>');
						echo('<td>'.$jugador->tarjetasRojas.'</td>');
						//echo('<td>'.$jugador->puntosObtenidos.'</td>');
					echo('</tr>');
				}
			} else
				alert('Información: ','no se encontró ningún jugador registrado.', 'alert-warning');
			?>
			</table>
		</main>
	</body>
</html>
