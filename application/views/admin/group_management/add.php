<div class="box">
  <div class="box-header with-header">
    <h1><?php echo lang('create_group_heading');?></h1>
    <p><?php echo lang('create_group_subheading');?></p>
  </div>
  <?php echo form_open("admin/groups/create"); ?>
  <div class="box-body">
    <div class="form-group">
      <?php echo lang('create_group_name_label', 'group_name');?><span style="color: red;"><?php echo form_error('group_name'); ?></span>
      <?php echo form_input($group_name);?>
    </div>
    <div class="form-group">
      <?php echo lang('create_group_desc_label', 'description');?>
      <?php echo form_error('description'); ?>
      <?php echo form_input($description);?>
    </div>
  </div>
  <div class="box-footer">
    <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
    <a href="<?php echo site_url(); ?>admin/groups" class="btn btn-default">Back</a>
  </div>
  <?php echo form_close();?>
</div>
