<?php
session_start();
?>

<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-start align-items-center">
            <div class="logo-container">
                <a class="justify-content-start align-items-center navbar-brand"
                    href="/SC-502-Web-ClienteServidor//static/index.php">
                    <img src="/SC-502-Web-ClienteServidor/static/img/logo.svg" alt="" class="logo-img" />
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="nav-container d-flex">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-lg me-2 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Productos
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/epr.php">ERP</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/ruteo.php">Ruteo y
                                Distribución</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/PuntoDeVenta.php">Punto de
                                Venta</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/nominaYRecursos.php">Nómina y
                                Recursos
                                Humanos</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/manufactura.php">Manufactura</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/importaciones.php">Importaciones</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/facturacionIntercompany.php">Facturación
                                Intercompany</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/facturacion.php">Facturación</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/estadisticaDeVentas.php">Estadística
                                de Ventas</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/liquidacionDeAgentes.php">Liquidación
                                de
                                Agentes</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/cuentasXcobrar.php">Cuentas
                                por Cobrar</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/contabilidad.php">Contabilidad</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/comisiones.php">Comisiones</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/cuentasXpagar.php">Cuentas por
                                Pagar</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/bancosYconciliaciones.php">Bancos
                                y Conciliaciones</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/inventarios.php">Inventarios</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/activosFijos.php">Activos
                                Fijos</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/productos/compras.php">Compras</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-lg me-2 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Servicios
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/servicios/callcenter.php">Call
                                Center</a></li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/servicios/capacitacion.php">Capacitación</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/servicios/soporte.php">Soporte</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-lg me-2 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        CRUDs
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/managerpages/tiquetes/tiquetes.php">Tiquetes</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php">Usuarios</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="/SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/routes/casosdeexito.php">Casos de Éxito</a>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php">Contáctenos</a>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/routes/acercade.php">Sobre Nosotros</a>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/index2.php">Index 2</a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <div class="text-center mb-3">
                    <?php if (isset($_SESSION['usuario_id'])): ?>
                        <?php
                        date_default_timezone_set('America/Costa_Rica');
                        $hour = date('H');

                        if ($hour < 12) {
                            $greeting = '¡Buenos días';
                            $icon_url = 'https://img.icons8.com/emoji/48/sun-emoji.png'; // Icono de 
                        } elseif ($hour < 18) {
                            $greeting = '¡Buenas tardes';
                            $icon_url = 'https://img.icons8.com/emoji/48/sunset-emoji.png'; // Icono 
                        } else {
                            $greeting = '¡Buenas noches';
                            $icon_url = 'https://img.icons8.com/emoji/48/crescent-moon-emoji.png'; // 
                        }
                        ?>
                        <h4 class="greeting-text">
                            <img width="30" height="30" src="<?php echo $icon_url; ?>" alt="greeting-icon" />
                            <strong><?php echo $greeting . ' ' . $_SESSION['Nombre']; ?>!</strong>
                        </h4>
                        <img src="<?php echo $_SESSION['usuario_imagen']; ?>" alt="Perfil" class="img-circular mb-3" />
                        <h4><img width="30" height="30" src="https://img.icons8.com/color/30/company.png" alt="company" />
                            <?php echo $_SESSION['empresa_nombre']; ?></h4>
                        <p><img width="30" height="30" src="https://img.icons8.com/office/30/briefcase.png"
                                alt="briefcase" /> <?php echo $_SESSION['puesto']; ?></p>
                        <p><img width="30" height="30" src="https://img.icons8.com/fluency/30/mail--v1.png"
                                alt="mail--v1" /> <?php echo $_SESSION['correo']; ?></p>
                        <p><img width="30" height="30" src="https://img.icons8.com/plasticine/30/000000/phone.png"
                                alt="phone" /> <?php echo $_SESSION['telefono']; ?></p>
                        <p><?php echo $_SESSION['usuario_id']; ?></p>
                        <p><?php echo $_SESSION['rol']; ?></p>
                        <?php if ($_SESSION['rol'] == 1): ?>
                            <a class="btn btn-danger btn-lg mb-2 "
                                href="/SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php">
                                <i class="fas fa-user-shield"></i> Admin
                            </a>
                        <?php else: ?>
                            <div class="d-flex flex-column align-items-center">
                                <a class="btn btn-warning btn-lg mb-2 uniform-button"
                                    href="/SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php">
                                    <i class="fas fa-users-cog"></i> Administrar
                                </a>
                                <a class="btn btn-warning btn-lg mb-2 uniform-button"
                                    href="/SC-502-Web-ClienteServidor/static/routes/managerpages/tiquetes/tiquetes.php">
                                    <i class="fas fa-ticket-alt"></i> Tiquetes
                                </a>
                                <div class="d-flex justify-content-end mb-3">
                                    <button id="darkModeToggle" class="btn btn-secondary">
                                        <i id="darkModeIcon" class="fas fa-sun"></i>
                                    </button>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php else: ?>
                        <div class="d-flex flex-column align-items-center">
                            <a id="botonSesion" class="btn bg-warning text-dark btn-lg mb-2"
                                href="/SC-502-Web-ClienteServidor/static/routes/signin.php">
                                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                            </a>
                            <a class="btn bg-warning text-dark btn-lg mb-2"
                                href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php">
                                <i class="fas fa-envelope"></i> Contáctenos
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <div class="mt-auto">
                        <a id="botonSesion" class="btn bg-danger text-white btn-lg w-100"
                            href="/SC-502-Web-ClienteServidor/static/routes/logout.php">
                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<a href="https://wa.me/50684119889?text=Hola%20mundo" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var acceptButton = document.getElementById("acceptButton");
        var cookieAlert = document.querySelector(".alert");

        acceptButton.addEventListener("click", function () {
            document.cookie = "cookies_accepted=true;";
            cookieAlert.style.display = "none";
        });

        if (document.cookie.split(';').some((item) => item.trim().startsWith('cookies_accepted='))) {
            cookieAlert.style.display = "none";
        }
    });

    document.getElementById("darkModeToggle").addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
        const icon = document.getElementById("darkModeIcon");

        if (document.body.classList.contains("dark-mode")) {
            icon.classList.remove("fas", "fa-sun");
            icon.classList.add("fas", "fa-moon");
        } else {
            icon.classList.remove("fas", "fa-moon");
            icon.classList.add("fas", "fa-sun");
        }
    });
</script>