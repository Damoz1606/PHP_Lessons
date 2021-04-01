<?php

if (isset($_GET["id"])) {

    $item = "ID";
    $value = $_GET["id"];
    $user = Form_Controller::select($item, $value);
}

?>

<div class="d-flex justify-content-center text-center">
    <form class="p-5" method="post">
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $user["user"] ?>" placeholder="Enter name" id="name" name="name_input_update">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" value="<?php echo $user["email"] ?>" placeholder="Enter email" id="email" name="email_input_update">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd_input_update">
            <input type="hidden" class="form-control" value="<?php echo $user["password"] ?>" id="hidden_pwd" name="actual_pwd">
            <input type="hidden" class="form-control" value="<?php echo $user["ID"] ?>" id="hidden_id" name="id_user">
        </div>

        <?php

        $update = new Form_Controller();
        $response = $update->update();

        if ($response) {

            echo '<script type="text/javascript">
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
            echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';

            echo
            '<script type="text/javascript">
                setTimeout(() => {
                    window.location = "index.php?action=inicio";
                }, 1000);
                </script>';
        }

        ?>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>