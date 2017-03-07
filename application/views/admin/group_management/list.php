<div class="box">
  <div class="box-header">
    <h3 class="box-title">List User</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php echo $message;?>
    <a href="<?php echo site_url(); ?>admin/groups/create" class="btn btn-primary">Create</a>
    <br><br>
    <table id="users" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Group Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($groups as $group):?>
      		<tr>
            <td><?php echo $group->name; ?></td>
            <td><?php echo $group->description; ?></td>
            <?php if (!in_array($group->name, array('admin','members'))): ?>
              <td>
                <?php
        				 $edit = array(
                    'class' => 'btn btn-xs btn-warning',);
        				 echo anchor(site_url('admin/groups/edit/'.$group->id),'<i class="fa fa-pencil" aria-hidden="true"></i>', $edit);
        				echo '  ';
        				 $delete = array(
                    'class' => 'btn btn-xs btn-danger',
                    'onclick' => 'javascript: return confirm(\'Are you sure ?\')');
        				 echo anchor(site_url('admin/groups/delete/'.$group->id),'<i class="fa fa-trash" aria-hidden="true"></i>', $delete);
        				?>
              </td>
              <?php else: ?>
                <td></td>
            <?php endif; ?>
      		</tr>
      	<?php endforeach;?>
      </tbody>
      <tfoot>
      <tr>
        <th>Group Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
