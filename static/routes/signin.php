<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>EPR</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
    <script src="/SC-502-Web-ClienteServidor/static/js/routesJS/script.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>
    <main>
        <div class="content-container">
            <section>
                <p
                    style="border-radius: 10px; color: white; font-weight: bold; font-size: 25px; background-color: #2069AD; text-align: center; border-bottom: 1px solid black">
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i> Inicio de Sesión
                </p>
                <div id="form-card" class="card text-center">
                    <div class="card-body">
                        <div class="card-body p-md-1 mx-md-4">
                            <div class="text-center">
                                <h4 class="mb-5 pb-1">¡La solución a un clic!</h4>
                            </div>
                            <form id="login-form" class="btn-zoom" method="post">
                                <div class="mb-3">
                                    <input type="text" name="correo" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="*Correo"
                                        aria-label="Correo Electronico" required />
                                    <div id="emailHelp" class="form-text">No compartiremos su correo con terceros.</div>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1" placeholder="*Contraseña" aria-label="Contraseña"
                                        required />
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                    <br>
                                    <a class="text-muted" href="">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                    <a href="" class="btn btn-success btn-zoom">Crear Cuenta</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="text-center">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/aside.php'; ?>
            </aside>
        </div>
    </main>

    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Bienvenido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¡Bienvenido, <span id="user-name"></span>!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>

</body>

</html>