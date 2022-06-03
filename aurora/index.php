<?php
    /* CONTROLLERS */
    require_once "controller/plantilla.controller.php";
    require_once "controller/conexion.controller.php";
    require_once "controller/producto.controller.php";
    /* MODELS */
    require_once "model/conexion.php";
    require_once "model/dao/conexion.dao.php";
    require_once "model/dao/producto.dao.php";
    require_once "model/dto/producto.dto.php";

    /* CREAR UN OBJETO DE ARRANQUE */
    $objPlantilla = new PlantillaControler();
    $objPlantilla -> ctrPlantilla();
?>