<?php

class Link_Pages
{
    public static function link_pages_model($link)
    {
        if (
            $link == "register" ||
            $link == "introduce" ||
            $link == "user" ||
            $link == "exit"
        ) {
            $module = "./View/Modules/" . $link . ".php";
        } else if ($link == "register") {
            $module = "./View/Modules/register.php";
        } else {
            $module = "./View/Modules/register.php";
        }
        return $module;
    }
}
