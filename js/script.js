var xhr = new XMLHttpRequest();
var xhr2 = new XMLHttpRequest();

function forma() {
    var form = document.getElementById('tipoFigura').value;

    xhr.open('POST', './forma.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('tipoFigura=' + encodeURIComponent(form));
}

xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var segundo = document.getElementById('segundo');
        segundo.innerHTML = xhr.responseText;
    }
};

function resultado() {
    var form = document.getElementById('tipoFigura').value;

    xhr2.open('POST', './resultado.php', true);
    xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    var dato1 = document.getElementById('dato1').value;
    var dato2 = document.getElementById('dato2') ? document.getElementById('dato2').value : '';
    var dato3 = document.getElementById('dato3') ? document.getElementById('dato3').value : '';
    
    if (form == 'Triangulo') {
        xhr2.send('tipoFigura=' + encodeURIComponent(form) + '&dato1=' + encodeURIComponent(dato1) + '&dato2=' + encodeURIComponent(dato2) + '&dato3=' + encodeURIComponent(dato3));
    } else if (form == 'Circulo') {
        xhr2.send('tipoFigura=' + encodeURIComponent(form) + '&dato1=' + encodeURIComponent(dato1));
    } else if (form == 'Cuadrado') {
        xhr2.send('tipoFigura=' + encodeURIComponent(form) + '&dato1=' + encodeURIComponent(dato1));
    } else {
        xhr2.send('tipoFigura=' + encodeURIComponent(form) + '&dato1=' + encodeURIComponent(dato1) + '&dato2=' + encodeURIComponent(dato2));
    }
}


xhr2.onreadystatechange = function () {
    if (xhr2.readyState === 4 && xhr2.status === 200) {
        var tercero = document.getElementById('tercero');

        tercero.innerHTML = xhr2.responseText;
        alert();
    }
};

function alert() {
    Swal.fire({
        icon: "success",
        position: "top-end",
        html: "Valores de forma calculados",
        showConfirmButton: false,
        timer: 1200,
      });
}

