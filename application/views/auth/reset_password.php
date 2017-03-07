    <div class="login-box-body">
        <p class="login-box-msg">Reset Password</p>
        <?php echo $this->session->flashdata('message'); ?>
        <?php echo form_open('auth/reset_password/' . $code);?>
        <div class="form-group has-feedback">
            <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label>
            <?php echo form_input($new_password); ?>
            <span class="fa fa-unlock-alt form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?>
            <?php echo form_input($new_password_confirm); ?>
            <span class="fa fa-unlock-alt form-control-feedback"></span>
        </div>
        <?php echo form_input($user_id); ?>
        <?php echo form_hidden($csrf); ?>
        <div class="row">
            <div class="col-xs-12">
                <input type="submit" value="Reset Password" class="btn btn-primary btn-block btn-flat">
            </div><!-- /.col -->
        </div>
        <?php echo form_close(); ?>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
