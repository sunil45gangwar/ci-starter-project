    <div class="login-box-body">
        <p class="login-box-msg">Enter Your Email</p>
        <div style="color: red;">
          <?php echo $message; ?>
        </div>
        <?php echo form_open(); ?>
        <div class="form-group has-feedback">
            <label for="identity"><?php echo(($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label>
            <br/>
            <input type="email" name="identity" class="form-control" placeholder="Enter email" required autofocus>
            <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary btn-block btn-flat"') ?>
                <a href="<?php echo site_url(); ?>login" class="btn btn-default btn-block btn-flat">Back</a>
            </div><!-- /.col -->
        </div>
        <?php echo form_close(); ?>
    </div><!-- /.forgotpassword-box-body -->
</div><!-- /.forgotpassword-box -->
