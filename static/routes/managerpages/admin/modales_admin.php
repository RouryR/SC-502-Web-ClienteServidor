

<!-------------------------------------------------- INICIO DE MODAL EDITAR Empresa -------------------------------------------->
<div class="modal fade" id="editIssueModal" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar Empresa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_empresa.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editEmpresaId" name="id">
                    <div class="form-group mb-3">
                        <label for="editNombre">Nombre</label>
                        <input id="editNombre" name="nombre" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editCorreo">Correo</label>
                        <input id="editCorreo" name="correo" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefono">Telefono</label>
                        <input id="editTelefono" name="telefono" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagen">Imagen</label>
                        <input id="editImagen" name="imagen" class="form-control" required></input>
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
<div class="modal fade" id="editIssueModal3" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/admin/update_usuarios.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editUsuarioId2" name="id">
                    <div class="form-group mb-3">
                        <label for="editCorreo2">Correo</label>
                        <input id="editCorreo2" name="correo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editTelefono2">Teléfono</label>
                        <input  id="editTelefono2" name="telefono" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDireccion2">Direccion</label>
                        <input id="editDireccion2" name="direccion" class="form-control" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editImagen2">Imagen</label>
                        <input id="editImagen2" name="imagen" class="form-control" required></input>
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

