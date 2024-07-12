<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manufactura</title>
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
                    <i class="fa-solid fa-briefcase fa-beat fa-sm" style="color: #ffffff;"></i> Manufactura
                </p>
                <div id="about-card" class="card text-center">
                    <p class="custom-card-text">Con el módulo de Manufactura podrá:
                    <ul>
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
                    <div class="zoom-effect">
                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php" id="popupLink">
                            <p><img class="custom-image" src="/SC-502-Web-ClienteServidor/static/img/productos/manufactura1.jpg"
                                    alt="ERP" /></p>
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