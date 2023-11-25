<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include_once (ROOT_PATH . 'header.php') ?>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img width="80%" height="80%" src="../../assets/images/perfil-de-usuario.webp"
                     class="img-fluid" alt="imagen usuario">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form id="formLogin" action="" method="post" autocomplete="off">
                        <!-- usuario input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="usuario">Usuario</label>
                            <input type="usuario" name="usuario" id="usuario" class="form-control form-control-lg"
                             placeholder="ingrese usuario válido" autocomplete="off" spellcheck="false"/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="clave">Contraseña</label>
                            <input type="password" name="clave" id="clave" class="form-control form-control-lg" placeholder="Enter password" autocomplete="off" spellcheck="false"/>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                             style="padding-left: 2.5rem; padding-right: 2.5rem;">Acceder</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start-justify-content-between py-4 px-4 px-xl-5 bg-dark">
            <!-- Copyrigth -->
            <div class="text-white mb-3 mb-md-0">
                Copyright 2023. ALL rights reserved.
            </div>
            <!-- Copyrigth -->

            <!-- Rigth -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Rigth -->
        </div>
    </section>
</body>
    <?php include_once (ROOT_PATH . 'footer.php')?>
</html>