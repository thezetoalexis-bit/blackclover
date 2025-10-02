

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ingreso</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
      background-color: #cceeff; /* azul claro */
      overflow: hidden;
      position: relative;
    }

    /* Gotas animadas */
    .drop {
      position: absolute;
      top: -20px;
      width: 10px;
      height: 10px;
      background: rgba(0, 153, 255, 0.5);
      border-radius: 50%;
      animation: fall 2.5s linear infinite;
      z-index: 0;
    }

    @keyframes fall {
      to {
        transform: translateY(110vh);
        opacity: 0;
      }
    }

    .drops-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 0;
    }

    .top-bar {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 40px;
      padding: 40px 20px 20px;
      position: relative;
      z-index: 1;
    }

    .top-box {
      width: 220px;
      height: 220px;
      border: 2px solid #999;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 20px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .top-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }

    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
      position: relative;
      z-index: 1;
    }

    form {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 35px 30px;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      width: 320px;
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 10px;
      font-size: 16px;
      border: 1px solid #aaa;
      border-radius: 5px;
      background: transparent;
      outline: none;
    }

    .form-group label {
      position: absolute;
      top: 12px;
      left: 10px;
      color: #666;
      pointer-events: none;
      transition: 0.3s ease all;
      background-color: white;
      padding: 0 5px;
    }

    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label {
      top: -10px;
      font-size: 12px;
      color: #0099ff;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #0099ff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #007acc;
    }
  </style>
</head>
<body>

  <!-- Gotas animadas -->
  <div class="drops-container">
    <div class="drop" style="left: 10%; animation-delay: 0s;"></div>
    <div class="drop" style="left: 25%; animation-delay: 0.5s;"></div>
    <div class="drop" style="left: 40%; animation-delay: 1s;"></div>
    <div class="drop" style="left: 60%; animation-delay: 0.3s;"></div>
    <div class="drop" style="left: 75%; animation-delay: 0.7s;"></div>
    <div class="drop" style="left: 90%; animation-delay: 1.2s;"></div>
  </div>

  <!-- Parte superior: círculos con imágenes -->
  <div class="top-bar">
    <div class="top-box"><img src="dibujocarwash.jpg" alt="dibujocarwash.jpg"></div>
    <div class="top-box"><img src="logocarwash.jpg" alt="logocarwash.jpg"></div>
    <div class="top-box"><img src="img/eslogan.jpg" alt="Eslogan"></div>
  </div>

  <!-- Formulario de ingreso -->
  <div class="form-container">
    <form onsubmit="return redirectToSecondaryPage(event)">
      <div class="form-group">
        <input type="email" id="email" placeholder=" " required>
        <label for="email">Correo electrónico</label>
      </div>
      <div class="form-group">
        <input type="password" id="password" placeholder=" " required>
        <label for="password">Clave</label>
      </div>
      <button type="submit">Entrar</button>
    </form>
  </div>

  <script>
    function redirectToSecondaryPage(event) {
      event.preventDefault(); // Evita recarga
      // Aquí puedes validar si deseas
      window.location.href = "pagina1.php"
      return false;
    }
  </script>

</body>
</html>