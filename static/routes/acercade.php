<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Acerca de Nosotros</title>
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
                                        Acerca de Nosotros
                                    </p>
                                    <div class="zoom-effect">
                                        <a href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php"
                                            id="popupLink">
                                            <p><img class="custom-image"
                                                    src="/SC-502-Web-ClienteServidor/static/img/acerca.jpg"
                                                    alt="Acerca de Nosotros" />
                                            </p>
                                        </a>
                                    </div>
                                    <ul class="post-meta list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user-circle-o"></i> Excalibur-Tech
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-o"></i> 1999
                                        </li>
                                    </ul>
                                    <p>
                                        Desde 1999 Excalibur-Tech nace siendo una empresa costarricense, actualmente
                                        somos líderes en el
                                        desarrollo de software para la gestión empresarial de pequeñas, medianas y
                                        grandes compañías.

                                        Somos un aliado estratégico para todos nuestros clientes, gracias al compromiso,
                                        servicios y
                                        personal altamente calificado para satisfacer cada una de las necesidades de los
                                        clientes.

                                        Nuestro ERP (Planificación de Recursos empresariales), es un software
                                        especializado a fin a los
                                        diferentes perfiles comerciales, distribuidores, importadores, exportadores,
                                        manufactureros y
                                        más.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vtimeline-point">
                            <div class="vtimeline-block">
                                <div class="vtimeline-content">
                                    <h3>Más de nosotros</h3>
                                    <p>
                                        Somos un grupo dinámico con gran experiencia en el mercado del desarrollo de
                                        software empresarial aplicables al ámbito del ERP en áreas como Ruteo y
                                        Distribución, Financiero Contable, Importaciones, Manufactura y más.
                                    </p><br>
                                    <p>
                                        Con EXCALIBUR-TECH, usted como empresario, desde cualquier rincón del mundo
                                        podrá ver el tiempo real, el comportamiento de su compañía, a tan solo un click
                                        de su mano.
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