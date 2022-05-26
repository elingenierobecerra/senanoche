<?php
    require_once "view/module/header.php";
    require_once "view/module/menu.php";
    if (isset($_GET['ruta'])){
        switch ($_GET['ruta']) {
            case 'producto':
                require_once "view/module/producto.php";
                break;
            case 'proveedor':
                require_once "view/module/proveedor.php";
                break;
            case 'usuario':
                require_once "view/module/usuario.php";
                break;
            default:
                require_once "view/module/presentation.php";
                break;
        }
    }else{
        require_once "view/module/presentation.php";
    }
    require_once "view/module/footer.php";
?>
