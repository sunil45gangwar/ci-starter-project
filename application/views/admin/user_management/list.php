<div class="box">
  <div class="box-header">
    <h3 class="box-title">List User</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php echo $message;?>
    <a href="<?php echo site_url(); ?>admin/users/create" class="btn btn-primary">Create</a>
    <br><br>
    <table id="users" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Groups</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user):?>
      		<tr>
                  <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
      			<td>
      				<?php foreach ($user->groups as $group):?>
                <?php if ($current_user->id != $user->id): ?>
                  <?php echo anchor("admin/groups/edit/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                  <?php else: ?>
                    <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'); ?>
                <?php endif; ?>
              <?php endforeach?>
      			</td>
            <?php if ($current_user->id != $user->id): ?>
              <td><?php echo ($user->active) ? anchor("admin/users/deactivate/".$user->id, lang('index_active_link'), 'class="btn btn-success"') : anchor("admin/users/activate/". $user->id, lang('index_inactive_link'), 'class="btn btn-danger"');?></td>
        			<td><?php
      				 $edit = array(
                  'class' => 'btn btn-xs btn-warning',);
      				 echo anchor(site_url('admin/users/edit/'.$user->id),'<i class="fa fa-pencil" aria-hidden="true"></i>', $edit);
      				    echo '  ';
      				 $delete = array(
                  'class' => 'btn btn-xs btn-danger',
                  'onclick' => 'javascript: return confirm(\'Are you sure ?\')');
      				 echo anchor(site_url('admin/users/delete/'.$user->id),'<i class="fa fa-trash" aria-hidden="true"></i>', $delete);
      				?></td>
              <?php else: ?>
                <td></td>
                <td></td>
            <?php endif; ?>
      		</tr>
      	<?php endforeach;?>
      </tbody>
      <tfoot>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Groups</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
