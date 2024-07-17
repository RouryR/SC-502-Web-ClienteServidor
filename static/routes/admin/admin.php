<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tiquetes</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/head.php'; ?>
    <link rel="stylesheet"
        href="/SC-502-Web-ClienteServidor/static/css/tiquetes/tiquetes.css?n=<?php echo (rand()); ?>">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/header.php'; ?>
    </header>

    <main>

        <div class="content-container">
            <section>
                <p style=" border-radius: 10px; color: white; font-weight: bold; font-size: 25px; background-color:
            #2069AD; text-align: center; border-bottom: 1px solid black;">
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i> Admin (Opción
                    disponible cuando se ha logeado un admin)
                </p>

                <div class="container">
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
                                        <img src="/SC-502-Web-ClienteServidor/static/img/profile.png" alt="Perfil"
                                            class="circular-image" />
                                        <h3>Emmanuel Cervantes</h3>
                                        <p>Gerente Excalibur-Tech</p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/10.png"
                                                class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="personal-info">
                                        <h3>Información Personal</h3>
                                        <ul class="personal-list">
                                            <li><i class="fas fa-briefcase "></i><span>Gerencia</span></li>
                                            <li><i class="fas fa-map-marker-alt "></i><span>Heredia, Aurora</span></li>
                                            <li><i class="far fa-envelope "></i><span>emacervantes21@gmail.com</span></li>
                                            <li><i class="fas fa-mobile "></i><span>+506 89432784</span></li>
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
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outline-primary active" id="pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                role="tab" aria-controls="pills-home" aria-selected="true">Ver Usuarios</button>
                                        </li>
                                        
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outline-primary" id="pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                                role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Tiquetes</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outline-primary" id="pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-profile2" type="button"
                                                role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Tiquetes Contáctenos</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                                                        <button type="button" class="btn btn-success"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#newIssue">Crear Empresas Cliente
                                                                        </button>

                                                                        <div class="modal fade" id="newIssue"
                                                                            tabindex="-1" aria-labelledby="newIssue"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bg-blue">
                                                                                        <h4 class="modal-title"><i
                                                                                                class="fa fa-pencil"></i>
                                                                                            Empresas Cliente</h4>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form action="#" method="post">
                                                                                        <div class="modal-body">
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Nombre de la Empresa"
                                                                                                    required>
                                                                                            </div>
                                                                                            
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="email"
                                                                                                    class="form-control"
                                                                                                    placeholder="Correo"
                                                                                                    required>
                                                                                            </div>
                                                                                            
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Teléfono"
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal"><i
                                                                                                    class="fa fa-times"></i>
                                                                                                Cancelar</button>
                                                                                            <button
                                                                                                style="background-color: #083e70"
                                                                                                type="submit"
                                                                                                class="btn btn-primary"><i
                                                                                                    class="fa fa-pencil"></i>
                                                                                                Modificar</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>




                                        <li class="nav-item" role="presentation">
                                            <button type="button" class="btn btn-success pull-right"
                                                data-bs-toggle="modal" data-bs-target="#newIssue2">Crear nuevo Usuario
                                            </button>

                                            <div class="modal fade" id="newIssue2" tabindex="-1"
                                                aria-labelledby="newIssue" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-blue">
                                                            <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear
                                                                nuevo Usuario</h4>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="#" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3">
                                                                    <input name="subject" type="text"
                                                                        class="form-control"
                                                                        placeholder="Nombre Completo" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <select name="department" class="form-control"
                                                                        required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            Puesto </option>
                                                                        <option value="Cajero">Cajero</option>
                                                                        <option value="Recursos Humanos">Recursos
                                                                            Humanos</option>
                                                                        <option value="Asistente">Asistente</option>
                                                                        <option value="Finanzas">Finanzas</option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <select name="department" class="form-control"
                                                                        required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            rol </option>
                                                                        <option value="admin">Administrador</option>
                                                                        <option value="usuario">Usuario</option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <select name="department" class="form-control"
                                                                        required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            Empresa </option>
                                                                        <option value="te">Manza Té</option>
                                                                        <option value="exca">Excalibur-Tech
                                                                            </option>
                                                                        <option value="dc">Dicersa</option>
                                                                        <option value="iqn">IQN</option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <input name="subject" type="email"
                                                                        class="form-control" placeholder="Correo"
                                                                        required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <input name="subject" type="text"
                                                                        class="form-control" placeholder="Teléfono"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal"><i class="fa fa-times"></i>
                                                                    Cancelar</button>
                                                                <button style="background-color: #083e70" type="submit"
                                                                    class="btn btn-primary"><i class="fa fa-pencil"></i>
                                                                    Crear</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">


                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class:="titulo" style="text-align: center; color: white; ">
                                                <h2>Tiquetes</h2>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Asunto</th>
                                                        <th scope="col">Fecha creción</th>
                                                        <th scope="col">Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-warning">
                                                        <th scope="row">1</th>
                                                        <td>Error 404</td>
                                                        <td>12 julio 2024</td>
                                                        <td><strong>En revisión</strong></td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <th scope="row">2</th>
                                                        <td>Comunicación con gerencia</td>
                                                        <td>03 marzo 2024</td>
                                                        <td><strong>Pendiente</strong></td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th scope="row">3</th>
                                                        <td>Recuperar datos</td>
                                                        <td>28 noviembre 2023</td>
                                                        <td><strong>En revisión</strong></td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <th scope="row">4</th>
                                                        <td>Cambio de contraseña</td>
                                                        <td>28 noviembre 2023</td>
                                                        <td><strong>Pendiente</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <nav aria-label="..." style="text-align: center;">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">Anterior</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Siguiente</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="pills-tabContent">


