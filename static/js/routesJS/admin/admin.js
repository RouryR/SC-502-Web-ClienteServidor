//Para eliminar el tiquete
function confirmDeletion(tiqueteId) {
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
            document.getElementById('delete-form-' + tiqueteId).submit();
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
    console.log(usuario);
    document.getElementById('editUsuarioId').value = usuario.id;
    document.getElementById('editCorreoUsuario').value = usuario.correo;
    document.getElementById('editTelefonoUsuario').value = usuario.telefono;
    document.getElementById('editDireccionUsuario').value = usuario.direccion;
    document.getElementById('editImagenUsuario').value = usuario.imagen;
    document.getElementById('editImagenPreview').src = usuario.imagen;
}


//Para ver el tiquete pending
function showDetailPending(id, title, description) {
    document.getElementById('ticketId').innerText = id;
    document.getElementById('ticketTitle').innerText = title;
    document.getElementById('ticketDescription').innerText = description;
}


