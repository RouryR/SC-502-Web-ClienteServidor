<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3b9cff258c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/SC-502-Web-ClienteServidor/static/css/style.css?n=<?php echo (rand()); ?>">
    <script src="/SC-502-Web-ClienteServidor/static/js/script.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>

    <main>

        <div class="content-container">
            <section>
                <p
                    style="color: white; font-weight: bold; font-size: 25px; background-color: #2069AD; margin-top: 0; text-align: center; border-bottom: 1px solid black">
                    <i class="fa-solid fa-phone fa-sm" style="color: #ffffff;"></i> Acerca de Nosotros
                </p>
                <div id="about-card" class="card text-center">
                    <p> Desde 1999 Excalibur-Tech nace siendo una empresa costarricense, actualmente somos líderes en el
                        desarrollo de software para la gestión empresarial de pequeñas, medianas y grandes compañías.

                        Somos un aliado estratégico para todos nuestros clientes, gracias al compromiso, servicios y
                        personal altamente calificado para satisfacer cada una de las necesidades de los clientes.

                        Nuestro ERP (Planificación de Recursos empresariales), es un software especializado a fin a los
                        diferentes perfiles comerciales, distribuidores, importadores, exportadores, manufactureros y
                        más.</p>
                    
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image"
                                    src="/SC-502-Web-ClienteServidor/static/img/acerca.jpg"
                                    alt="Acerca de Nosotros" />
                            </p>
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="custom-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum."</p>
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