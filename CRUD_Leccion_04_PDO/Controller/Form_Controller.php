<?php

class Form_Controller
{
    static public function sign_up()
    {
        if (isset($_POST["name_input_register"])) {
            // echo $_POST["name_input_register"];
            $table = "registros";
            $data = array(
                "user" => $_POST["name_input_register"],
                "email" => $_POST["email_input_register"],
                "password" => $_POST["pwd_input_register"]
            );
            $response = ModelForm::mdlSign_up($table, $data);
            return $response;
        }
    }

    static public function select($column, $value)
    {
        $table = "registros";
        $response = ModelForm::ctrSelect($table, $column, $value);
        return $response;
    }

    public function sign_in()
    {
        if (isset($_POST["email_input_sign_in"])) {
            $table = "registros";
            $item = "email";
            $value = $_POST["email_input_sign_in"];
            $response = ModelForm::ctrSelect($table, $item, $value);
            if ($response["email"] == $_POST["email_input_sign_in"] && $response["password"] == $_POST["pwd_input_sign_in"]) {
                $_SESSION["validate_user"] = true;

                echo '<div class="alert alert-success">Logged</div>';
                echo '<script type="text/javascript">
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }

                window.location = "index.php?action=inicio";
                </script>';
            } else {
                echo '<script type="text/javascript">
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                } </script>';
                echo '<div class="alert alert-danger">Error</div>';
            }
        }
    }

    public function update()
    {
        if (isset($_POST["name_input_update"])) {

            if ($_POST["pwd_input_update"] == "") {
                $password = $_POST["actual_pwd"];
            } else {
                $password = $_POST["pwd_input_update"];
            }

            $table = "registros";
            $data = array(
                "ID" => $_POST["id_user"],
                "user" => $_POST["name_input_update"],
                "email" => $_POST["email_input_update"],
                "password" => $password
            );
            $response = ModelForm::mdlUpdate($table, $data);

            return $response;
        }
    }

    public function delete()
    {
        if (isset($_POST["delete"])) {
            $table = "registros";
            $value = $_POST["delete"];
            $response = ModelForm::mdlDelete($table, $value);

            if ($response) {
                echo '<script type="text/javascript">
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                window.location = "index.php?action=inicio";
                </script>';
            }
        }
    }
}
