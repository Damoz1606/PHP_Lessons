<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>

<body>

    <header>
        <h1>BRAND</h1>
    </header>

    <?php
    include "./View/Modules/navegation.php";
    ?>

    <section>
        <?php
        $mvc = new MVC_Controller();
        print $mvc->link_page_controller();
        ?>
    </section>



</body>

</html>