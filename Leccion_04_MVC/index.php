<?php
//requiere() hace la importacion de otros archivos PHP, es como usar un include, import, o using
//requiere_once() solo activa una vez el archivo, es como un singleton y evita el uso excesivo de variables
require_once "./Controller/Controller.php";
//la siguiente inclusion es solo por si acaso otros controladores lo requieran
require_once "./Model/model.php";

$mvc = new MVC_Controller();
$mvc->template();
