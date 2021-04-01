<?php

class MVC_Controller
{
    public function get_template()
    {
        include "./View/template.php";
    }

    public function get_page()
    {
        if (isset($_GET["action"])) {
            $link = $_GET["action"];
        } else {
            $link = "inicio";
        }
        $response = MVC_Link::get_link($link);
        include $response;
    }
}
