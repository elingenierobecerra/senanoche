<?php
class Producto{
    private $codigo;
    private $descripcion;
    private $cantidad;
    private $referencia;
    private $disponible;

    public function __construct($codigo,$descripcion,$cantidad,$referencia,$disponible){
        $this->codigo       = $codigo;
        $this->descripcion  = $descripcion;
        $this->cantidad     = $cantidad;
        $this->referencia   = $referencia;
        $this->disponible   = $disponible;
    }
    public function getCodigo(){
        return $this -> codigo;
    }
    public function getDescripcion(){
        return $this -> descripcion;
    }
    public function getCantidad(){
        return $this -> cantidad;
    }
    public function getReferencia(){
        return $this -> referencia;
    }
    public function getDisponible(){
        return $this -> disponible;
    }

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
    public function setDescripcion($descripcion){
        $this -> descripcion = $descripcion;
    }
    public function setCantidad($cantidad){
        $this -> cantidad = $cantidad;
    }
    public function setReferencia($referencia){
        $this -> referencia = $referencia;
    }
    public function setDisponible($disponible){
        $this -> disponible = $disponible;
    }

}
?>