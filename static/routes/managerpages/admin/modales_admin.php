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
    <input id="editImagenEmpresa" name="imagen" class="form-control" type="text" required>
</div>
<div class="form-group mb-3 d-flex justify-content-center">
    <img id="editImagenPreviewEmpresa" src="" alt="Imagen del usuario" class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px;">
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

<script>
document.getElementById('editImagenEmpresa').addEventListener('input', function() {
    var imageUrl = this.value;
    var imagePreview = document.getElementById('editImagenPreviewEmpresa');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>
<!-------------------------------------------------- FIN DE MODAL EDITAR Empleado ----------------------------------------------->

<!-------------------------------------------------- INICIO DE MODAL CREAR Empresa --------------------------------------------->
<div class="modal fade" id="newIssue" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nueva Empresa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/admin/create_empresas.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen_url_empresa" type="text" class="form-control" placeholder="Imagen URL">
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen_file" type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <img id="imagePreview" src="" alt="Vista previa de la imagen" class="img-fluid rounded img-thumbnail" style="width: 150px; height: 150px; display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.querySelector('input[name="imagen_url_empresa"]').addEventListener('input', function() {
    var imageUrl = this.value;
    var imagePreview = document.getElementById('imagePreview');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});

document.querySelector('input[name="imagen_file"]').addEventListener('change', function() {
    var file = this.files[0];
    var imagePreview = document.getElementById('imagePreview');
    
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>

<!-------------------------------------------------- FIN DE MODAL CREAR Empresa ------------------------------------------------>


<!-------------------------------------------------- Inicio DE MODAL Editar admin ------------------------------------------------>
<div class="modal fade" id="editAdmin" tabindex="-1" aria-labelledby="editAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editAdminModalLabel"><i class="fa fa-pencil"></i> Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editAdminForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuarios.php" method="post">
                <div class="modal-body">
                    <input type="hidden" id="editAdminId" name="id">
                    <div class="form-group mb-3">
                        <label for="editCorreoAdmin">Correo</label>
                        <input id="editCorreoAdmin" name="correo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefonoAdmin">Teléfono</label>
                        <input id="editTelefonoAdmin" name="telefono" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDireccionAdmin">Dirección</label>
                        <input id="editDireccionAdmin" name="direccion" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagenAdmin">Imagen</label>
                        <input id="editImagenAdmin" name="imagen" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <img id="editImagenPreviewAdmin" src="" alt="Imagen del usuario" class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px; display: none;">
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
<script>
document.getElementById('editImagenAdmin').addEventListener('input', function() {
    var imageUrl = this.value;
    var imagePreview = document.getElementById('editImagenPreviewAdmin');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>
<!-------------------------------------------------- FIN DE MODAL Editar admin ------------------------------------------------>

<!-------------------------------------------------- INICIO DE MODAL CREAR Usuario --------------------------------------------->
<div class="modal fade" id="newIssue2" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nuevo Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/admin/create_usuarios.php" method="post" enctype="multipart/form-data">
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
                        <select name="empresa" class="form-control" required>
                            <option value="">Seleccionar Empresa</option>
                            <?php
                            require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/admin/leer_empresas.php';
                            foreach ($empresas as $empresa) {
                                echo "<option value=\"" . htmlspecialchars($empresa['id']) . "\">" . htmlspecialchars($empresa['nombre']) . "</option>";
                            }
                            ?>
                        </select>
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
                        <select name="rol" class="form-control" required>
                            <option value="">Seleccionar Rol</option>
                            <option value="1">Admin</option>
                            <option value="0">Usuario</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen_url_usuario" type="text" class="form-control" placeholder="Imagen URL">
                    </div>
                    <div class="form-group mb-3">
                        <input name="imagen_file" type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <img id="imagePreview2" src="" alt="Vista previa de la imagen" class="img-fluid rounded img-thumbnail" style="width: 150px; height: 150px; display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
document.querySelector('input[name="imagen_url_usuario"]').addEventListener('input', function() {
    var imageUrl = this.value;
    var imagePreview = document.getElementById('imagePreview2');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});

document.querySelector('input[name="imagen_file"]').addEventListener('change', function() {
    var file = this.files[0];
    var imagePreview = document.getElementById('imagePreview2');
    
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>

<!-------------------------------------------------- FIN DE MODAL CREAR Usuario ------------------------------------------------>

<!-------------------------------------------------- INICIO DE MODAL EDITAR Usuarios -------------------------------------------->
<div class="modal fade" id="editUsuario" tabindex="-1" aria-labelledby="editUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editUsuarioModalLabel"><i class="fa fa-pencil"></i> Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUsuarioForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuarios.php" method="post">
                <div class="modal-body">
                    <input type="hidden" id="editUsuarioId" name="id">
                    <div class="form-group mb-3">
                        <label for="editCorreoUsuario">Correo</label>
                        <input id="editCorreoUsuario" name="correo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefonoUsuario">Teléfono</label>
                        <input id="editTelefonoUsuario" name="telefono" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDireccionUsuario">Dirección</label>
                        <input id="editDireccionUsuario" name="direccion" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagenUsuario">Imagen</label>
                        <input id="editImagenUsuario" name="imagen" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <img id="editImagenPreview" src="" alt="Imagen del usuario" class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px; display: none;">
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
<script>
document.getElementById('editImagenUsuario').addEventListener('input', function() {
    var imageUrl = this.value;
    var imagePreview = document.getElementById('editImagenPreview');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>
<!----------------------------------------- FIN DE MODAL EDITAR Usuarios ----------------------------------------------->

<!-------------------------------------------------- Inicio DE MODAL Responder Tiquete ------------------------------------------------>
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
<!-------------------------------------------------- FIN DE MODAL Responder Tiquete -------------------------------------------------->

<!-------------------------------------------------- INICIO DE MODAL Detalles del Tiquete ----------------------------------------------->
<div class="modal fade" id="issue" tabindex="-1" role="dialog" aria-labelledby="issue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-cog"></i> Detalles del Tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-10">
                        <p>Asunto: <strong id="issueTitle"></strong></p>
                        <p>Detalles del tiquete: <span id="issueDescription"></span></p>
                    </div>
                </div>
                <div class="row support-content-comment">
                    <div class="col-md-2">
                       <img src="<?php echo $_SESSION['usuario_imagen']; ?>" class="img-circle" />
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

<!-------------------------------------------------- FIN DE MODAL Detalles del Tiquete -------------------------------------------------->

