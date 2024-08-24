<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leer_empresas.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leer_usuarios.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/tiquetes_mgmt.php';

if (!isset($_SESSION['rol'])) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/signin.php");
    exit();
}

$mensaje = isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : '';
$numero = isset($_GET['numero']) ? htmlspecialchars($_GET['numero']) : '';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Administracion</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
    <link rel="stylesheet"
        href="/SC-502-Web-ClienteServidor/static/css/tiquetes/tiquetes.css?n=<?php echo (rand()); ?>">
    <script src="/SC-502-Web-ClienteServidor/static/js/routesJS/admin/admin.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/routes/managerpages/admin/modales_admin.php'; ?>
        <div class="content-container">
            <section>
                <p style=" border-radius: 10px; color: white; font-weight: bold; font-size: 25px; background-color:
            #2069AD; text-align: center; border-bottom: 1px solid black;">
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i> Administracion
                </p>

                <div>
                    <div class="row">
                        <div class="col-lg-3 ">
                            <div class="card left-profile-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <?php
                                        date_default_timezone_set('America/Costa_Rica');
                                        $hour = date('H');
                                        if ($hour < 12) {
                                            echo '<p><strong>¡Buenos días!</strong></p>';
                                        } elseif ($hour < 18) {
                                            echo '<p><strong>¡Buenas tardes!</strong></p>';
                                        } else {
                                            echo '<p><strong>¡Buenas noches!</strong></p>';
                                        }
                                        ?>
                                        <img src="<?php echo $_SESSION['usuario_imagen']; ?>" alt="Perfil"
                                            class="circular-image mb-3" />
                                        <h3><?php echo $_SESSION['Nombre']; ?></h3>
                                        <p><?php echo $_SESSION['empresa_nombre']; ?></p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <img src="<?php echo $_SESSION['empresa_imagen']; ?>" class="card-img-top"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="personal-info">
                                        <h3>Información Personal</h3>
                                        <ul class="personal-list">
                                            <li><i
                                                    class="fas fa-briefcase "></i><span><?php echo $_SESSION['puesto']; ?></span>
                                            </li>
                                            <li><i
                                                    class="fas fa-map-marker-alt "></i><span><?php echo $_SESSION['direccion']; ?></span>
                                            </li>
                                            <li><i
                                                    class="far fa-envelope "></i><span><?php echo $_SESSION['correo']; ?></span>
                                            </li>
                                            <li><i
                                                    class="fas fa-mobile "></i><span><?php echo $_SESSION['telefono']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="Aside">
                                        <div class="card text-white bg-secondary  mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Recordatorio</div>
                                            <div class="card-body">
                                                <p class="card-text">Recuerde qué: en caso de olvidar sus credenciales
                                                    debe comunicarse con por linea telefonica o correo</p>
                                            </div>
                                        </div>
                                        <div style="text-align:center;padding:1em 0;">
                                            <h4><a style="text-decoration:none;"
                                                    href="https://www.zeitverschiebung.net/es/country/cr">
                                                    <span style="color:gray;">Hora actual en</span><br />Costa Rica
                                                </a></h4>
                                            <iframe
                                                src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FCosta_Rica&format=12"
                                                width="100%" height="90" frameborder="0" seamless></iframe>
                                        </div>

                                        <div id="ww_f79ac8d81ad3f" v='1.3' loc='id'
                                            a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl4322"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","el_nme":3,"el_cwt":3}'>
                                            Más previsiones: <a href="https://oneweather.org/es/seville/25_days/"
                                                id="ww_f79ac8d81ad3f_u" target="_blank">El tiempo en Sevilla 25 días</a>
                                        </div>
                                        <script async
                                            src="https://app2.weatherwidget.org/js/?id=ww_f79ac8d81ad3f"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card right-profile-card">
                                <div class="card-header alert-primary">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="btn btn-outline-primary btn-custom active"
                                                    id="pills-usuarios-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-usuarios" type="button" role="tab"
                                                    aria-controls="pills-usuarios"
                                                    aria-selected="true">Usuarios</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="btn btn-outline-primary btn-custom"
                                                    id="pills-empresa-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-empresa" type="button" role="tab"
                                                    aria-controls="pills-empresa"
                                                    aria-selected="false">Empresas</button>
                                            </li>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-primary me-2 btn-custom dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Tiquetes
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-light"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-pendiente-tab"
                                                            data-bs-toggle="pill" href="#pills-pendiente" role="tab"
                                                            aria-controls="pills-pendiente" aria-selected="false">
                                                            Pendientes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-completados-tab"
                                                            data-bs-toggle="pill" href="#pills-completados" role="tab"
                                                            aria-controls="#pills-completados" aria-selected="false">
                                                            Completados
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-custom dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    T. Contáctenos
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-light"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-empresa-tab"
                                                            data-bs-toggle="pill" href="#pills-empresa" role="tab"
                                                            aria-controls="pills-empresa" aria-selected="false">
                                                            Pendientes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-empresa-tab"
                                                            data-bs-toggle="pill" href="#pills-empresa" role="tab"
                                                            aria-controls="pills-empresa" aria-selected="false">
                                                            Completados
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <button type="button" class="btn btn-success  me-2 btn-custom"
                                                    data-bs-toggle="modal" data-bs-target="#newIssue2">
                                                    <i class="fa fa-plus"></i> Crear Nueva Usuario
                                                </button>

                                                <button type="button" class="btn btn-success btn-custom"
                                                    data-bs-toggle="modal" data-bs-target="#newIssue">
                                                    <i class="fa fa-plus"></i> Crear Nueva Empresa
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show " id="pills-empresa" role="tabpanel"
                                        aria-labelledby="pills-empresa-tab">
                                        <div class:="titulo" style="text-align: center; color: white;">
                                            <h2>Empresas</h2>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Imagen</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($empresas) > 0): ?>
                                                    <?php foreach ($empresas as $empresa): ?>
                                                        <tr class="table-success">
                                                            <th scope="row">
                                                                <?php echo $empresa['id']; ?>
                                                            </th>
                                                            <td>
                                                                <img src="<?php echo $empresa['imagen']; ?>" alt="Imagen de <?php echo $empresa['nombre']; ?>"
                                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                            </td>
                                                            <td><?php echo $empresa['nombre']; ?></td>
                                                            <td><?php echo $empresa['correo']; ?></td>
                                                            <td><?php echo $empresa['telefono']; ?></td>
                                                            <td>

                                                                <button type="button"
                                                                    class="btn btn-outline-primary btn-custom active rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#editEmpresaModal"
                                                                    onclick='loadEditFormEmpresa(<?php echo json_encode($empresa); ?>)'>
                                                                    Editar
                                                                </button>

                                                                <!--eliminar -->
                                                                <button type="button" class="btn btn-danger rounded-pill"
                                                                    onclick="confirmDeletion(<?php echo $empresa['id']; ?>)">
                                                                    Eliminar
                                                                </button>

                                                                <!-- eliminación -->
                                                                <form id="delete-form-<?php echo $empresa['id']; ?>"
                                                                    action="/SC-502-Web-ClienteServidor/static/managment/admin/delete_empresa.php"
                                                                    method="POST" style="display:inline;">
                                                                    <input type="hidden" name="id"
                                                                        value="<?php echo $empresa['id']; ?>">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">No se encontraron empresas.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-usuarios" role="tabpanel"
                                        aria-labelledby="pills-usuarios-tab">
                                        <div class:="titulo" style="text-align: center; color: white;">
                                            <h2>Usuarios</h2>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Imagen</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Empresa</th>
                                                    <th scope="col">Puesto</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($usuarios) > 0): ?>
                                                    <?php foreach ($usuarios as $usuario): ?>
                                                        <tr class="table-success">
                                                            <th scope="row">
                                                                <?php echo $usuario['id']; ?>
                                                            </th>
                                                            <td>
                                                                <img src="<?php echo $usuario['imagen']; ?>"
                                                                    alt="Imagen de <?php echo $usuario['nombre_completo']; ?>"
                                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                            </td>
                                                            <td><?php echo $usuario['correo']; ?></td>
                                                            <td><?php echo $usuario['nombre_completo']; ?></td>
                                                            <td><?php echo $usuario['empresa_id']; ?></td>
                                                            <td><?php echo $usuario['puesto']; ?></td>
                                                            <td><?php echo $usuario['telefono']; ?></td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-outline-primary btn-custom active rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#editUsuario"
                                                                    onclick='loadEditFormUsuario(<?php echo json_encode($usuario); ?>)'>
                                                                    Editar
                                                                </button>

                                                                <!--eliminar -->
                                                                <button type="button" class="btn btn-danger rounded-pill"
                                                                    onclick="confirmDeletion(<?php echo $usuario['id']; ?>)">
                                                                    Eliminar
                                                                </button>

                                                                <!-- eliminación -->
                                                                <form id="delete-form-<?php echo $usuario['id']; ?>"
                                                                    action="/SC-502-Web-ClienteServidor/static/managment/admin/delete_usuario.php"
                                                                    method="POST" style="display:inline;">
                                                                    <input type="hidden" name="id"
                                                                        value="<?php echo $usuario['id']; ?>">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">No se encontraron usuarios.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show " id="pills-completados" role="tabpanel"
                                        aria-labelledby="pills-completados-tab">
                                        <div class:="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes completados</h2>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Asunto</th>
                                                    <th scope="col">Fecha creación</th>
                                                    <th scope="col">Fecha de cierre</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($tiquetes) > 0): ?>
                                                    <?php foreach ($tiquetes as $tiquete): ?>
                                                        <tr class="table-success">
                                                            <th scope="row">
                                                                <?php echo $tiquete['id_tiquete']; ?>
                                                            </th>
                                                            <td><?php echo $tiquete['titulo']; ?></td>
                                                            <td><?php echo $tiquete['fecha_apertura']; ?></td>
                                                            <td><?php echo $tiquete['fecha_cierre']; ?></td>
                                                            <td>
                                                                <!--detalle -->
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#issue"
                                                                    onclick="showDetail('<?php echo $tiquete['titulo']; ?>', 
                                                                                            '<?php echo $tiquete['descripcion']; ?>', 
                                                                                            '<?php echo $tiquete['respuesta_recibida']; ?>')">
                                                                    Ver
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">No se encontraron tiquetes completados.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-pendiente" role="tabpanel"
                                        aria-labelledby="pills-pendiente-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes Pendientes</h2>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Asunto</th>
                                                    <th scope="col">Fecha creación</th>
                                                    <th scope="col">Estado</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($tiquetesPendientes) > 0): ?>
                                                    <?php foreach ($tiquetesPendientes as $tiquete): ?>
                                                        <tr
                                                            class="<?php echo $tiquete['estado'] === 'Pendiente' ? 'table-danger' : 'table-warning'; ?>">
                                                            <th scope="row">
                                                                <?php echo $tiquete['id_tiquete']; ?>
                                                            </th>
                                                            <td><?php echo $tiquete['titulo']; ?></td>
                                                            <td><?php echo date('d F Y', strtotime($tiquete['fecha_apertura'])); ?>
                                                            </td>
                                                            <td><strong><?php echo $tiquete['estado']; ?></strong>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#viewTicketModal"
                                                                    onclick='showDetailPending("<?php echo $tiquete['id_tiquete']; ?>","<?php echo $tiquete['titulo']; ?>", "<?php echo $tiquete['descripcion']; ?>")'>
                                                                    Ver
                                                                </button>
                                                            </td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">No se encontraron tiquetes completados.</td>
                                                    </tr>
                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mensaje = '<?php echo $mensaje; ?>';
            var numero = '<?php echo $numero; ?>';
            if (mensaje) {
                Swal.fire({
                    title: 'Notificación',
                    text: mensaje + '' + numero,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
</body>

</html>