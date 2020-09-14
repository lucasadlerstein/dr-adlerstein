eventListeners();

function eventListeners() {
    document.querySelector('#contacto-inicio').addEventListener('submit', formEnviado);
}

function formEnviado(e) {
    e.preventDefault();

    var nombre = document.querySelector('#nombre').value,
        apellido = document.querySelector('#apellido').value,
        email = document.querySelector('#email').value,
        telefono = document.querySelector('#telefono').value,
        mensaje = document.querySelector('#mensaje').value;

    if (nombre == '' || apellido == '' || email == '' || telefono == '' || mensaje == '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Todos los campos son obligatorios'
        })
    } else {
        // Esta ok para enviar
        var datos = new FormData();
        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('email', email);
        datos.append('telefono', telefono);
        datos.append('mensaje', mensaje);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/form.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);

                if (respuesta.respuesta === 'enviado') {
                    swal.fire({
                            title: 'Mensaje enviado',
                            text: 'Nos pondremos en contacto a la brevedad',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1300
                        })
                        .then(resultado => {
                            window.location.href = 'index.php';
                        });
                } else if (respuesta.respuesta === 'error') {
                    swal.fire({
                        title: 'Error',
                        text: 'No pudimos enviar el mensaje',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1300
                    });
                }
            }
        }
        xhr.send(datos);
    }

}