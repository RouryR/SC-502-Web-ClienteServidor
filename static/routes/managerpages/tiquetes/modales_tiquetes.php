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


<!-------------------------------------------------- INICIO DE MODAL VER TIQUETE PENDIENTE ------------------------------------->
<div class="modal fade" id="viewTicketModal" tabindex="-1" aria-labelledby="viewTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="viewTicketModalLabel"><i class="fa fa-eye"></i> Detalles del Tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?php echo $_SESSION['usuario_imagen']; ?>" class="img-circle" />
                    </div>
                    <div class="col-md-10">
                        <p><strong>ID:</strong> <span id="ticketId"></span></p>
                        <p><strong>Asunto:</strong> <span id="ticketTitle"></span></p>
                        <p><strong>Detalle del tiquete:</strong> <span id="ticketDescription"></span></p>
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
<!-------------------------------------------------- FINAL DE MODAL VER TIQUETE PENDIENTE -------------------------------------->


<!-------------------------------------------------- INICIO DE MODAL EDITAR TIQUETE -------------------------------------------->
<div class="modal fade" id="editIssueModal" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="editIssueModalLabel"><i class="fa fa-pencil"></i> Editar Tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editIssueForm" action="/SC-502-Web-ClienteServidor/static/managment/tiquetes/update_tiquete.php"
                method="post">
                <div class="modal-body">
                    <input type="hidden" id="editTiqueteId" name="id_tiquete">
                    <div class="form-group mb-3">
                        <label for="editTitulo">Asunto</label>
                        <input id="editTitulo" name="titulo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="editDescripcion">Descripción</label>
                        <textarea id="editDescripcion" name="descripcion" class="form-control" required></textarea>
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
<!-------------------------------------------------- FIN DE MODAL EDITAR TIQUETE ----------------------------------------------->


<!-------------------------------------------------- INICIO DE MODAL CREAR TIQUETE --------------------------------------------->
<div class="modal fade" id="newIssue" tabindex="-1" aria-labelledby="newIssue" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nuevo tiquete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/SC-502-Web-ClienteServidor/static/managment/tiquetes/create_tiquetes.php" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input name="subject" type="text" class="form-control" placeholder="Asunto" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="message" class="form-control"
                            placeholder="Por favor, detalla tu problema o pregunta" style="height: 120px;"
                            required></textarea>
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
<!-------------------------------------------------- FIN DE MODAL CREAR TIQUETE ------------------------------------------------>