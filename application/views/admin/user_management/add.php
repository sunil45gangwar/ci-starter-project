<div class="box">
  <div class="box-header with-header">
    <h1><?php echo lang('create_user_heading');?></h1>
    <p><?php echo lang('create_user_subheading');?></p>
  </div>

<?php echo form_open('admin/users/create');?>
  <div class="box-body">
    <div class="form-group">
      <?php echo lang('create_user_fname_label', 'first_name');?><span style="color: red;"><?php echo form_error('first_name'); ?></span>
      <?php echo form_input($first_name);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_lname_label', 'last_name');?><span style="color: red;"><?php echo form_error('last_name'); ?></span>
      <?php echo form_input($last_name);?>
    </div>
    <div class="form-group">
      <?php if ($identity_column!=='email'): ?>
        <?php echo lang('create_user_identity_label', 'identity'); ?><span style="color: red;"><?php echo form_error('identity'); ?></span>
        <?php echo form_input($identity); ?>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_company_label', 'company');?><span style="color: red;"><?php echo form_error('company'); ?></span>
      <?php echo form_input($company);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_email_label', 'email');?><span style="color: red;"><?php echo form_error('email'); ?></span>
      <?php echo form_input($email);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_phone_label', 'phone');?><span style="color: red;"><?php echo form_error('phone'); ?></span>
      <?php echo form_input($phone);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_password_label', 'password');?><span style="color: red;"><?php echo form_error('password'); ?></span>
      <?php echo form_input($password);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_user_password_confirm_label', 'password_confirm');?><span style="color: red;"><?php echo form_error('password_confirm'); ?></span>
      <?php echo form_input($password_confirm);?>
    </div>
  </div>
  <div class="box-footer">
    <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
    <a href="<?php echo site_url(); ?>admin/user_management" class="btn btn-default">Back</a>
  </div>
  <?php echo form_close();?>
</div>
