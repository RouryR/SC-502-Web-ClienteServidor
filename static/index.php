<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Excalibur-Tech</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
    <script src="/SC-502-Web-ClienteServidor/static/js/homeJS/script.js"></script>
</head>

<body>
    <header class="header">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="/SC-502-Web-ClienteServidor/static/img/carousel/slide1.jpg" class="d-block mx-auto"
                        alt="Soporte" style="width: 70%; max-height: 350px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 30px;">Soporte</h5>
                        <p style="font-size: 38px; color: #163A59;">Contamos con personal altamente capacitado</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="/SC-502-Web-ClienteServidor/static/img/carousel/slide2.jpg" class="d-block mx-auto"
                        alt="Soluciones" style="width: 70%; max-height: 350px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 30px;">Soluciones</h5>
                        <p style="font-size: 38px; color: #163A59;">Visitamos y brindamos soluciones inmediatas</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="/SC-502-Web-ClienteServidor/static/img/carousel/slide3.jpg" class="d-block mx-auto"
                        alt="Tutoría" style="width: 70%; max-height: 350px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 30px;">Tutoría</h5>
                        <p style="font-size: 38px; color: #163A59;">Capacitaciones en la comodidad de su empresa</p>
                    </div>
                </div>
            </div>
            <!-- Anterior -->
            <button class="carousel-control-prev rounded-button" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <i class="fa-solid fa-angles-left"></i>
                <span class="visually-hidden">Anterior</span>
            </button>
            <!-- Siguiente -->
            <button class="carousel-control-next rounded-button" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <i class="fa-solid fa-angles-right"></i>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </header>

    <div class="content-container">
        <section>
            <p
                style="color: white; font-size: 30px; background-color: #2069AD; border-radius: 10px; margin-top: 0; text-align: center; border-bottom: 1px solid black;">
                <i class="fa-solid fa-briefcase fa-beat fa-sm" style="color: #ffffff;"></i>
                Bienvenido
            </p>

            <div id="about-card" class="card text-center">
                <div class="card-header">
                    <h4>Sobre nosotros</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title2">Misión</h5>
                    <p class="card-text"><img width="60" height="60"
                            src="https://img.icons8.com/ultraviolet/60/goal.png" alt="goal" /> En <strong>Excalibur-Tech
                            S.A.</strong> somos una empresa líder en soluciones de tecnología de
                        la información, ofreciendo
                        un servicio de
                        calidad del más alto nivel competitivo que garantiza a nuestros clientes la administración
                        adecuada de
                        su información.</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title2">Visión</h5>
                    <p class="card-text"><img width="60" height="60"
                            src="https://img.icons8.com/office/60/define-location.png" alt="define-location" /> En
                        <strong>Excalibur-Tech S.A.</strong> buscamos ser un proveedor de servicios de tecnología de
                        la información de primer
                        nivel, que ayude
                        a los clientes en el cumplimiento de sus objetivos mediante una herramienta flexible, amigable,
                        poderosa
                        y acorde a las
                        necesidades de cada uno.
                    </p>
                </div>
            </div>
            <br>

            <div id="about-card" class="card text-center">
                <div class="card-header">
                    <h4>Nuestros Servicios</h4>
                </div>
                <div class="card-body">
                    <div class="grid-container">
                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/total-sales-1.png"
                                alt="total-sales-1" />
                            <span>Estadísticas de ventas</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48"
                                src="https://img.icons8.com/fluency/48/000000/receipt-dollar.png"
                                alt="receipt-dollar" />
                            <span>Facturación</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/request-money.png"
                                alt="request-money" />
                            <span>Cuentas por cobrar</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/id-not-verified.png"
                                alt="id-not-verified" />
                            <span>Liquidaciones de agentes</span>
                        </div>

                        <div class="grid-item">
                            <i class="fa-solid fa-person-arrow-down-to-line fa-3x"></i>
                            <span>Comisiones</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/accounting.png"
                                alt="accounting" />
                            <span>Contabilidad</span>
                        </div>

                        <div class="grid-item">
                            <i class="fa-solid fa-building-columns fa-3x"></i>
                            <span>Bancos y conciliaciones</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/withdrawal.png"
                                alt="withdrawal" />
                            <span>Cuentas por pagar</span>
                        </div>

                        <div class="grid-item">
                            <img width="48" height="48" src="https://img.icons8.com/color/48/move-by-trolley.png"
                                alt="move-by-trolley" />
                            <span>Activos fijos</span>
                        </div>

                        <div class="grid-item">
                            <i class="fa-solid fa-paste fa-3x"></i>
                            <span>Inventarios</span>
                        </div>

                        <div class="grid-item mb-3">
                            <img width="50" height="50" src="https://img.icons8.com/plasticine/50/truck--v1.png"
                                alt="truck--v1" />
                            <span>Compras</span>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title2">Resumen</h5>
                    <p class="card-text">Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat.

                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat.

                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <br>

            <p
                style="color: white; font-weight: bold; font-size: 25px; border-radius: 10px; background-color: #2069AD; margin-top: 0; text-align: center; border-bottom: 1px solid black">
                <i class="fa-solid fa-thumbs-up fa-beat fa-sm" style="color: #ffffff;"></i> Casos de Éxito
            </p>
            <div class="row mb-3">
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distriubuidora Gonzalez</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/1.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CetranS.A</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/2.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cervantes</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/3.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distriubuidora Cervantes</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/4.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">alserro</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/5.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Quimica Del Norte</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/6.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Establishment Labs</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/7.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distriubuidora Naranjo</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/8.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">La Abejita</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/9.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manza Té</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/10.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supermercado Media Luna</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/11.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distribuidora Barrantes y Cia</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/12.jpg" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">La Central</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/13.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ferreteria Ferconce</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/14.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">iGloo</h5>
                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/15.png" class="card-img-top"
                                alt="...">
                            <i class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i><i class="fa-solid fa-star" style="color: #ffd500;"></i><i
                                class="fa-solid fa-star" style="color: #ffd500;"></i><i class="fa-solid fa-star"
                                style="color: #ffd500;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/aside.php'; ?>
        </aside>

    </div>

    <footer fragment="footer">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
    </footer>
</body>

</html>