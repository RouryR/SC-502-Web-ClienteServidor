<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Inventarios</title>
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
                                        Inventarios
                                    </p>
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image" src="/SC-502-Web-ClienteServidor/static/img/productos/inventarios1.jpg"
                                    alt="ERP" /></p>
                        </a>
                    </div>
                    <p class="custom-card-text">Este módulo permite a los empresarios:
                    <ul>
                        <li>Una administración del inventario por bodegas con seguridad personalizada, localizaciones, lotes, conteos físicos programados y cuadre.</li>
                        <li>Uso de Hand Held’s para el registro de conteos con el uso de los códigos de barras.</li>
                        <li>Permite una administración de las diferentes transacciones de inventario donde las mismas son configurables (requisiciones/ajustes/producciones), control de lotes vencidos, etc.</li>
                        <li>Permite el manejo de estructuras de combos y recetas de artículos acorde a la necesidad del cliente.</li>
                        <li>Registro de compras de mercadería local.</li>
                        <li>Permite la consulta a reportes de existencias, transacciones, kardex, análisis de inventarios en exceso y otros reportes.</li>
                        <li>Aceptación compras régimen tradicional y régimen simplificado.</li>
                    </ul></p>
                    <p class="custom-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum."</p>
                                </div>
                            </div>
                        </div>
                        <div class="vtimeline-point">
                            <div class="vtimeline-block">
                                <div class="vtimeline-content">
                                    <h3>Más de Inventarios</h3>
                        <p class="custom-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum."</p>
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