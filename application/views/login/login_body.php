<div class="row logincontainer">
    <div class="col-7 imagine">
        <img src="<?php echo base_url(); ?>assets/img/login.jpg" alt="">
    </div>
    <div class="col login">
        <?php
        if ($this->session->flashdata('message')) {
            echo '
                    <div class="alert alert-success">
                        ' . $this->session->flashdata("message") . '
                    </div>
                    ';
        }
        ?>
        <form method="post" action="<?php echo base_url(); ?>index.php/login/validation">
            <p class="login__title">login to continue</p>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="user_email" value="<?php echo set_value('user_email'); ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="user_password" value="<?php echo set_value('user_password'); ?>">
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" style="color: white;background: #6675df;text-transform: uppercase;" name="login" value="Login" class="btn btn-info" />
            </div>
            <p class="login__signup">or <a href="<?php echo base_url(); ?>index.php/register">Register</a></p>
        </form>
    </div>
</div>