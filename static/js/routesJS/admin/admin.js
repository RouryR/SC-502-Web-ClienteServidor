function confirmDeletion(empresa_id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esta acción.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-formEmpresa-' + empresa_id).submit();
        }
    });
}

//Para eliminar el tiquete
function confirmDeletiondeleteUser(usuario_id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esta acción.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-formUser-' + usuario_id).submit();
        }
    });
}

//Para editar la empresa
function loadEditFormEmpresa(empresa) {
    document.getElementById('editEmpresaId').value = empresa.id;
    document.getElementById('editNombreEmpresa').value = empresa.nombre;
    document.getElementById('editCorreoEmpresa').value = empresa.correo;
    document.getElementById('editTelefonoEmpresa').value = empresa.telefono;
    document.getElementById('editImagenEmpresa').value = empresa.imagen;
    document.getElementById('editImagenPreviewEmpresa').src = empresa.imagen;
}



//Para editar el usuarios
function loadEditFormUsuario(usuario) {
    document.getElementById('editUsuarioId').value = usuario.id;
    document.getElementById('editCorreoUsuario').value = usuario.correo;
    document.getElementById('editTelefonoUsuario').value = usuario.telefono;
    document.getElementById('editDireccionUsuario').value = usuario.direccion;
    document.getElementById('editImagenUsuario').value = usuario.imagen;
    document.getElementById('editImagenPreview').src = usuario.imagen;
}

//Para editar el admin
function loadEditFormAdmin(usuario) {
    document.getElementById('editAdminId').value = usuario.usuario_id;
    document.getElementById('editCorreoAdmin').value = usuario.correo;
    document.getElementById('editTelefonoAdmin').value = usuario.telefono;
    document.getElementById('editDireccionAdmin').value = usuario.direccion;
    document.getElementById('editImagenAdmin').value = usuario.usuario_imagen;
    document.getElementById('editImagenPreviewAdmin').src = usuario.usuario_imagen;
}


//Para ver el tiquete pending
function showDetailPending(id, title, description) {
    document.getElementById('ticketId').innerText = id;
    document.getElementById('ticketTitle').innerText = title;
    document.getElementById('ticketDescription').innerText = description;
}

//Para editar el tiquete
function showDetailTiquete(tiquete) {
    console.log(tiquete);
    document.getElementById('editTiqueteId').value = tiquete.id_tiquete;
    document.getElementById('ticketDescription2').value = tiquete.descripcion;
}

//Para ver el tiquete
function showDetail(title, description, response, userImage) {
    document.getElementById('issueTitle').innerText = title;
    document.getElementById('issueDescription').innerText = description;
    document.getElementById('issueResponse').innerText = response;
    document.getElementById('userImage').src = userImage; 
}


//Para confirmar el tiquete contactenos
function confirmCompletion(tiqueteId_p) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esta acción.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Completar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('complete-form-' + tiqueteId_p).submit();
        }
    });
}
