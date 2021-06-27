<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

//Clase Padre//
class Persona {
    //Atributos de clase//
    protected $nombre;
    protected $edad;

    //Métodos de clase//
    public function cargar ($nom,$year){
        $this->nombre=$nom;
        $this->edad=$year;
    }
    public function imprimirResultado (){
        echo "Nombre:" .$this->nombre. "<br>";
        echo "Edad:" .$this->edad. "<br>";
    }
}
    //Clase hija//
    class Empleado extends Persona{
        //añadimos atributo $sueldo dentro de la nueva clase//
        protected $sueldo;

        //Métodos de clase (cargar sueldo)//
        public function cargarSueldo($sue)
        {
          $this->sueldo=$sue;
        }
        //Métodos de clase (imprimir sueldo)//
        public function imprimirSueldo()
        {
           
            echo "Sueldo: " .$this->sueldo; "<br>";
        }

    //Métodos de clase//
     //Sobrescribimos el método imprimir de la class Persona//
        public function imprimirResultado (){

        echo "Nombre:" .$this->nombre. "<br>";
        echo "Edad:" .$this->edad. "<br>";
    
      }}
    
      //Creación e inicialización de objetos//
      $persona1=new Persona();
      $persona1->cargar("Jordi", 26);
      echo "Datos personales de la persona:<br>";
      $persona1->imprimirResultado();
      $empleado1=New Empleado();
      $empleado1->cargar ("Gerard", 27);
      $empleado1->cargarSueldo(1500);
      echo "Datos personales y sueldo del empleado:<br>";
      $empleado1->imprimirResultado();
      $empleado1->imprimirSueldo();
      
?>
    
</body>
</html>