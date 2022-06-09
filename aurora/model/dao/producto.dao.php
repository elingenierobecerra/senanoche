<?php
    class ModelProducto{
        
        private $codigo;
        private $descripcion;
        private $cantidad;
        private $referencia;
        private $disponible;
        private $estado;

        public function __construct($objDtoProducto){
            $this->codigo       = $objDtoProducto -> getCodigo();
            $this->descripcion  = $objDtoProducto -> getDescripcion();
            $this->cantidad     = $objDtoProducto -> getCantidad();
            $this->referencia   = $objDtoProducto -> getReferencia();
            $this->disponible   = $objDtoProducto -> getDisponible();
        }

        public function mdlInsertarProducto(){
            $sql = "CALL spInsertarProducto( ?, ?, ?, ? );";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->descripcion, PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this->cantidad,    PDO::PARAM_INT);
                $stmt -> bindParam ( 3, $this->referencia,  PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this->disponible,  PDO::PARAM_INT);
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao de producto " . $ex -> getMessage();
            }
            return $this -> estado;
        }//FIN DE INSERTAR PRODUCTO
        public function mdlListarProducto(){
            $sql = "CALL spListarProducto( );";
            $resultset = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
            } catch (PDOExcepcion $e) {
                echo "Error al consutlar el listar";
            }
            return $resultset;
        }
    }//FIN CLASE


?>