Livewire.on('manipularRegistro', function (title, button, metodo, id) {
    Swal.fire({
        title: title,
        text: "Esta accion ya no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: button,
        cancelButtonText: 'Cancelar!'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit(metodo, id)
        }
    });
})
