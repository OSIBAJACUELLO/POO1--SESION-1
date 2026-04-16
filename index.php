<?php

class coche{
//variables(atributos)
public $marca;
public $modelo;
public $color;
public $tipo;
public $puertas;
public $cilindro;
public $kilometraje;

public $movimiento;
wefwff
public $encendido;

public function __construct($marca,$modelo,$color,$tipo,$puertas,$cilindro,$kilometraje,$encendido,$movimiento)
{
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->color=$color;
    $this->tipo=$tipo;
    $this->puertas=$puertas;
    $this->cilindro=$cilindro;
    $this->kilometraje=$kilometraje;
    $this->encendido=$encendido;
    $this->movimiento=$movimiento;

}

public function encender(){
$this->encendido=true;
return "Coche encendido";
}

public function marchar(){
$this->movimiento=true;
return "coche en movimiento";
}

}
//$marca,$modelo,$color,$tipo,$puertas,$cilindro,$kilometraje,$encendido,$movimiento
$coche1 = new coche("ford",2020,"negro","camioneta","4 puertas",1.6,0,false,false);
$coche2 = new coche("chevrolet",2021,"negro","camioneta","4 puertas",1.6,0,false,false);
$coche3 = new coche("Logan",2022,"negro","camioneta","4 puertas",1.6,0,false,false);
$coche4 = new coche("Volkswagen",2023,"negro","camioneta","4 puertas",1.6,0,false,false);
$coche5 = new coche("Toyota",2024,"negro","camioneta","4 puertas",1.6,0,false,false);

echo $coche1->encender();
echo "<br>";
echo $coche2->marchar();
?>