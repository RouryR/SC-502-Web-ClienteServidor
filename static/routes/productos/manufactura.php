<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manufactura</title>
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
                                        Manufactura
                                    </p>
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image" src="/SC-502-Web-ClienteServidor/static/img/productos/manufactura1.jpg"
                                    alt="ERP" /></p>
                        </a>
                    </div>
                    <p class="custom-card-text">Con el módulo de Manufactura podrá:
                    <li>Crear órdenes de manufactura.</li>
                        <li>Costeo de órdenes de manufactura al costo estándar vs costo real.</li>
                        <li>Manejo de ensambles o producción en serie.</li>
                        <li>Cálculo automático del requerimiento de materiales.</li>
                        <li>Generar órdenes de Compra y órdenes de Manufactura de forma automática de acuerdo a un requerimiento previamente autorizado.</li>
                        <li>Consulta de histórico de órdenes de manufactura.</li>
                        <li>Transacciones inventario por proceso (departamento) y equipo.</li>
                        <li>Requisición de materias primas e insumos.</li>
                        <li>Entradas de producciones.</li>
                        <li>Administrar Lotes & Trazabilidad Ascendente y descendente.</li>
                        <li>Consulta del histórico de transacciones de inventario por proceso.</li>
                        <li>Medición de la eficiencia de producción.</li>
                        <li>Auditoría individual de transacciones.</li>
                        <li>Utilización de múltiples bodegas.</li>
                        <li>Restricción de bodegas por usuario.</li>
                        <li>Control y administración de lotes de producto.</li>
                        <li>Contabilización de las diferentes transacciones de producción.</li>
                        <li>Registrar en el histórico transaccional en línea.</li>
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
                                    <h3>Más de Manufactura</h3>
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