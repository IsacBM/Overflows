document.addEventListener('DOMContentLoaded', (event) => {
    const togglePassword = document.querySelector('#button-addon2');
    const password = document.querySelector('#password');
    const icon = document.querySelector('#togglePasswordIcon');

    togglePassword.addEventListener('click', function () {
        // Alternar o tipo de input entre password e text
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Alternar o ícone do botão
        if (type === 'password') {
            icon.classList.remove('bi-eye-slash-fill');
            icon.classList.add('bi-eye-fill');
        } else {
            icon.classList.remove('bi-eye-fill');
            icon.classList.add('bi-eye-slash-fill');
        }
    });
});