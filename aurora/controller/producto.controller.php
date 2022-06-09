<?php
    class ControllerProducto{
        public function ctrInsertarProducto( $descripcion,$cantidad,$referencia,$disponible){
            $objDtoProducto = new Producto(null, $descripcion, $cantidad, $referencia, $disponible );
            $objDaoProducto = new ModelProducto ( $objDtoProducto );
            if ( $objDaoProducto -> mdlInsertarProducto() ) {
                echo "<script>
                    Swal.fire(
                        'Producto',
                        'El producto ha sido ingresado',
                        'success'
                    );
                    </script>
                ";
            } else {
                echo "Ha ocurrido un error";
            }
        }
        public function ctrListarProducto(){
            $array = false;
            try {

                $objDtoProducto = new Producto(null, null, null, null, null );
                $objDaoProducto = new ModelProducto ( $objDtoProducto );            
                $array = $objDaoProducto -> mdlListarProducto() -> fetchAll();

            } catch (PDOException $e) {
                echo "Error en el controlador" . $e ->getMessage();    
            }
            return $array;
        }
    }
?>