
<!-------------------------------------------------- INICIO DE MODAL EDITAR Empleado -------------------------------------------->
<div class="modal fade" id="editIssueModal" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar Empleado</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/empleado/update_empleados.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editEmpleadoId" name="id_empleado">
                    <div class="form-group mb-3">
                        <label for="editNombre">Nombre</label>
                        <input id="editNombre" name="nombre_completo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editCorreo">Correo</label>
                        <input id="editCorreo" name="correo" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editPuesto">Puesto</label>
                        <input id="editPuesto" name="puesto" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editSalario">Salario</label>
                        <input id="editSalario" name="salario" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefono">Telefono</label>
                        <input id="editTelefono" name="telefono" class="form-control" required></input>
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


<!-------------------------------------------------- INICIO DE MODAL CREAR Empresa --------------------------------------------->
<div class="modal fade" id="newIssue" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nuevo Empleado</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/empleado/create_empleados.php" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="email" type="text" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="puesto" type="text" class="form-control" placeholder="Puesto" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="salario" type="text" class="form-control" placeholder="Salario" required>
                    </div>
                    <div class="form-group mb-3">
                        <input name="telefono" type="text" class="form-control" placeholder="Telefono" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
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



<!-------------------------------------------------- Inicio DE MODAL Editar perfil ------------------------------------------------>
<div class="modal fade" id="editUsuario" tabindex="-1" aria-labelledby="editUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editUsuarioModalLabel"><i class="fa fa-pencil"></i> Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUsuarioForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuariosEmpleado.php" method="post">
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
                        <img id="editImagenPreviewUsuario" src="" alt="Imagen del usuario" class="img-fluid rounded img-thumbnail" style="width: 100px; height: 100px; display: none;">
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
    var imagePreview = document.getElementById('editImagenPreviewUsuario');
    
    if (imageUrl) {
        imagePreview.src = imageUrl;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }
});
</script>
<!-------------------------------------------------- FIN DE MODAL Editar perfil ------------------------------------------------>

<!-------------------------------------------------- Inicio DE MODAL Editar Perfil ------------------------------------------------>
<div class="modal fade" id="editIssueModal2" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar mi Perfil</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/Usuario/update_usuario.php"
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