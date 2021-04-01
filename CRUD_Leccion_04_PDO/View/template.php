<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/442822d010.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <div class="container-fluid">
        <div class="container">
            <?php
            include "./View/navigation.php";
            ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <?php
            $mvc = new MVC_Controller();
            $mvc->get_page();
            // print $mvc->get_page();
            ?>
        </div>
    </div>

</body>

</html>