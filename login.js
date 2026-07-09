  document.querySelector('.form-login button').addEventListener('click', (e) => {
        e.preventDefault();
        
        const email = document.querySelector('input[type="email"]').value;
        const senha = document.querySelector('input[type="password"]').value;

        if (email && senha) {
            localStorage.setItem('usuario', email);
            
            const params = new URLSearchParams(window.location.search);
            const redirect = params.get('redirect');
            
            if (redirect) {
                window.location.href = redirect;
            } else {
                window.location.href = 'index.php';
            }
        } else {
            alert('Preencha email e senha!');
        }
        });