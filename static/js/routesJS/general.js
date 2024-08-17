document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        const emailInput = document.getElementById('exampleInputEmail1');
        const email = emailInput.value;
        const emailHelp = document.getElementById('emailHelp');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        emailHelp.textContent = 'No compartiremos  correo con terceros.';
        emailHelp.style.color = 'gray';

        if (!emailPattern.test(email)) {
            event.preventDefault();
            emailHelp.textContent = 'Por favor, ingresa un correo elctrónico válido.';
            emailHelp.style.color = 'red';
            emailInput.focus();
        } else {
            event.preventDefault();
            document.getElementById('user-name').innerText = email;
            var welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
            welcomeModal.show();
        }
    });
});

