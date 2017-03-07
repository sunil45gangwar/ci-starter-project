<strong><p class="text-muted text-left">Update Password</p></strong>
<?php if ($message == validation_errors()): ?>
  <div style="color: red;">
    <?php echo $message; ?>
  </div>
  <?php else: ?>
    <?php echo $message; ?>
<?php endif; ?>
<?php echo form_open('admin/user/update_password'); ?>
  <div class="box-body">
    <div class="form-group">
      <label for="old">Old Password</label>
      <?php echo form_input($old_password); ?>
    </div>
    <div class="form-group">
      <label for="new">New Password</label>
      <?php echo form_input($new_password); ?>
    </div>
    <div class="form-group">
      <label for="new_confirm">Confirm New Password</label>
      <?php echo form_input($new_password_confirm); ?>
    </div>
    <input type="hidden" name="user_id" value="<?php echo $current_user->id; ?>" value="">
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </div>
<?php echo form_close(); ?>
