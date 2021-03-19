<?php
//Para array por parametros y utilizar como varialbes independientes en función

class Persona {
    $idIdentificacion=null;
    $idVerificador=null;


    function setIdIdentificacion($idIdentificacion = null){
        $this->idIdentificacion=$idIdentificacion;      
    }
    function setIdVerificador($idVerificador = null){
        $this->idVerificador=$idVerificador;      
    }   
    function getIdIdentificacion($idIdentificacion = null){
        return $this->idIdentificacion;      
    }
    function getIdVerificador($idVerificador = null){
        return $this->idVerificador;      
    }

    function agregar() {
        $Persona = new Persona();
        $Persona->setIdIdentificacion('22');
        $Persona->setVerificador('9');
        $this->save(Persona);

        $datos['numeros'] = $Persona->getIdIdentificacion();
        $datos['guion'] = "-";
        $datos['verificador'] = $Persona->getIdVerificador; 
        mostrar($datos);

    }

    function mostrar($datos){
        extract($datos);
        echo "El Rut simple es: $numeros$guion$verificador ";
    }


}

?>
