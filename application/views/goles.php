
	<main role="main" class="container">
		<h1>Agregar goles</h1>
		<?php
		if ($id > 0)
			alert('Éxito!', ' Se han ingresado y actualizado los nuevos goles. ', 'alert-success');
		else if ($id == -1)
			alert('Error: ', ' por favor, selecciona un jugador. ', 'alert-danger');
		else if ($id == -2)
			alert('Error: ', ' por favor, ingrese un número válido. ', 'alert-danger');
		?>
		<div class="col-md-offset-3 col-md-6">
			<form class="form-horizontal" method='get' role="form" action="<?=base_url()?>index.php/goles/updateGoles">
				<div class="form-group">
					<label>Jugador</label>
					<select class="form-control" name="idJugador" id="idJugador" required>
						<?php
							echo '<option disabled selected>Elige un jugador de la lista</option>';
							foreach($jugadores->result() as $jugador)
								echo '<option value="',$jugador->idJugador,'">',$jugador->nombre,'</option>';
						?>
					</select>
					<div class="form-group">
							<label>Goles</label>
							<input type="number" step="1" name="goles" id="goles" class="form-control" placeholder="Goles anotados en el partido">
					</div> 
				</div>
				<button type="submit"class="btn btn-primary">Agregar goles</button>
			</form>
		</div>
	</main>
	</body>
</html>