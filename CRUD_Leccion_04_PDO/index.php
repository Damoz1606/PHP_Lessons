<?php
//Salidas de la vista al usuario
//Envia las distintas accionar que el usuario envie al controlador

require_once "./Controller/Controller.php";
require_once "./Model/model.php";
require_once "./Controller/Form_Controller.php";
require_once "./Model/form_model.php";

$mvc = new MVC_Controller();
$mvc->get_template();
