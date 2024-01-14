<?php

abstract class FiguraGeometrica {
    protected $tipoFigura;
    protected $dato1;

    public function __construct($tipoFigura, $dato1) {
        $this->tipoFigura = $tipoFigura;
        $this->dato1 = $dato1;
    }

    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function getDato1() {
        return $this->dato1;
    }

    public function setDato1($dato1) {
        $this->dato1 = $dato1;
    }

    abstract public function area();

    public function __destruct() {
        // echo "Objeto de tipo {$this->tipoFigura} destruido";
    }
}

interface PerimetroM {
    public function perimetro();
}

class Triangulo extends FiguraGeometrica implements PerimetroM {
    protected $dato2;
    protected $dato3;

    public function __construct($dato1, $dato2, $dato3) {
        parent::__construct("Triángulo", $dato1);
        $this->dato2 = $dato2;
        $this->dato3 = $dato3;
    }

    public function getdato2() {
        return $this->dato2;
    }

    public function setdato2($dato2) {
        $this->dato2 = $dato2;
    }

    public function getdato3() {
        return $this->dato3;
    }

    public function setdato3($dato3) {
        $this->dato3 = $dato3;
    }

    public function area() {
        $s = ($this->dato1 + $this->dato2 + $this->dato3) / 2;
        return sqrt($s * ($s - $this->dato1) * ($s - $this->dato2) * ($s - $this->dato3));
    }

    public function perimetro() {
        return $this->dato1 + $this->dato2 + $this->dato3;
    }

    public function __toString() {
        return "<li>Tipo de figura: {$this->tipoFigura}</li><li>Lado1: {$this->dato1}</li><li>Lado2: {$this->dato2}</li><li>Lado3: {$this->dato3}</li><li>Área: {$this->area()}</li><li>Perímetro: {$this->perimetro()}";
    }

}

class Rectangulo extends FiguraGeometrica implements PerimetroM {
    protected $dato2;

    public function __construct($dato1, $dato2) {
        parent::__construct("Rectángulo", $dato1);
        $this->dato2 = $dato2;
    }

    public function getdato2() {
        return $this->dato2;
    }

    public function setdato2($dato2) {
        $this->dato2 = $dato2;
    }

    public function area() {
        return $this->dato1 * $this->dato2;
    }

    public function perimetro() {
        return 2 * ($this->dato1 + $this->dato2);
    }

    public function __toString() {
        return "<li>Tipo de figura: {$this->tipoFigura}</li><li>Lado1: {$this->dato1}</li><li>Lado2: {$this->dato2}</li><li>Área: {$this->area()}</li><li>Perímetro: {$this->perimetro()}";
    }
}

class Cuadrado extends FiguraGeometrica implements PerimetroM {
    public function __construct($dato1) {
        parent::__construct("Cuadrado", $dato1);
    }

    public function getdato2() {
        return $this->dato1;
    }

    public function setdato2($dato) {
        $this->dato1 = $dato1;
    }

    public function area() {
        return $this->dato1 * $this->dato1;
    }

    public function perimetro() {
        return 4 * $this->dato1;
    }

    public function __toString() {
        return "<li>Tipo de figura: {$this->tipoFigura}</li><li>Lados: {$this->dato1}</li><li>Área: {$this->area()}</li><li>Perímetro: {$this->perimetro()}";
    }
}


class Circulo extends FiguraGeometrica implements PerimetroM {
    public function __construct($radio) {
        parent::__construct("Círculo", $radio);
    }

    public function area() {
        return M_PI * $this->dato1 * $this->dato1;
    }

    public function perimetro() {
        return 2 * M_PI * $this->dato1;
    }

    public function __toString() {
        return "<li>Tipo de figura: {$this->tipoFigura}</li><li>Radio: {$this->dato1}</li><li>Área: {$this->area()}</li><li>Circunferencia: {$this->perimetro()}";
    }
}



$tipoFigura = $_POST["tipoFigura"];
$dato1 = floatval($_POST["dato1"]);
$resultado = null;


if ($tipoFigura == "Triangulo") {
    $dato2 = floatval($_POST["dato2"]);
    $dato3 = floatval($_POST["dato3"]);
    $figura = new Triangulo($dato1, $dato2, $dato3);
} elseif ($tipoFigura == "Cuadrado") {
    $figura = new Cuadrado($dato1);
} elseif ($tipoFigura == "Rectangulo") {
    $dato2 = floatval($_POST["dato2"]);
    $figura = new Rectangulo($dato1, $dato2);
} else {
    $figura = new Circulo($dato1);

}


// $resultado = [
//     'tipoFigura' => $figura->getTipoFigura(),
//     'dato1' => $figura->getdato1(),
//     'dato2' => method_exists($figura, 'getdato2') ? $figura->getdato2() : null,
//     'dato3' => method_exists($figura, 'getdato3') ? $figura->getdato3() : null,
//     'area' => $figura->area(),
//     'perimetro' => method_exists($figura, 'perimetro') ? $figura->perimetro() : null,
// ];

echo "<pre>";
echo "<ul>";
echo $figura;
echo "</ul>";
echo "</pre>";


?>
