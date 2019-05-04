<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?= base_url();?>public/css/main.css?<?= date('Y-m-d H:i:s');?>" >
	<title>Torneo Futbol</title>    
</head>
<body>

	<?php $this->load->view('layout/navbar'); ?>	

	<main role="main" class="container">

		<?php
			if ( isset($mensaje ) ) {				
		?>
		<div class="alert <?=$alert?> alert-dismissible fade show" role="alert">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><?=$title?></strong> <?=$mensaje?>.
		</div>
		<?php
			}
		?>

		<h1>Registra tu equipo</h1>
		<form  method="POST" action="<?=base_url()?>index.php/welcome/insertdata">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Nombre" required name="nombreEquipo" id="nombreEquipo">
				<small id="nombreHelp" class="form-text text-muted">Con este nombre será identificado en el torneo.</small>
			</div>			
			<button type="submit" class="btn btn-primary">Registrar</button>
			</form>
    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>