<?php include 'conexion.php'; ?>

<?php
#mostrar datos 
 #vamos a consultar para llenar la tabla 
 $conexion = new conexion();
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
 #comprobamos que la info este en forma de arreglo
 #print_r($resultado);

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Portfolio" />
        <meta name="author" content="Ana Alvarez" />
        <title>Mi-Portfolio.AnaAlvarez</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Ana Paula Alvarez</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2 rotate-in-2-cw" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Acerca de mí</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experiencia</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Educación</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Conocimientos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Mis trabajos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content typewriter">
                    <h1 class="mb-0 ">
                        Ana Paula
                        <span class="text-blue">Alvarez</span>
                    </h1>
                    <div class="subheading mb-5">
                        Luján · Buenos Aires - Argentina · (11) 5045-3200 ·
                        <a href="mailto:anapoolalvarez@gmail.com">anapoolalvarez@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Hola! En este último tiempo me estoy volviendo apasionada en la programación y diseño Web, también puedo ofrecerte asesoramiento sobre dominios y hosting.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/ana-paula-alvarez-a56380100" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/Anita0509"  target="_blank"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://wa.me/5491150453200"  target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiencia</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                Soporte Técnico-Analista-Programación Web</h3>
                            <div class="subheading mb-3">Squad SRL</div>
                            <p>Soporte postventa y soporte interno. Análisis de aplicaciones - Sitios Web en Wordpress. </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">Abril 2018 - Presente</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Analista de sistemas</h3>
                            <div class="subheading mb-3">Softur SA</div>
                            <p>Soporte Nivel 2 de sistema Traffic - Modificación de BD y código de aplicaciones.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">Septiembre 2015 - Marzo 2018</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Control de gestión</h3>
                            <div class="subheading mb-3">Argensun SA</div>
                            <p>Análisis de negocios, armado de estadísticas e indicadores de Gerencia - Manejo de presupuestos - Manejo Sistema NODUM.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">Febrero 2011 - Septiembre 2015</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Soporte Técnico</h3>
                            <div class="subheading mb-3">MICROS-FIDELIO WORLDWIDE</div>
                            <p>Agente de Soporte Nivel 2. Soporte Técnico sistema Opera/Fidelio. Seguimiento de incidentes. Implementacón del software y capacitación de usuarios.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">Septiembre 2009 - Febrero 2011</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Educación</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">ISFD N°189</h3>
                            <div class="subheading mb-3">Técnica Superior en Análisis de Sistemas</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">2011 - 2016</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">ISEACA</h3>
                            <div class="subheading mb-5">Técnica Superior en Administración Hotelera</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-green">2004 - 2006</span></div>
                    </div>
                    <div class="resume-section-content">
                        <h2 class="mb-5">Certificados</h2>
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li"><i class="fas fa-award"></i></span>
                                Curso Full Stack PHP - CODO A CODO - 2022
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-award"></i></span>
                                Workflow continua de desarrollo a producción - Mikro Ways - 2021
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-award"></i></span>
                                Curso de Wordpress - Pulsión Digital - 2020
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Conocimientos</h2>
                    <div class="subheading mb-3">Lenguajes de programación & Herramientas</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-elementor"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cpanel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cloudflare"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Diseño Reponsive
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Mis trabajos</h2>
                    <p>Comparto los proyectos que realicé, tengo experiencia tanto en webs institucionales como tiendas con plataformas de pago online.</p>
                    <p class="mb-4">Sigo capacitándome para poder resolver de una manera más eficiente los proyectos futuros. </p>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
 
                        <?php #leemos proyectos 1 por 1
                        foreach($proyectos as $proyecto){ ?>
                    
                            <div class="col">
                                <div class="card border border-3 shadow mb-4">
                                    <a href="<?php echo $proyecto['url'];?>" target="_blank"><img class="card-img-top" width="100" src="assets/img/<?php echo $proyecto['imagen'];?>" alt=""></a>
                                    
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-dark"><?php echo $proyecto['nombre'];?></h5>
                                        <p class="card-text text-dark"><?php echo $proyecto['descripcion'];?></p>
                                                                                
                                    </div>
                                
                                </div>
                            
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <h2 class="mb-5">Contacto</h2>
                    <div class="contact-box">
                        <div class="form">
    
                            <form action="enviar.php" method="post">
    
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="name" placeholder="Nombre" aria-label="Nombre" required>
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="name2" placeholder="Apellido" aria-label="Apellido" required>
                                    </div>
                                </div>
                                <input type="email" name="email" id="email" class="form-control mt-4" placeholder="Email" required>
                                <textarea name="message" id="message" class="form-control my-4" placeholder="Ingrese su consulta" required></textarea>
                                
                                <input type="submit" value="Enviar" id='WSP' class="btn-form mb-3">
                            
                            </form>
                        </div>
                    </div>  
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/envio.js"></script>
    </body>
</html>
