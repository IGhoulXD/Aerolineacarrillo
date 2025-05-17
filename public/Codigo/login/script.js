// LOGIN
const loginForm = document.getElementById('loginForm');
if (loginForm) {
  loginForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const usuarioIngresado = document.getElementById('loginUsuario').value;
    const passwordIngresado = document.getElementById('loginPassword').value;

    const usuarioGuardado = localStorage.getItem('usuario');
    const passwordGuardada = localStorage.getItem('password');

    if (usuarioIngresado === usuarioGuardado && passwordIngresado === passwordGuardada) {
      alert('Inicio de sesión exitoso');
      // Activamos la sesión
      localStorage.setItem('sesionActiva', 'true');
      window.location.href = 'a.html';
    } else {
      alert('Usuario o contraseña incorrectos');
    }
  });
}
