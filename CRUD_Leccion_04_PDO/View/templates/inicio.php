<?php

if (isset($_SESSION["validate_user"])) {

    if (!$_SESSION["validate_user"]) {
        echo '<script type="text/javascript">
                window.location = "index.php?action=ingreso";
                </script>';
        return;
    }
} else {
    echo '<script type="text/javascript">
                window.location = "index.php?action=ingreso";
                </script>';
    return;
}

$user = Form_Controller::select(null, null);

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>User</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($user as $key => $value) : ?>
            <tr>
                <td>
                    <?php echo $value["user"] ?>
                </td>
                <td>
                    <?php echo $value["email"] ?>
                </td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?action=edit&id=<?php echo $value["ID"] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                        <form method="post">
                            <input type="hidden" value="<?php echo $value["ID"] ?>" name="delete">
                            <button type=" submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                            <?php

                            $delete = new Form_Controller();
                            $delete->delete();

                            ?>

                        </form>
                    </div>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>