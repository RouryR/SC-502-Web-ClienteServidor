<nav class="navbar navbar-light bg-light fixed-top" style="list-style: none;">
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
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/ruteo.php">Ruteo y
                                Distribución</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/PuntoDeVenta.php">Punto de Venta</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/nominaYRecursos.php">Nómina y Recursos
                                Humanos</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/manufactura.php">Manufactura</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/importaciones.php">Importaciones</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/facturacionIntercompany.php">Facturación
                                Intercompany</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/facturacion.php">Facturación</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/estadisticaDeVentas.php">Estadística de Ventas</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/liquidacionDeAgentes.php">Liquidación de
                                Agentes</a>
                        </li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/cuentasXcobrar.php">Cuentas por Cobrar</a>
                        </li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/contabilidad.php">Contabilidad</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/comisiones.php">Comisiones</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/cuentasXpagar.php">Cuentas por Pagar</a>
                        </li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/bancosYconciliaciones.php">Bancos y Conciliaciones</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/inventarios.php">Inventarios</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/activosFijos.php">Activos Fijos</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/productos/compras.php">Compras</a></li>
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
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/servicios/capacitacion.php">Capacitación</a></li>
                        <li><a class="dropdown-item" href="/SC-502-Web-ClienteServidor/static/routes/servicios/soporte.php">Soporte</a></li>
                    </ul>
                </div>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/casoExito/CasosExito">Casos de Éxito</a>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/routes/contactenos.php">Contáctenos</a>
                <a class="btn btn-primary btn-lg me-2" tabindex="-1" role="button" aria-disabled="true"
                    href="/SC-502-Web-ClienteServidor/static/routes/acercade.php">Acerca de</a>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <div class="nav-container">
                <div>
                    <a id="botonSesion" class="btn bg-warning text-dark  " tabindex="-1" role="button"
                        aria-disabled="true">
                        Iniciar Sesión
                    </a>
                    <a class="btn bg-warning text-dark nav-item px-2" tabindex="-1" role="button" aria-disabled="true"
                        href="#">ES</a>
                    <a class="btn bg-warning text-dark nav-item px-1" tabindex="-1" role="button" aria-disabled="true"
                        href="#">EN</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Alerta de cookies -->
<div class="alert alert-warning alert-dismissible fade show fixed-bottom" role="alert" style="text-align: center;">
    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <strong> Esta página usa Cookies 🍪 para su funcionamiento. </strong>
    <button type="button" class="btn btn-success" data-bs-dismiss="alert" id="acceptButton">ACEPTAR</button>
</div>