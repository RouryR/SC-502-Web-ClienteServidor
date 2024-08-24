<!-------------------------------------------------- INICIO DE MODAL EDITAR Empresa -------------------------------------------->
<div class="modal fade" id="editEmpresaModal" tabindex="-1" aria-labelledby="editEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editEmpresaModalLabel"><i class="fa fa-pencil"></i> Editar Empresa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editEmpresaForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_empresa.php" method="post">
                <div class="modal-body">
                    <input type="hidden" id="editEmpresaId" name="id">
                    <div class="form-group mb-3">
                        <label for="editNombreEmpresa">Nombre</label>
                        <input id="editNombreEmpresa" name="nombre" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editCorreoEmpresa">Correo</label>
                        <input id="editCorreoEmpresa" name="correo" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefonoEmpresa">Teléfono</label>
                        <input id="editTelefonoEmpresa" name="telefono" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagenEmpresa">Imagen</label>
                        <input id="editImagenEmpresa" name="imagen" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <input id="editImagenEmpresa" name="imagen" class="form-control" type="hidden">
                        <img id="editImagenPreviewEmpresa" src="" alt="Imagen del usuario"
                            class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-------------------------------------------------- FIN DE MODAL EDITAR Empleado ----------------------------------------------->


<!-------------------------------------------------- INICIO DE MODAL CREAR Empleado --------------------------------------------->

<div class="modal fade" id="newIssue" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nueva Empresa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/admin/create_empresas.php" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="email" type="text" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen" type="text" class="form-control" placeholder="Imagen" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>
                        Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-------------------------------------------------- FIN DE MODAL CREAR Empleado ------------------------------------------------>


<!-------------------------------------------------- Inicio DE MODAL Editar Perfil ------------------------------------------------>
<div class="modal fade" id="editIssueModal2" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar mi Perfil</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuarios.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editId" name="usuario_id">
                    <div class="form-group mb-3">
                        <label for="editCorreo">Correo</label>
                        <input id="editCorreo" name="correo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDireccion">Dirección</label>
                        <input id="editDireccion" name="direccion" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefono">Teléfono</label>
                        <input id="editTelefono" name="telefono" class="form-control" required></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

                <?php echo $_SESSION['usuario_id']; ?>

                <?PHP
                echo $_SESSION['usuario_id'];
                echo $_SESSION['correo'];
                echo $_SESSION['direccion'];
                echo $_SESSION['telefono'];


                ?>
            </form>
        </div>
    </div>
</div>

<!-------------------------------------------------- INICIO DE MODAL CREAR Empleado --------------------------------------------->

<div class="modal fade" id="newIssue2" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nuevo Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/admin/create_usuarios.php" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input name="correo" type="email" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="empresa" type="number" class="form-control" placeholder="Empresa" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="puesto" type="text" class="form-control" placeholder="Puesto" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="direccion" type="text" class="form-control" placeholder="Dirección" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="rol" type="text" class="form-control" placeholder="Rol" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen" type="text" class="form-control" placeholder="Imagen" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>
                        Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-------------------------------------------------- FIN DE MODAL CREAR Empleado ------------------------------------------------>

<!-------------------------------------------------- INICIO DE MODAL EDITAR Usuarios -------------------------------------------->


<div class="modal fade" id="editUsuario" tabindex="-1" aria-labelledby="editUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editUsuarioModalLabel"><i class="fa fa-pencil"></i> Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuarios.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editUsuarioId" name="id">
                    <div class="form-group mb-3">
                        <label for="editCorreoUsuario">Correo</label>
                        <input id="editCorreoUsuario" name="correo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefonoUsuario">Teléfono</label>
                        <input id="editTelefonoUsuario" name="telefono" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDireccionUsuario">Direccion</label>
                        <input id="editDireccionUsuario" name="direccion" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagenUsuario">Imagen</label>
                        <input id="editImagenUsuario" name="imagen" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <input id="editImagenUsuario" name="imagen" class="form-control" type="hidden">
                        <img id="editImagenPreview" src="" alt="Imagen del usuario"
                            class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-------------------------------------------------- FIN DE MODAL EDITAR Usuarios ----------------------------------------------->
<!-------------------------------------------------- Inicio DE MODAL Editar Tiquetes ------------------------------------------------>

<div class="modal fade" id="editAnswer" tabindex="-1" aria-labelledby="editAnswerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editAnswerModalLabel"><i class="fa fa-pencil"></i>Responder Tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/responder_tiquetes.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editTiqueteId" name="id_tiquete">
                    <div class="form-group mb-3">
                        <label for="ticketDescription2">Descripción</label>
                        <input id="ticketDescription2" name="descripcion" type="text" class="form-control" readonly="readonly">
                    </div>
                    <div class="form-group mb-3">
                        <label for="editRespuesta">Respuesta</label>
                        <textarea id="editRespuesta" name="respuesta_recibida" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

<!-------------------------------------------------- INICIO DE MODAL VER TIQUETE ----------------------------------------------->
<div class="modal fade" id="issue" tabindex="-1" role="dialog" aria-labelledby="issue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-cog"></i> Detalles del Tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?php echo $_SESSION['usuario_imagen']; ?>" class="img-circle" />
                    </div>
                    <div class="col-md-10">
                        <p>Asunto: <strong id="issueTitle"></strong></p>
                        <p>Detalles del tiquete: <span id="issueDescription"></span></p>
                    </div>
                </div>
                <div class="row support-content-comment">
                    <div class="col-md-2">
                        <img src="https://it-solutions.com.mx/web/wp-content/uploads/2019/11/it-solutiones-soporte-introduccion-imagen.png"
                            class="img-circle" alt="" width="50">
                    </div>
                    <div class="col-md-10">
                        <p>Respuesta: <span id="issueResponse"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>
                    Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------- FIN DE MODAL VER TIQUETE -------------------------------------------------->

