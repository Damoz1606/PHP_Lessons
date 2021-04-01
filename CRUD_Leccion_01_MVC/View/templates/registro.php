<div class="d-flex justify-content-center text-center">
    <form class="p-5" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter email" id="name" name="name_input_register">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email_input_register">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd_input_register">
        </div>

        <?php

        $fctr = Form_Controller::sign_up();
        if ($fctr) {
            echo '<script type="text/javascript">
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }

            </script>';
            echo '<div class="alert alert-succes">El usuario ha sido registrado</div>';
        }

        // $fctr = new Form_Controller();
        // $fctr->sign_up();

        ?>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>