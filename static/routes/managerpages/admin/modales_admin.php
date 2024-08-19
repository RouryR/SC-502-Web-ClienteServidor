

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