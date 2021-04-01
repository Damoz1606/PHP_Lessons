<?php

class MVC_Link
{
    public static function get_link($link)
    {
        //Lista Blanca
        if (
            $link == "inicio" ||
            $link == "registro" ||
            $link == "ingreso"
        ) {
            $module = "./View/templates/" . $link . ".php";
        } else {
            $module = "./View/templates/404.php";
        }
        return $module;
        //$link == "salir"
    }
}
