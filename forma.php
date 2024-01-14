<?php 
    echo "<form method='post' action=''>";
    if (isset($_POST['tipoFigura'])) {
        if ($_POST['tipoFigura'] == 'Triangulo') {
            echo "<p style='color:white;'>TRIANGULO</p>
                    <label for='dato1' style='color:white;'>Lado 1</label>
                    <input type='number' name='dato1' id='dato1' required>
                    <br>
                    <label for='dato2' style='color:white;'>Lado 2</label>
                    <input type='number' name='dato2' id='dato2' required>
                    <br>
                    <label for='dato3' style='color:white;'>Lado 3</label>
                    <input type='number' name='dato3' id='dato3' required>";
        }  elseif ($_POST['tipoFigura'] == 'Circulo')  {
            echo "<p style='color:white;'>CIRCULO</p>
                    <label for='dato1' style='color:white;'>Radio</label>
                    <input type='number' name='dato1' id='dato1' required>";
        } elseif ($_POST['tipoFigura'] == 'Rectangulo') {
            echo "<p style='color:white;'>RECTANGULO</p>
                    <label for='dato1' style='color:white;'>Lado 1</label>
                    <input type='number' name='dato1' id='dato1' required>
                    <br>
                    <label for='dato2' style='color:white;'>Lado 2</label>
                    <input type='number' name='dato2' id='dato2' required>";
        } else {
            echo "<p style='color:white;'>CUADRADO</p>
                    <label for='dato1' style='color:white;'>Lado 1</label>
                    <input type='number' name='dato1' id='dato1' required>";
        }
    } else {
        header('Location: ./');
    }

    echo "<br><br>
            <input type='hidden' name='tipoFigura' value='" . $_POST['tipoFigura'] . "'>
            <input type='button' onclick='resultado()' value='Calcular'>
          </form>";
?>
