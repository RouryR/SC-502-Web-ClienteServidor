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
function loadEditForm(empresa) {
    document.getElementById('editEmpresaId').value = empresa.id;
    document.getElementById('editNombre').value = empresa.nombre;
    document.getElementById('editCorreo').value = empresa.correo;
    document.getElementById('editTelefono').value = empresa.telefono;
    document.getElementById('editImagen').value = empresa.imagen;
}

//Para editar el usuarios
function loadEditForm(usuario) {
    console.log(usuario);
    document.getElementById('editUsuarioId2').value = usuario.id;
    document.getElementById('editCorreo2').value = usuario.correo;
    document.getElementById('editTelefono2').value = usuario.telefono;
    document.getElementById('editDireccion2').value = usuario.direccion;
    document.getElementById('editImagen2').value = usuario.imagen;
}

//Para ver el tiquete pending
function showDetailPending(id, title, description) {
    document.getElementById('ticketId').innerText = id;
    document.getElementById('ticketTitle').innerText = title;
    document.getElementById('ticketDescription').innerText = description;
}


