<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>TITULO</title>
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
                                        TITULO
                                    </p>
                                    <div class="zoom-effect">
                                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php"
                                            id="popupLink">
                                            <p>
                                                <!--------------------------------------- IMAGEN --------------------------------------->
                                                <img class="custom-image"
                                                    src="/SC-502-Web-ClienteServidor/static/img/productos/GRAFICO-1.jpg"
                                                    alt="Acerca de Nosotros" />
                                            </p>
                                        </a>
                                    </div>
                                    <p>
                                       *********************************************texto 1*********************************************
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vtimeline-point">
                            <div class="vtimeline-block">
                                <div class="vtimeline-content">
                                    <h3>Más de TITULO</h3>
                                    <p>
                                        *********************************************texto 1*********************************************
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