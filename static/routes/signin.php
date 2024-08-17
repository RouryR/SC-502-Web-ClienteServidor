<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/validation.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Inicio Sesión</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
    <link rel="stylesheet"
        href="/SC-502-Web-ClienteServidor/static/css/general_routes_style.css?n=<?php echo (rand()); ?>">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>
    <main>
        <div class="content-container">
            <section>
                <div class="container mb80">
                    <div class="page-timeline">
                        <div class="vtimeline-point">
                            <div class="vtimeline-block">
                                <div class="vtimeline-content">
                                    <p
                                        style="color: white; font-size: 30px; background-color: #2069AD; border-radius: 10px; margin-top: 0; text-align: center; border-bottom: 1px solid black;">
                                        Inicio de Sesión </p>
                                    <br>
                                    <form id="login-form" class="btn-zoom" method="post">
                                        <div class="mb-3">
                                            <input type="text" name="correo" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="*Correo" aria-label="Correo Electronico" required />
                                            <div id="emailHelp" class="form-text">No compartiremos su correo con
                                                terceros.</div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword1" placeholder="*Contraseña"
                                                aria-label="Contraseña" required />
                                        </div>
                                        <?php if (isset($error)): ?>
                                            <div class="alert alert-danger"><?php echo $error; ?></div>
                                        <?php endif; ?>
                                        <div class="text-center">
                                            <div class="pt-1 mb-3">
                                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                            </div>
                                            <div class="mb-3">
                                                <a class="text-muted d-block"
                                                    href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php">¿Olvidaste
                                                    tu contraseña?</a>
                                            </div>
                                            <div class="pb-4">
                                                <a class="text-muted d-block"
                                                    href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php">¿No
                                                    tienes una cuenta?</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <aside class="text-center">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/aside.php'; ?>
            </aside>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>

</body>

</html>