<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leer_empresas.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leer_usuarios.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/tiquetes_mgmt.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leerTiquete_contactenos.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/tiquetes_auditorias.php';

if (!isset($_SESSION['rol'])) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/signin.php");
    exit();
}

if (!isset($_SESSION['mensaje_mostrado'])) {
    $_SESSION['mensaje_mostrado'] = false; 
}

$mensaje = '';
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']); 
}

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
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i> Administración
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
                                        <button type="button"
                                            class="btn btn-outline-primary btn-custom active rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#editAdmin"
                                            onclick='loadEditFormAdmin (<?php echo json_encode($_SESSION); ?>)'>
                                            Editar
                                        </button>
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
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-auditoria-tab"
                                                            data-bs-toggle="pill" href="#pills-auditoria" role="tab"
                                                            aria-controls="#pills-auditoria" aria-selected="false">
                                                            Auditoria
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
                                                        <a class="dropdown-item" id="pills-c_pendientes-tab"
                                                            data-bs-toggle="pill" href="#pills-c_pendientes" role="tab"
                                                            aria-controls="pills-c_pendientes" aria-selected="false">
                                                            Pendientes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="dropdown-item" id="pills-c_completados-tab"
                                                            data-bs-toggle="pill" href="#pills-c_completados" role="tab"
                                                            aria-controls="pills-c_completados" aria-selected="false">
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

                                    <!-- Empresa -->
                                    <div class="tab-pane fade show" id="pills-empresa" role="tabpanel"
                                        aria-labelledby="pills-empresa-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Empresas</h2>
                                        </div>

                                        <form method="POST" action="" class="mb-3"
                                            style="max-width: 600px; margin: auto;">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="search_term" placeholder="Buscar por nombre de empresa"
                                                    aria-label="Buscar por nombre de empresa"
                                                    value="<?php echo isset($_POST['search_term']) ? htmlspecialchars($_POST['search_term']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>
                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Imagen</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col"># Usuarios</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($empresas) > 0): ?>
                                                    <?php foreach ($empresas as $empresa): ?>
                                                        <tr class="table-success">
                                                            <th scope="row"><?php echo $empresa['id']; ?></th>
                                                            <td>
                                                                <img src="<?php echo $empresa['imagen']; ?>"
                                                                    alt="Imagen de <?php echo $empresa['nombre']; ?>"
                                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                            </td>
                                                            <td><?php echo $empresa['nombre']; ?></td>
                                                            <td><?php echo $empresa['correo']; ?></td>
                                                            <td><?php echo $empresa['telefono']; ?></td>
                                                            <td><?php echo $empresa['cantidad_usuarios']; ?></td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-outline-primary btn-custom active rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#editEmpresaModal"
                                                                    onclick='loadEditFormEmpresa(<?php echo json_encode($empresa); ?>)'>
                                                                    Editar
                                                                </button>

                                                                <button type="button" class="btn btn-danger rounded-pill"
                                                                    style="visibility: <?php echo ($empresa['cantidad_usuarios'] == 0 && $empresa['nombre'] !== 'Excalibur-Tech') ? 'visible' : 'hidden'; ?>;"
                                                                    onclick="confirmDeletion(<?php echo $empresa['id']; ?>)">
                                                                    Eliminar
                                                                </button>

                                                                <!-- Eliminación -->
                                                                <form id="delete-formEmpresa-<?php echo $empresa['id']; ?>"
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
                                                        <td colspan="7">No se encontraron empresas.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Usuarios -->
                                    <div class="tab-pane fade show active" id="pills-usuarios" role="tabpanel"
                                        aria-labelledby="pills-usuarios-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Usuarios</h2>
                                        </div>
                                        <form method="POST" action="" class="mb-3"
                                            style="max-width: 600px; margin: auto;">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="search_term" placeholder="Buscar por nombre de usuario"
                                                    aria-label="Buscar por nombre de usuario"
                                                    value="<?php echo isset($_POST['search_term']) ? htmlspecialchars($_POST['search_term']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>

                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
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
                                                            <th scope="row"><?php echo $usuario['id']; ?></th>
                                                            <td>
                                                                <img src="<?php echo $usuario['imagen']; ?>"
                                                                    alt="Imagen de <?php echo $usuario['nombre_completo']; ?>"
                                                                    class="img-thumbnail" style="width: 50px; height: 50px;">
                                                            </td>
                                                            <td><?php echo $usuario['correo']; ?></td>
                                                            <td><?php echo $usuario['nombre_completo']; ?></td>
                                                            <td><?php echo $usuario['empresa_nombre']; ?></td>
                                                            <td><?php echo $usuario['puesto']; ?></td>
                                                            <td><?php echo $usuario['telefono']; ?></td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-outline-primary active rounded-pill dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        aria-expanded="false">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <li>
                                                                            <button type="button" class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#editUsuario"
                                                                                onclick='loadEditFormUsuario(<?php echo json_encode($usuario); ?>)'>
                                                                                Editar
                                                                            </button>
                                                                        </li>
                                                                        <?php if ($usuario['puesto'] !== 'Administrador Excalibur-Tech'): ?>
                                                                            <li>
                                                                                <button type="button"
                                                                                    class="dropdown-item text-danger"
                                                                                    onclick="confirmDeletiondeleteUser(<?php echo $usuario['id']; ?>)">
                                                                                    Eliminar
                                                                                </button>
                                                                            </li>
                                                                            <li>
                                                                                <!-- Formulario para eliminar -->
                                                                                <form
                                                                                    id="delete-formUser-<?php echo $usuario['id']; ?>"
                                                                                    action="/SC-502-Web-ClienteServidor/static/managment/admin/delete_usuario.php"
                                                                                    method="POST" style="display:inline;">
                                                                                    <input type="hidden" name="id"
                                                                                        value="<?php echo $usuario['id']; ?>">
                                                                                </form>
                                                                            </li>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="8">No se encontraron usuarios.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>

                                        </table>
                                    </div>

                                    <!-- Tiquetes Completados -->
                                    <div class="tab-pane fade show" id="pills-completados" role="tabpanel"
                                        aria-labelledby="pills-completados-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes completados</h2>
                                        </div>
                                        <form method="POST" action="">
                                            <div class="input-group mb-3" style="max-width: 600px; margin: auto;">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="id_tiquete" placeholder="Buscar por ID de tiquete"
                                                    aria-label="Buscar por ID de tiquete"
                                                    value="<?php echo isset($_POST['id_tiquete']) ? htmlspecialchars($_POST['id_tiquete']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>
                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar
                                                    Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Empresa</th>
                                                    <th scope="col">Usuario</th>
                                                    <th scope="col">Asunto</th>
                                                    <th scope="col">Fecha creación</th>
                                                    <th scope="col">Fecha de cierre</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($tiquetesCompletados) > 0): ?>
                                                    <?php foreach ($tiquetesCompletados as $tiquete): ?>
                                                        <tr class="table-success">
                                                            <th scope="row"><?php echo $tiquete['id_tiquete']; ?></th>
                                                            <td><?php echo $tiquete['nombre_empresa']; ?></td>
                                                            <td><?php echo $tiquete['nombre_usuario']; ?></td>
                                                            <td><?php echo $tiquete['titulo']; ?></td>
                                                            <td><?php echo date('d F Y', strtotime($tiquete['fecha_apertura'])); ?>
                                                            </td>
                                                            <td><?php echo date('d F Y', strtotime($tiquete['fecha_cierre'])); ?>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#issue"
                                                                    onclick="showDetail('<?php echo $tiquete['titulo']; ?>', 
                                                                                             '<?php echo $tiquete['descripcion']; ?>', 
                                                                                             '<?php echo $tiquete['respuesta_recibida']; ?>',
                                                                                             '<?php echo $tiquete['usuario_imagen']; ?>')">
                                                                    Ver
                                                                </button>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="7">No se encontraron tiquetes completados.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Tiquetes Pendientes -->
                                    <div class="tab-pane fade" id="pills-pendiente" role="tabpanel"
                                        aria-labelledby="pills-pendiente-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes Pendientes</h2>
                                        </div>
                                        <form method="POST" action="">
                                            <div class="input-group mb-3" style="max-width: 600px; margin: auto;">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="id_tiquete" placeholder="Buscar por ID de tiquete"
                                                    aria-label="Buscar por ID de tiquete"
                                                    value="<?php echo isset($_POST['id_tiquete']) ? htmlspecialchars($_POST['id_tiquete']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>
                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Empresa</th>
                                                    <th scope="col">Usuario</th>
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
                                                            <th scope="row"><?php echo $tiquete['id_tiquete']; ?></th>
                                                            <td><?php echo $tiquete['nombre_empresa']; ?></td>
                                                            <td><?php echo $tiquete['nombre_usuario']; ?></td>
                                                            <td><?php echo $tiquete['titulo']; ?></td>
                                                            <td><?php echo date('d F Y', strtotime($tiquete['fecha_apertura'])); ?>
                                                            </td>
                                                            <td><strong><?php echo $tiquete['estado']; ?></strong></td>
                                                            <td>
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#editAnswer"
                                                                    onclick='showDetailTiquete(<?php echo json_encode($tiquete); ?>)'>
                                                                    Responder
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="7">No se encontraron tiquetes pendientes.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>






                                    <!-- Tiquetes Auditoria -->
                                    <div class="tab-pane fade show" id="pills-auditoria" role="tabpanel"
                                        aria-labelledby="pills-auditoria-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes de Auditoría</h2>
                                        </div>

                                        <form method="POST" action="" class="mb-3"
                                            style="max-width: 600px; margin: auto;">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="search_id_tiquete" placeholder="Buscar por ID de tiquete"
                                                    aria-label="Buscar por ID de tiquete"
                                                    value="<?php echo isset($_POST['search_id_tiquete']) ? htmlspecialchars($_POST['search_id_tiquete']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>

                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Número de Tiquete</th>
                                                    <th scope="col">Titulo</th>
                                                    <th scope="col">Fecha cierre</th>
                                                    <th scope="col">Creado por</th>
                                                    <th scope="col">Empresa</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($auditoria) > 0): ?>
                                                    <?php foreach ($auditoria as $auditoria_p): ?>
                                                        <tr class="table-success">
                                                            <th scope="row"><?php echo $auditoria_p['id_auditoria']; ?></th>
                                                            <td><?php echo $auditoria_p['id_tiquete']; ?></td>
                                                            <td><?php echo $auditoria_p['titulo']; ?></td>
                                                            <td><?php echo $auditoria_p['fecha_cierre']; ?></td>
                                                            <td><?php echo $auditoria_p['nombre_usuario']; ?></td>
                                                            <td><?php echo $auditoria_p['nombre_empresa']; ?></td>
                                                            <td>
                                                                <!-- Detalle -->
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    data-bs-toggle="modal" data-bs-target="#issue" onclick="showDetail('<?php echo $auditoria_p['titulo']; ?>', 
                                                    '<?php echo $auditoria_p['descripcion']; ?>', 
                                                    '<?php echo $auditoria_p['respuesta_recibida']; ?>')">
                                                                    Ver
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="7">No se encontraron tiquetes de auditoría.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>




                                    <!-- Tiquetes Contactenos completados -->
                                    <div class="tab-pane fade show" id="pills-c_completados" role="tabpanel"
                                        aria-labelledby="pills-c_completados-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes completados</h2>
                                        </div>

                                        <form method="POST" action="" class="mb-3"
                                            style="max-width: 600px; margin: auto;">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="search_id_completados" placeholder="Buscar por ID de tiquete"
                                                    aria-label="Buscar por ID de tiquete"
                                                    value="<?php echo isset($_POST['search_id_completados']) ? htmlspecialchars($_POST['search_id_completados']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>
                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nombre Completo</th>
                                                    <th scope="col">Asunto</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Teléfono</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($tiquetes_contactenos) > 0): ?>
                                                    <?php foreach ($tiquetes_contactenos as $tiquete_c): ?>
                                                        <tr class="table-success">
                                                            <th scope="row"><?php echo $tiquete_c['id_tiquete']; ?></th>
                                                            <td><?php echo $tiquete_c['nombre_completo']; ?></td>
                                                            <td><?php echo $tiquete_c['asunto']; ?></td>
                                                            <td><a
                                                                    href="mailto:<?php echo $tiquete_c['correo']; ?>"><?php echo $tiquete_c['correo']; ?></a>
                                                            </td>
                                                            <td><?php echo $tiquete_c['telefono']; ?></td>
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





                                    <!-- Tiquetes Contactenos Pendientes -->
                                    <div class="tab-pane fade show" id="pills-c_pendientes" role="tabpanel"
                                        aria-labelledby="pills-c_pendientes-tab">
                                        <div class="titulo" style="text-align: center; color: white;">
                                            <h2>Tiquetes pendientes</h2>
                                        </div>

                                        <form method="POST" action="" class="mb-3"
                                            style="max-width: 600px; margin: auto;">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-pill me-2"
                                                    name="search_id_pendientes" placeholder="Buscar por ID de tiquete"
                                                    aria-label="Buscar por ID de tiquete"
                                                    value="<?php echo isset($_POST['search_id_pendientes']) ? htmlspecialchars($_POST['search_id_pendientes']) : ''; ?>">
                                                <button class="btn btn-success rounded-pill me-2"
                                                    type="submit">Buscar</button>

                                                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    class="btn btn-success rounded-pill">Mostrar Todos</a>
                                            </div>
                                        </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nombre Completo</th>
                                                    <th scope="col">Asunto</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($tiquetesPendientes_contactenos) > 0): ?>
                                                    <?php foreach ($tiquetesPendientes_contactenos as $tiquete_p): ?>
                                                        <tr class="table-success">
                                                            <th scope="row"><?php echo $tiquete_p['id_tiquete']; ?></th>
                                                            <td><?php echo $tiquete_p['nombre_completo']; ?></td>
                                                            <td><?php echo $tiquete_p['asunto']; ?></td>
                                                            <td><a
                                                                    href="mailto:<?php echo $tiquete_p['correo']; ?>"><?php echo $tiquete_p['correo']; ?></a>
                                                            </td>
                                                            <td><?php echo $tiquete_p['telefono']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-success rounded-pill"
                                                                    onclick="confirmCompletion(<?php echo $tiquete_p['id_tiquete']; ?>)">
                                                                    Completar
                                                                </button>
                                                                <form id="complete-form-<?php echo $tiquete_p['id_tiquete']; ?>"
                                                                    action="/SC-502-Web-ClienteServidor/static/managment/admin/update_contactenos.php"
                                                                    method="POST" style="display:inline;">
                                                                    <input type="hidden" name="id_tiquete"
                                                                        value="<?php echo $tiquete_p['id_tiquete']; ?>">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="6">No se encontraron tiquetes pendientes.</td>
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
                if (mensaje) {
                    Swal.fire({
                        title: 'Notificación',
                        text: mensaje,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                }
            });


        document.addEventListener('DOMContentLoaded', function () {
            const activeTab = sessionStorage.getItem('activeTab');
            if (activeTab) {
                const tabElement = document.getElementById(activeTab);
                if (tabElement) {
                    new bootstrap.Tab(tabElement).show();
                }
            }

            function saveActiveTab(event) {
                const tabId = event.target.getAttribute('id');
                if (tabId) {
                    sessionStorage.setItem('activeTab', tabId);
                }
            }

            document.querySelectorAll('.nav-item button').forEach(button => {
                button.addEventListener('click', saveActiveTab);
            });

            document.querySelectorAll('.dropdown-menu a').forEach(link => {
                link.addEventListener('click', saveActiveTab);
            });
        });

    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
</body>

</html>