<?php
class JugadorTenis {
    // Atributos
    public $nombre;
    public $edad;
    public $colorCamiseta;
    public $colorShort;
    public $nivel;

    // Constructor
    public function __construct($nombre, $edad, $colorCamiseta, $colorShort, $nivel) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->colorCamiseta = $colorCamiseta;
        $this->colorShort = $colorShort;
        $this->nivel = $nivel;
    }

    // Métodos
    public function golpearPelota() {
        return "$this->nombre golpea la pelota con fuerza.";
    }

    public function correr() {
        return "$this->nombre corre hacia la pelota.";
    }

    public function servir() {
        return "$this->nombre hace un saque espectacular.";
    }

    public function mostrarEstilo() {
        return "$this->nombre viste con camiseta $this->colorCamiseta y short $this->colorShort.";
    }

    public function mostrarNivel() {
        return "$this->nombre tiene un nivel $this->nivel en tenis.";
    }
}

// Crear 3 objetos
$jugador1 = new JugadorTenis("Leo", 10, "verde", "naranja", "intermedio");
$jugador2 = new JugadorTenis("Sofi", 9, "azul", "gris", "principiante");
$jugador3 = new JugadorTenis("Max", 11, "roja", "negra", "avanzado");


// Imprimir 1 método del primer objeto
echo $jugador1->golpearPelota();
?>