<div class="tab-pane fade" id="pills-profile2" role="tabpanel"
    aria-labelledby="pills-profile-tab">
    <div class:="titulo" style="text-align: center; color: white; ">
        <h2>Tiquetes Contáctenos</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-warning">
                <th scope="row">1</th>
                <td>juanito@gmail.com</td>
                <td>12341234</td>
                <td>Interés de negocio</td>
            </tr>
            <tr class="table-warning">
                <th scope="row">2</th>
                <td>pedro@gmail.com</td>
                <td>12341232</td>
                <td>Consulta sobre contrato</td>
            </tr>
            <tr class="table-warning">
                <th scope="row">3</th>
                <td>marta@gmail.com</td>
                <td>22341234</td>
                <td>Cita</td>
            </tr>
        </tbody>
    </table>
    <nav aria-label="..." style="text-align: center;">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
            </li>
        </ul>
    </nav>
</div>
</div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class:="titulo" style="text-align: center; color: white;">
                                                <h2>Ver Usuarios</h2>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>                                                       
                                                        <th scope="col">ID</th>
                                                        <th scope="col">rol</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Usuario</th>
                                                        <th scope="col">Correo</th>
                                                        <th scope="col">Empresa</th>
                                                        <th scope="col">Puesto</th>
                                                        <th scope="col">Teléfono</th>
                                                        <th scope="col">Acción</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr class="table-success">
                                                        <th scope="row">1</th>
                                                        <td>2</td>
                                                        <td>Emmanuel Cervantes</td>
                                                        <td>Cerem0208</td>
                                                        <td>emacervantes21@gmail.com</td>
                                                        <td>Excalibur-Tech</td>
                                                        <td>Gerente</td>
                                                        <td>84119889</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                                    style="background-color: #083e70">
                                                                    Edición
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-dark"
                                                                    aria-labelledby="dropdownMenuButton2">
                                                                    <li><a class="dropdown-item">Eliminar</a></li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button type="button" class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#newIssue2">Modificar
                                                                        </button>

                                                                        <div class="modal fade" id="newIssue2"
                                                                            tabindex="-1" aria-labelledby="newIssue"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bg-blue">
                                                                                        <h4 class="modal-title"><i
                                                                                                class="fa fa-pencil"></i>
                                                                                            Crear
                                                                                            nuevo usuario</h4>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form action="#" method="post">
                                                                                        <div class="modal-body">
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Nombre Completo"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <select
                                                                                                    name="empresa"
                                                                                                    class="form-control"
                                                                                                    required>
                                                                                                    <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        Seleccionar empresa </option>
                                                                                                    <option
                                                                                                        value="te">
                                                                                                        Manza Té</option>
                                                                                                    <option
                                                                                                        value="dc">
                                                                                                        Dicersa
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="iqn">
                                                                                                        IQN
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="ctr">
                                                                                                        Cetransa
                                                                                                    </option>

                                                                                                </select>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="email"
                                                                                                    class="form-control"
                                                                                                    placeholder="Correo"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Puesto"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Teléfono"
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal"><i
                                                                                                    class="fa fa-times"></i>
                                                                                                Cancelar</button>
                                                                                            <button
                                                                                                style="background-color: #083e70"
                                                                                                type="submit"
                                                                                                class="btn btn-primary"><i
                                                                                                    class="fa fa-pencil"></i>
                                                                                                Crear</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>



                                                        </td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th scope="row">2</th>
                                                        <td>2</td>
                                                        <td>Luis Cervantes</td>
                                                        <td>Luis0208</td>
                                                        <td>luis21@gmail.com</td>
                                                        <td>Manza Té</td>
                                                        <td>Cajero</td>
                                                        <td>84119881</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                                    style="background-color: #083e70">
                                                                    Edición
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-dark"
                                                                    aria-labelledby="dropdownMenuButton2">
                                                                    <li><a class="dropdown-item">Eliminar</a></li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button type="button" class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#newIssue2">Modificar
                                                                        </button>

                                                                        <div class="modal fade" id="newIssue2"
                                                                            tabindex="-1" aria-labelledby="newIssue2"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bg-blue">
                                                                                        <h4 class="modal-title"><i
                                                                                                class="fa fa-pencil"></i>
                                                                                            Crear
                                                                                            nuevo usuario</h4>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form action="#" method="post">
                                                                                        <div class="modal-body">
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Nombre Completo"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <select
                                                                                                    name="empresa"
                                                                                                    class="form-control"
                                                                                                    required>
                                                                                                    <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        Seleccionar empresa </option>
                                                                                                    <option
                                                                                                        value="te">
                                                                                                        Manza Té</option>
                                                                                                    <option
                                                                                                        value="dc">
                                                                                                        Dicersa
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="iqn">
                                                                                                        IQN
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="ctr">
                                                                                                        Cetransa
                                                                                                    </option>

                                                                                                </select>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="email"
                                                                                                    class="form-control"
                                                                                                    placeholder="Correo"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Usuario"
                                                                                                    required>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-group mb-3">
                                                                                                <input name="subject"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="Teléfono"
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal"><i
                                                                                                    class="fa fa-times"></i>
                                                                                                Cancelar</button>
                                                                                            <button
                                                                                                style="background-color: #083e70"
                                                                                                type="submit"
                                                                                                class="btn btn-primary"><i
                                                                                                    class="fa fa-pencil"></i>
                                                                                                Crear</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>



                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <nav aria-label="..." style="text-align: center;">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">Anterior</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Siguiente</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                        
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

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/php/footer.php'; ?>
</body>

</html>