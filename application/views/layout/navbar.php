<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">      
	<img class="navbar-brand" src="<?= base_url();?>public/image/mx_logo.png" alt="" width="50px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>index.php/">Inicio <span class="sr-only">(current)</span></a>
            </li>  
        	<li class="nav-item">
        		<a class="nav-link" href="<?php echo base_url()?>index.php/AgregarAmonestacion">Agregar amonestación <span class="sr-only"></span></a>
        	</li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/TablaPosiciones">Tabla de posiciones<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Goles">Agregar goles<span class="sr-only"></span></a>
            </li>
        </ul>        
    </div>
</nav>
