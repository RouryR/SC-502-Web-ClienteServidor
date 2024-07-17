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
                    <i class="fa-solid fa-headset fa-beat fa-sm" style="color: #ffffff;"></i> Tiquetes (Opción
                    disponible cuando se ha logeado un usuario)
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
                                        <h3>Diego Ramirez Corrales</h3>
                                        <p>Gerente Manza Té</p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <img src="/SC-502-Web-ClienteServidor/static/img/CasosExito/10.png"
                                                class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="personal-info">
                                        <h3>Información Personal</h3>
                                        <ul class="personal-list">
                                            <li><i class="fas fa-briefcase "></i><span>Areas de Finanzas</span></li>
                                            <li><i class="fas fa-map-marker-alt "></i><span>Heredia, Aurora</span></li>
                                            <li><i class="far fa-envelope "></i><span>Rouryffx@hotmail.com</span></li>
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
                                                role="tab" aria-controls="pills-home"
                                                aria-selected="true">Completados</button>
                                        </li>
                                       
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outline-primary" id="pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                                role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Pendientes</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button type="button" class="btn btn-success pull-right"
                                                data-bs-toggle="modal" data-bs-target="#newIssue">Abrir tiquete</button>

                                            <div class="modal fade" id="newIssue" tabindex="-1"
                                                aria-labelledby="newIssue" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-blue">
                                                            <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear
                                                                nuevo tiquete</h4>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="#" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3">
                                                                    <input name="subject" type="text"
                                                                        class="form-control" placeholder="Asunto"
                                                                        required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <select name="department" class="form-control"
                                                                        required>
                                                                        <option value="" disabled selected>Seleccionar
                                                                            Departamento </option>
                                                                        <option value="IT">IT</option>
                                                                        <option value="Ventas">Ventas</option>
                                                                        <option value="Marketing">Marketing</option>
                                                                        <option value="Finanzas">Finanzas</option>
                                                                        <option value="Recursos Humanos">Recursos
                                                                            Humanos</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <textarea name="message" class="form-control"
                                                                        placeholder="Por favor, detalla tu problema o pregunta"
                                                                        style="height: 120px;" required></textarea>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <input type="file" name="attachment">
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
                                        <li class="btn btn-outline-primary" role="presentation">
                                            <a class="nav-item" style="text-decoration: none;"
                                                href="/SC-502-Web-ClienteServidor/static/routes/empleados/empleados.php">Volver</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class:="titulo" style="text-align: center; color: white;">
                                                <h2>Tiquetes completados</h2>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Asunto</th>
                                                        <th scope="col">Fecha creción</th>
                                                        <th scope="col">Fecha de revisión</th>
                                                        <th scope="col">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-success">
                                                        <th scope="row">1</th>
                                                        <td>Error 404</td>
                                                        <td>12 julio 2024</td>
                                                        <td>13 julio 2024</td>
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
                                                                    <li><a class="dropdown-item">Reabrir</a></li>
                                                                </ul>
                                                            </div>

                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal" data-bs-target="#issue"
                                                                onclick="showDetail('Error 404', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')">
                                                                Ver
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th scope="row">2</th>
                                                        <td>Comunicación con gerencia</td>
                                                        <td>03 marzo 2024</td>
                                                        <td>05 marzo 2024</td>
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
                                                                    <li><a class="dropdown-item">Reabrir</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal" data-bs-target="#issue"
                                                                onclick="showDetail('Comunicación con gerencia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')">
                                                                Ver
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th scope="row">3</th>
                                                        <td>Recuperar datos</td>
                                                        <td>28 noviembre 2023</td>
                                                        <td>28 noviembre 2023</td>
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
                                                                    <li><a class="dropdown-item">Reabrir</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal" data-bs-target="#issue"
                                                                onclick="showDetail('Recuperar datos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')">
                                                                Ver
                                                            </button>
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

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class:="titulo" style="text-align: center; color: white; ">
                                                <h2>Tiquetes Pendientes</h2>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN DETAIL TICKET -->
                    <div class="modal fade" id="issue" tabindex="-1" role="dialog" aria-labelledby="issue"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-blue">
                                    <h4 class="modal-title"><i class="fa fa-cog"></i> Detalles del Tiquete</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="/SC-502-Web-ClienteServidor/static/img/profile.png"
                                                class="img-circle" alt="" width="50">
                                        </div>
                                        <div class="col-md-10">
                                            <p>Asunto: <strong id="issueTitle"></strong></p>
                                            <p id="issueDescription"></p>
                                        </div>
                                    </div>
                                    <div class="row support-content-comment">
                                        <div class="col-md-2">
                                            <img src="assets/img/user/avatar02.png" class="img-circle" alt=""
                                                width="50">
                                        </div>
                                        <div class="col-md-10">
                                            <p>Comentarios:</p>
                                            <p> Aqui irá el comentario del tiquete solo si el tiquete esta completado,
                                                si es un tiquete pendiente, saldrá "rn trevision"</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                            class="fa fa-times"></i> Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DETAIL TICKET -->

                    <script>
                        function showDetail(title, description) {
                            document.getElementById('issueTitle').innerText = title;
                            document.getElementById('issueDescription').innerText = description;

                        }
                    </script>

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