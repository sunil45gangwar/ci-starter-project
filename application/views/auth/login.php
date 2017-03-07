  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <div style="color: red;"><?php echo $message; ?></div>
    <?php echo form_open(); ?>
      <div class="form-group has-feedback">
        <?php echo form_input($identity); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo form_input($password); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

    <br>

    <!-- Do this one very fast -->
    <a href="<?php echo site_url(); ?>forgot-password">I forgot my password</a><br>
    <a href="<?php echo site_url(); ?>register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
