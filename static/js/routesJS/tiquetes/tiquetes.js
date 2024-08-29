//Para eliminar el tiquete
function confirmDeletion(tiqueteId) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esta acción1111.",
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

//Para ver el tiquete
function showDetail(title, description, response) {
    document.getElementById('issueTitle').innerText = title;
    document.getElementById('issueDescription').innerText = description;
    document.getElementById('issueResponse').innerText = response;
}
//Para editar el tiquete
function loadEditForm(tiquete) {
    document.getElementById('editTiqueteId').value = tiquete.id_tiquete;
    document.getElementById('editTitulo').value = tiquete.titulo;
    document.getElementById('editDescripcion').value = tiquete.descripcion;
}

//Para ver el tiquete pending
function showDetailPending(id, title, description) {
    document.getElementById('ticketId').innerText = id;
    document.getElementById('ticketTitle').innerText = title;
    document.getElementById('ticketDescription').innerText = description;
}


