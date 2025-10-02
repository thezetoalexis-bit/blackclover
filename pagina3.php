

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
      overflow: hidden;
    }

    .top-images .box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
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
      display: flex;
      justify-content: center;
    }

    .big-box {
      width: 80%;
      height: 400px;
      background-color: white;
      border: 1px solid #aaa;
      padding: 20px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
    }

    .big-box label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .big-box input[type="text"] {
      padding: 10px;
      font-size: 16px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .big-box textarea {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      resize: none;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Parte superior -->
    <div class="top-images">
      <div class="box"><img src="dibujocarwash.jpg" alt="dibujocarwash.jpg"></div>
      <div class="box"><img src="logocarwash.jpg" alt="logocarwash.jpg"></div>
      <div class="box"><img src="eslogan.jpg" alt="Eslogan"></div>
    </div>

    <!-- Menú de navegación -->
    <div class="menu-horizontal">
      <a href="pagina1.php">Pag1</a>
      <a href="pagina2.php">Pag2</a>
      <a href="pagina3.php">Pag3</a>
      <a href="pagina4.php">Pag4</a>
    </div>

    <!-- Sección inferior con cuadro grande -->
    <div class="blue-section">
      <div class="big-box">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" placeholder="Escribe la dirección aquí">
        <textarea placeholder="Escribe más información aquí..."></textarea>
      </div>
    </div>
  </div>
</body>
</html>