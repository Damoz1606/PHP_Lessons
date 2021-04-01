<?php

class Link_Pages
{
    public static function link_pages_model($link)
    {
        if (
            $link == "main_page" ||
            $link == "contact" ||
            $link == "about_us" ||
            $link == "services"
        ) {
            $module = "./View/Modules/" . $link . ".php";
        } else if ($link == "main_page") {
            $module = "./View/Modules/main_page.php";
        } else {
            $module = "./View/Modules/main_page.php";
        }
        return $module;
    }
}
