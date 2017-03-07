<div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <?php echo form_open('auth/register'); ?>
      <div class="form-group has-feedback">
        <span><?php echo form_error('first_name'); ?></span>
        <?php echo form_input($first_name); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('last_name'); ?></span>
        <?php echo form_input($last_name); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('email'); ?></span>
        <?php echo form_input($email); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('phone'); ?></span>
        <?php echo form_input($phone); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('company'); ?></span>
        <?php echo form_input($company); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('password'); ?></span>
        <?php echo form_input($password); ?>
      </div>
      <div class="form-group has-feedback">
        <span><?php echo form_error('password_confirm'); ?></span>
        <?php echo form_input($password_confirm); ?>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    <br>
    <a href="<?php echo site_url(); ?>login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
