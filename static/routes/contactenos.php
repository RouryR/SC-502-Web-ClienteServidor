<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contactenos</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>

    <main>
        <div class="content-container">
            <section>
                <p style=" border-radius: 10px; color: white; font-weight: bold; font-size: 25px; background-color:
            #2069AD; text-align: center; border-bottom: 1px solid black">
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i>Contáctenos
                </p>

                <div class="text-center mb-2">
                    <img src="/SC-502-Web-ClienteServidor/static/img/logo.svg" style="width: 240px;" alt="logo" />
                </div>

                <div id="form-card" class="card text-center">
                    <div class="card-body">
                        <form class="zoom-form ">
                            <div class="row">
                                <div class="col mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="*Nombre" required>
                                </div>
                                <div class="col mb-3">
                                    <input type="text" class="form-control" placeholder="Apellidos"
                                        aria-label="*Apellidos" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="*Correo" aria-label="Correo" required>
                                <div id="emailHelp" class="form-text">No compartiremos su correo con terceros.</div>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="*Teléfono" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Nombre de la empresa" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">*Detalles</span>
                                <textarea class="form-control" aria-label="With textarea" required></textarea>
                            </div>

                            <div class="orm-check mb-3">
                                <p class="small mb-0">Compos con * son obligatorios.</p>
                            </div>

                            <a href="#" class="btn btn-primary custom-background">Regresar</a>
                            <button type="submit" class="btn btn-primary custom-margin-left">Enviar</button>
                        </form>
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