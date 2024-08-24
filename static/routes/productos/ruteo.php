<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ruteo y Distribución</title>
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
                                        Ruteo y Distribución
                                    </p>
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image" src="/SC-502-Web-ClienteServidor/static/img/productos/ruteo.jpg"
                                    alt="ERP" /></p>
                        </a>
                    </div>
                    <p class="custom-card-text">Con esta herramienta usted podrá mediante el uso de herramientas como celulares, netbooks, portátiles o tablets en la plataforma android, realizar procesos de facturación Directa y Pre Venta, administrando rutas de venta, reparto y cobro según sea su necesidad empresarial. Tendrá acceso a la información tanto en su empresa como en la ruta en tiempo real gracias a la sincronización en línea vía Internet. Tendrá acceso a:
                        <li>Facturación directa con control de inventarios en cada camión.</li>
                                <li>Control de cuentas por cobrar con documentos físicos impresos.</li>
                                <li>Clasificación de clientes por rutas, sectores, días y secuencia de visita.</li>
                                <li>Consulta de información detallada de los clientes.</li>
                                <li>Aplicación de descuentos según la necesidad.</li>
                                <li>Elaboración de notas de crédito por devolución de mercadería.</li>
                                <li>Transmisión vía Internet.</li>
                                <li>Registro del inventario de productos del cliente eliminando el uso de tarjetas manuales.</li>
                                <li>Facturación de combos.</li>
                                <li>Actualización de información vía Internet.</li>
                                <li>Impresión de documentos.</li>
                                <li>Análisis de la efectividad de rutas y tiempos de visitas de los diferentes agentes.</li>
                                <li>Geolocalización mediante Google Maps o Waze.</li>
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
                                    <h3>Más de Ruteo y Distribución</h3>
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