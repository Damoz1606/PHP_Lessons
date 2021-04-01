<?php

class MVC_Controller
{
    //Call the template
    public function template()
    {
        include "View/template.php";
    }
    //User Interaction
    public function link_page_controller()
    {
        if (isset($_GET["action"])) {
            $link = $_GET["action"];
        } else {
            $link = "main_page";
        }
        $response = Link_Pages::link_pages_model($link);
        include $response;
    }
}
