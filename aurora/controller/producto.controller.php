<?php
    class ControllerProducto{
        public function ctrInsertarProducto( 
            $descripcion,
            $cantidad,
            $referencia,
            $disponible
        ){
            $objDtoProducto = new Producto(null, $descripcion, $cantidad, $referencia, $disponible );
            $objDaoProducto = new ModelProducto ( $objDtoProducto );
            if ( $objDaoProducto -> mdlInsertarProducto() ) {
                echo "Producto insertado";
            } else {
                echo "Ha ocurrido un error";
            }
        }
    }
?>