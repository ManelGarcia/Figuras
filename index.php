<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Figuras Geometricas</title>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-center">            
            <div class='cuadrado col'>
                <form method="post" action="./forma.php">
                    <label for="tipoFigura" style="color:white;">FORMA</label>
                    <select name="tipoFigura" id="tipoFigura" onchange='forma()'>
                        <option value="Triangulo">△</option>
                        <option value="Circulo">〇</option>
                        <option value="Cuadrado">▢</option>
                        <option value="Rectangulo">▯</option>
                    </select>
                </form>
            </div> 
            <div id='segundo' class='cuadrado col'>

            </div>
            <div id='tercero' class='cuadrado col'>

            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>