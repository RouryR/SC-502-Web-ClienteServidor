//Para eliminar el empleado
function confirmDeletion(empleadoid) {
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
            document.getElementById('delete-form-' + empleadoid).submit();
        }
    });
}

function loadEditForm(empleado) {
    document.getElementById('editEmpleadoId').value = empleado.id_empleado;
    document.getElementById('editNombre').value = empleado.nombre_completo;
    document.getElementById('editCorreo').value = empleado.correo;
    document.getElementById('editPuesto').value = empleado.puesto;
    document.getElementById('editSalario').value = empleado.salario;
    document.getElementById('editTelefono').value = empleado.telefono;
}









