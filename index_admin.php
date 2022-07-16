<?php include 'header.php';?>
<?php $conexion = new conexion();# es un objeto de tipo conexion,
      $proyectos= $conexion->consultar("SELECT * FROM `proyectos`"); ?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Administrador de Portfolio Personal</h1>
        <p class="lead">Proyectos Cargados en base de datos</p>
        <hr class="my-2">
        <p class="lead" style="font-size:1.5rem;">Para poder acceder al portfolio, al final este mismo link cambie /index_admin.php por: /index.php <br><br>
         En abm podra: Dar de alta un nuevo proyecto, dar de baja uno existente y modificarlo. <br>
        Cualquier duda <a href="mailto:gis.gonzalez@bue.edu.ar">Click para enviar email</a></p>
       
    </div>
</div>
<div class ="container" style="background-color:#CDB3A6;">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php #leemos proyectos 1 por 1
        foreach($proyectos as $proyecto){ ?>
            <div class="col">
                <div class="card border border-3 shadow">
                    <img class="card-img-top" style="object-fit:cover;" src="assets/img/<?php echo $proyecto['imagen'];?>" alt="" width="300">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                        <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                        <p class="card-text text-dark"><?php echo $proyecto['url'];?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>
