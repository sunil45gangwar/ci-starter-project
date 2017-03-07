<strong><p class="text-muted text-left">Update Profile</p></strong>
  <?php echo $this->session->flashdata('message'); ?>
  <?php echo form_open('admin/user/update_profile'); ?>
    <div class="box-body">
      <div class="form-group">
        <label for="firstName">First name</label>
        <input type="text" name="first_name" value="<?php echo $current_user->first_name; ?>" class="form-control" id="firstName" placeholder="First name">
      </div>
      <div class="form-group">
        <label for="lastName">Last name</label>
        <input type="text" name="last_name" value="<?php echo $current_user->last_name; ?>" class="form-control" id="lastName" placeholder="Last name">
      </div>
      <div class="form-group">
        <label for="emailAddress">Email address</label>
        <input type="email" name="email" value="<?php echo $current_user->email; ?>" class="form-control" id="emailAddress" placeholder="Email">
      </div>
      <input type="hidden" name="user_id" value="<?php echo $current_user->id; ?>" value="">
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
  <?php echo form_close(); ?>
