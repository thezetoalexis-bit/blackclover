<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }

    .container {
      padding: 20px;
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

    .blue-section {
      background-color: #1861af;
      padding: 20px;
    }

    .package-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .package-box, .appointment-box {
      width: 23%;
      height: 300px;
      background-color: white;
      border: 1px solid #aaa;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }

    .price {
      margin-top: 10px;
      font-size: 16px;
      font-weight: normal;
    }

    .appointment-box input[type="text"] {
      margin-top: 15px;
      padding: 8px;
      width: 90%;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Parte superior -->
    <div class="top-images">
      <div class="box">Dibujo</div>
      <div class="box"><img src="logo.png" alt="Logo"></div>
      <div class="box">Eslogan</div>
    </div>

   <div class="menu-horizontal">
      <a href="inicio1.php"/a>
      <a href="pagina1.php">pag1</a>
      <a href="pagina2.php">Pag2</a>
      <a href="pagina3.php">Pag3</a>
      <a href="pagina4.php">Pag4</a>

   </div>

    <!-- Parte inferior en azul -->
    <div class="blue-section">
      <!-- Contenedor de paquetes y agendar cita -->
      <div class="package-container">
        <div class="package-box">
          Paquete A
          <div class="price">$300</div>
        </div>
        <div class="package-box">
          Paquete B
          <div class="price">$200</div>
        </div>
        <div class="package-box">
          Paquete C
          <div class="price">$150</div>
        </div>
        <div class="appointment-box">
          Agendar Cita
          <input type="text" placeholder="Escribe tu nombre o fecha...">
        </div>
      </div>
    </div>
  </div>
</body>
</html>