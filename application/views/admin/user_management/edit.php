<div class="box">
  <div class="box-header with-header">
    <h1><?php echo lang('edit_user_heading');?></h1>
    <p><?php echo lang('edit_user_subheading');?></p>
  </div>
  <?php echo form_open(uri_string()); ?>
    <div class="box-body">
      <div class="form-group">
        <?php echo lang('edit_user_fname_label', 'first_name');?>
        <span style="color: red;"><?php echo form_error('first_name'); ?></span>
        <?php echo form_input($first_name);?>
      </div>
      <div class="form-group">
        <?php echo lang('edit_user_lname_label', 'last_name');?>
        <span style="color: red;"><?php echo form_error('last_name'); ?></span>
        <?php echo form_input($last_name);?>
      </div>
      <div class="form-group">
        <?php echo lang('edit_user_company_label', 'company');?>
        <span style="color: red;"><?php echo form_error('company'); ?></span>
        <?php echo form_input($company);?>
      </div>
      <div class="form-group">
        <?php echo lang('edit_user_phone_label', 'phone');?>
        <span style="color: red;"><?php echo form_error('phone'); ?></span>
        <?php echo form_input($phone);?>
      </div>
      <div class="form-group">
        <?php echo lang('edit_user_password_label', 'password');?>
        <span style="color: red;"><?php echo form_error('password'); ?></span>
        <?php echo form_input($password);?>
      </div>
      <div class="form-group">
        <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
        <span style="color: red;"><?php echo form_error('password_confirm'); ?></span>
        <?php echo form_input($password_confirm);?>
      </div>
      <div class="checkbox">
        <?php if ($this->ion_auth->is_admin()): ?>
          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
                <?php
                    $gID=$group['id'];
                    $checked = null;
                    $item = null;
                    foreach($currentGroups as $grp) {
                        if ($gID == $grp->id) {
                            $checked= ' checked="checked"';
                        break;
                        }
                    } ?>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
    </div>
    <div class="box-footer">
      <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?>
      <a href="<?php echo site_url(); ?>admin/user_management" class="btn btn-default">Back</a>
    </div>
  <?php echo form_close(); ?>
</div>
