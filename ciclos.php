<?php include_once 'includes/templates/header2.php'; ?>

<main id="main">


    <!--***Aqui poer los cursos disponibles***-->
    <!--agregado parte de cuross -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title ">

                <div class="section-title">
                    <h2>Ciclos</h2>
                    <p>Incorporate en uno de nuestros ciclos</p>
                </div>
            </div>



            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php
                try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT eventos.*, categoria_evento.cat_evento";
                    $sql .= " FROM eventos ";
                    $sql .= " JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= "ORDER BY `evento_id` DESC LIMIT 6;";

                    $resultado = $conn->query($sql);
                } catch (Exception $e) {
                    $error = $e->getMessage();
                }
                ?>

                <?php while ($evento = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    $cid = $evento['evento_id'];
                ?>


                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch agrandar_div">
                        <div class="course-item precios_tabla">
                            <img src="assets/img/repaso.jpg" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="<?php echo "matricula2.php?cid=$cid"; ?>">
                                        <h4>Inscribirse</h4>
                                    </a>
                                    <p class="price">$.<?php echo $evento['costo'] ?></p>
                                </div>

                                <h3>
                                    <a href="<?php echo "matricula2.php?cid=$cid"; ?>"> <?php echo $evento['nombre_evento'] ?> </a>

                                </h3>
                                <h5><?php echo $evento['cat_evento'] ?></h5>
                                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati expedita cupiditate eligendi tenetur voluptatem dolores, inventore tempore distinctio </p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                        <span>Inicio: <?php echo $evento['fecha_evento'] ?></span>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <i class="bx bx-user"></i>&nbsp;50
                                        &nbsp;&nbsp;
                                        <i class="bx bx-heart"></i>&nbsp;75
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->

                <?php } ?>



            </div>

        </div>
    </section><!-- End Popular Courses Section -->

    <!-- ******** Poner lo mas Buscado *********** -->

    <!-- ======= Our Team Section ======= -->

    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados` LIMIT 4";
        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    ?>

    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Ingresantes</h2>
                <p>Nuestros cachimbos</p>
            </div>

            <div class="row">

                <?php while ($invitados = $resultado->fetch_assoc()) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic invitado" style="height: 300px;">
                                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                                    <img src="img/invitados/<?php echo $invitados['url_imagen'] ?>" alt="Imagen invitado">
                                </a>
                            </div>
                            <div class="member-info">
                                <h4><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></h4>
                                <span><?php echo $invitados['carrera_invitado'] ?></span>
                                <div class="social">
                                    <i class="bx bx-heart" style="color: white;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display:none;">

                        <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                            <h2><?php echo $invitados['nombre_invitado'] ?></h2>
                            <img src="img/invitados/<?php echo $invitados['url_imagen'] ?>" alt="" style="width:250px">
                            <p><?php echo $invitados['descripcion'] ?></p>
                        </div>

                    </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <?php
    $conn->close();
    ?>

<?php include_once 'contacto.php'; ?> 



</main><!-- End #main -->

<?php include_once 'includes/templates/footer2.php'; ?>