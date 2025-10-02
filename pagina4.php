
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #1861af;
      overflow-x: hidden;
      position: relative;
      color: black;
    }

    .container {
      padding: 20px;
      position: relative;
      z-index: 2;
    }

    .top-images {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .top-images .box {
      width: 33.33%;
      height: 200px;
      border: 1px solid #ccc;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 18px;
    }

    .top-images .box img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .menu-horizontal {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin: 20px 0;
      position: relative;
      z-index: 2;
    }

    .menu-horizontal a {
      padding: 10px 20px;
      background-color: green;
      color: white;
      text-decoration: none;
      font-weight: bold;
      text-align: center;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .raindrop-container {
      position: fixed;
      top: 140px;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
    }

    .raindrop {
      position: absolute;
      width: 5px;
      height: 15px;
      background-color: #00bfff;
      opacity: 0.7;
      border-radius: 50%;
      animation: fall 2s linear infinite;
    }

    @keyframes fall {
      0% {
        transform: translateY(0);
        opacity: 0.8;
      }
      100% {
        transform: translateY(600px);
        opacity: 0;
      }
    }

    .text-floating-section {
      margin-top: 60px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      position: relative;
      z-index: 2;
    }

    .text-floating-section input[type="text"] {
      background: transparent;
      border: none;
      border-bottom: 2px solid rgba(255, 255, 255, 0.3);
      color: black;
      font-size: 28px;
      outline: none;
      padding: 5px 10px;
      width: 100%;
      font-weight: bold;
    }

    .text-floating-section input[type="text"]::placeholder {
      color: rgba(0, 0, 0, 0.5);
      font-size: 24px;
    }
  </style>
</head>
<body>
  <div class="raindrop-container" id="raindrops"></div>

  <div class="container">
    <!-- Parte superior -->
    <div class="top-images">
      <div class="box"><img src="dibujocarwash.jpg" alt="dibujocarwash.jpg"></div>
      <div class="box"><img src="logo.png" alt="Logo"></div>
      <div class="box"><img src="esloganx" alt="Eslogan"></div>
    </div>

    <!-- Menú de navegación -->
    <div class="menu-horizontal">
      <a href="inicio1.php">Inicio</a>
      <a href="pagina1.php">Pag1</a>
      <a href="pagina2.php">Pag2</a>
      <a href="pagina3.php">Pag3</a>
      <a href="pagina4.php">Pag4</a>
    </div>

    <!-- Texto flotante sobre el fondo -->
    <div class="text-floating-section">
      <input type="text" placeholder="red sopcial">
      <input type="text" placeholder="iNSTAGRAM : @willyclean   ">
      <input type="text" placeholder="FACEBOOK: willycleanfk">
      <input type="text" placeholder="NUIMERO: 664 367 3899    ">
      <input type="text" placeholder="CORREO: willycleansoporte@gmail.com" >

    </div>
  </div>

  <script>
    const container = document.getElementById('raindrops');
    for (let i = 0; i < 60; i++) {
      const drop = document.createElement('div');
      drop.classList.add('raindrop');
      drop.style.left = Math.random() * window.innerWidth + 'px';
      drop.style.animationDelay = Math.random() * 3 + 's';
      drop.style.animationDuration = (1.5 + Math.random()) + 's';
      container.appendChild(drop);
    }
  </script>
</body>
</html>
