<div class="row logincontainer">
    <div class="col-7 imagine">
        <img src="<?php echo base_url(); ?>assets/img/login.jpg" alt="">
    </div>
    <div class="col login">
        <form method="post" action="<?php echo base_url(); ?>index.php/register/validation">
            <p class="login__title">register</p>
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first-name'); ?>" />
                <span class="text-danger"><?php echo form_error('first_name'); ?></span>
            </div>
            <div class="form-group">
                <label>Last name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last-name'); ?>" />
                <span class="text-danger"><?php echo form_error('last_name'); ?></span>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" name="country" class="form-control" value="<?php echo set_value('country'); ?>" />
                <span class="text-danger"><?php echo form_error('country'); ?></span>
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" />
                <span class="text-danger"><?php echo form_error('phone'); ?></span>
            </div>
            <div class="form-group">
                <label>Valid Email Address</label>
                <input type="text" class="form-control" name="user_email" value="<?php echo set_value('user_email'); ?>">
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" name="register" value="Register" class="btn btn-info" />
            </div>
            <p class="login__signup">or <a href="<?php echo base_url(); ?>index.php/login">Login</a></p>
        </form>
    </div>
</div>
