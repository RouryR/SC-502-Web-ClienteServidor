<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Acerca de Nosotros</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
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
                                    <div class="zoom-effect">
                                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php"
                                            id="popupLink">
                                            <p><img class="custom-image"
                                                    src="/SC-502-Web-ClienteServidor/static/img/productos/GRAFICO-1.jpg"
                                                    alt="Acerca de Nosotros" />
                                            </p>
                                        </a>
                                    </div>
                                    <h3>ERP</h3>
                                    <p>
                                        Para toda empresa es importante poseer una herramienta
                                        multi-usuarios, multi-compañía y multi-moneda que sea ágil, sencilla de
                                        utilizar, que
                                        permita a sus trabajadores el cumplimiento de funciones de forma ordenada,
                                        controlando todo
                                        proceso administrativo, operativo y financiero.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vtimeline-point">
                            <div class="vtimeline-block">
                                <div class="vtimeline-content">
                                    <h3>Más de ERP</h3>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit
                                        anim id est laborum."
                                    </p>
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