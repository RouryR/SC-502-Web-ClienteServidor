<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Punto de Venta</title>
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3b9cff258c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/SC-502-Web-ClienteServidor/static/css/style.css?n=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="/SC-502-Web-ClienteServidor/static/css/routes_style.css?n=<?php echo(rand()); ?>">
    <script src="./SC-502-Web-ClienteServidor/static/js/script.js"></script>
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
                    <i class="fa-solid fa-briefcase fa-beat fa-sm" style="color: #ffffff;"></i> Punto de Venta
                </p>
                <div id="about-card" class="card text-center">
                    <p class="custom-card-text">Con un software multi-tienda usted podrá:
                    <ul>
                        <li>Realizar una facturación rápida de forma independiente.</li>
                        <li>Tendrá acceso a la pantalla interactiva de punto de venta donde podrá colocar diferentes opciones como logo de marca, fotografías de los productos y videos.</li>
                        <li>Automatizar el control del inventario, reduciendo posibles pérdidas.</li>
                        <li>Generar reportes de ventas en minutos.</li>
                        <li>Podrá obtener estadísticas de venta por producto, categoría, hora, tienda y más de 20 diferentes tipos de reportes que le ayudarán en la toma de decisiones.</li>
                        <li>Integración con los demás módulos.</li>
                        <li>Alertas de clientes morosos, cambios de precio y muchas cosas más.</li>
                    </ul></p>
                    <p class="custom-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum."</p>
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image" src="/SC-502-Web-ClienteServidor/static/img/productos/puntodeventa.jpg"
                                    alt="puntoventa" /></p>
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
    <style>
        ul {
            list-style-position: inside; 
            padding-left: 0; 
        }
        li {
            margin: 10px 0; 
        }
    </style>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
</body>

</html>