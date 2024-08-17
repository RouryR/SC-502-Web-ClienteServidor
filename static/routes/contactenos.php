<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mensaje = isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : '';
$numero = isset($_GET['numero']) ? htmlspecialchars($_GET['numero']) : '';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contactenos</title>
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
                                        Contáctenos </p>

                                    <div class="text-center mb-2">
                                        <img src="/SC-502-Web-ClienteServidor/static/img/logo.svg" style="width: 240px;"
                                            alt="logo" />
                                    </div>
                                    <br>
                                    <form class="zoom-form" method="post"
                                        action="/SC-502-Web-ClienteServidor/static/managment/tiquetesContactenos/create_tiquetesContactenos.php">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <input type="text" class="form-control" name="nombre"
                                                    placeholder="Nombre" aria-label="*Nombre" required>
                                            </div>
                                            <div class="col mb-3">
                                                <input type="text" class="form-control" name="apellidos"
                                                    placeholder="Apellidos" aria-label="*Apellidos" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="correo"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="*Correo" aria-label="Correo" required>
                                            <div id="emailHelp" class="form-text">No compartiremos su correo con
                                                terceros.</div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="telefono"
                                                id="formGroupExampleInput" placeholder="*Teléfono" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="empresa"
                                                id="formGroupExampleInput" placeholder="Nombre de la empresa" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="asunto">*Asunto</label>
                                            <select id="asunto" name="asunto" class="form-select" required>
                                                <option value="" disabled selected>Seleccione un asunto</option>
                                                <option value="Pregunta">Pregunta</option>
                                                <option value="Soporte">Soporte</option>
                                                <option value="Sugerencia">Sugerencia</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">*Detalles</span>
                                            <textarea name="detalles" class="form-control" aria-label="With textarea"
                                                required></textarea>
                                        </div>
                                        <div class="text-center">
                                            <div class="pt-1 mb-3">
                                                <p class="small mb-0">Campos con * son obligatorios.</p>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit"
                                                    class="btn btn-success custom-margin-left">Enviar</button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mensaje = '<?php echo $mensaje; ?>';
            var numero = '<?php echo $numero; ?>';
            if (mensaje) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: `Tiquete creado con éxito, su número de tiquete es el #${numero}. Pronto recibirá un correo con la respuesta.`,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
</body>

</html>