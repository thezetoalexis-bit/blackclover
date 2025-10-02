



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      height: 220px;
      border: 1px solid #ccc;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      overflow: hidden;
    }

    .top-images .box img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Llena todo el cuadro */
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

    .package-boxes {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .package-box {
      width: 32%;
      height: 340px;
      background-color: white;
      border: 1px solid #aaa;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      overflow: hidden;
    }

    .package-box img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Llena todo el cuadro */
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Parte superior -->
    <div class="top-images">
      <div class="box">
        <img src="imagenes/dibujo.jpg" alt="Dibujo">
        Dibujo
      </div>
      <div class="box">
        <img src="imagenes/logo.png" alt="Logo">
        Logo
      </div>
      <div class="box">
        <img src="imagenes/eslogan.jpg" alt="Eslogan">
        Eslogan
      </div>
    </div>

    <!-- Menú de navegación -->
    <div class="menu-horizontal">
      <a href="pagina2.php">Pag2</a>
      <a href="pagina3.php">Pag3</a>
      <a href="pag4.php">Pag4</a>
      <a href="pag5.php">Pag5</a>
    </div>

    <!-- Sección inferior -->
    <div class="blue-section">
      <div class="package-boxes">
        <div class="package-box">
          <img src="imagenes/paquete-a.jpg" alt="Paquete A">
          Paquete A
        </div>
        <div class="package-box">
          <img src="imagenes/paquete-b.jpg" alt="Paquete B">
          Paquete B
        </div>
        <div class="package-box">
          <img src="imagenes/paquete-c.jpg" alt="Paquete C">
          Paquete C
        </div>
      </div>
    </div>
  </div>
</body>
</html>