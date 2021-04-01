<?php

class Form_Controller
{
    static public function sign_up()
    {
        if (isset($_POST["name_input_register"])) {
            // echo $_POST["name_input_register"];
            return true;
        }
    }
}
