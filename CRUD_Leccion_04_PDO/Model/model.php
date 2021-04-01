<?php

class MVC_Link
{
    public static function get_link($link)
    {
        //Lista Blanca
        if (
            $link == "inicio" ||
            $link == "registro" ||
            $link == "ingreso" ||
            $link ==  "edit"
        ) {
            $module = "./View/templates/" . $link . ".php";
        } else if ($link == "salir") {
            session_destroy();
            echo '<script type="text/javascript">
                window.location = "index.php?action=ingreso";
                </script>';
        } else {
            $module = "./View/templates/404.php";
        }
        return $module;
        //$link == "salir"
    }
}
