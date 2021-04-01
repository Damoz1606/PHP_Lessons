<div class="d-flex justify-content-center text-center">
    <form class="p-5" method="post">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email_input_sign_in">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd_input_sign_in">
        </div>

        <?php

        $fctr = new Form_Controller();

        $fctr->sign_in();

        ?>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>