<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
 <?php
//Clase Padre//
class Operacion {
    //Atributos de clase//
    protected $valor1;
    protected $valor2;
    protected $resultado;

    //Métodos de clase//
    public function cargar1 ($v){
        $this->valor1=$v;
    }
    public function cargar2 ($v){
        $this->valor2=$v;
    }
    public function imprimirResultado (){
        echo $this->resultado. "<br>";
    }
}
    //Clase hija//
    class Suma extends Operacion{
        //Métodos de clase//
        public function operar()
        {
          $this->resultado=$this->valor1+$this->valor2;
        }
      }
      //Clase hija//
      class Resta extends Operacion{
          //Métodos de clase//
        public function operar()
        {
          $this->resultado=$this->valor1-$this->valor2;
        }
      }
      //Creación e inicialización de objetos//
      $suma=new Suma();
      $suma->cargar1(10);
      $suma->cargar2(10);
      $suma->operar();
      echo 'El resultado de la suma de 10+10 es:';
      $suma->imprimirResultado();
      $resta=new Resta();
      $resta->cargar1(10);
      $resta->cargar2(5);
      $resta->operar();
      echo 'El resultado de la diferencia de 10-5 es:';
      $resta->imprimirResultado();
      

?>

</body>
</html>