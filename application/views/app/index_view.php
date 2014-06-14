<div class="container">
  <table class="table">
    <tr>
      <th>Title</th>
      <th>Date Added</th>
      <th>Done?</th>
      <th>&nbsp;</th>
	   <th>&nbsp;</th>
    </tr>

    <?php foreach ($all_list as $list): ?>
      <?php for($i = 0; $i < count($list['username']); $i++ ):?>
        <tr>
          <td><?= $list['title'][$i] ?></td>
          <td><?= $list['date_added'][$i] ?></td>
          <?php if($list['status'][$i] == 0): ?>
            <?php if ($this->session->userdata('id') == $list['user_id'][$i]): ?>
          <td><input style="margin-left:15px;" checked="checked" type="checkbox" id="done" data-id="<?=$list['list_id'][$i]?>"></td>
            <?php else: ?>
              <td>Undone</td>
            <?php endif; ?>
          <?php else: ?>
            <?php if ($this->session->userdata('id') == $list['user_id'][$i]): ?>
              <!--<td><?= anchor('app/check/' . $list['list_id'][$i] . '/1/' . $this->uri->segment(3) , 'Done') ?></td>-->
			  <td> <input style="margin-left:15px;" type="checkbox" id="done" data-id="<?=$list['list_id'][$i]?>"></td>
            <?php else: ?>
              <td>Done</td>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ($this->session->userdata('id') == $list['user_id'][$i]): ?>
              <td>
                <?= anchor('app/edit_task/' . $list['list_id'][$i] . '/' . $this->uri->segment(3), 'Edit') ?>
              </td>
			  <td>
			   <?= anchor('app/remove_task/' . $list['list_id'][$i] . '/' . $this->uri->segment(3), 'Delete') ?>
			  </td>
          <?php else: ?>
            <td>&nbsp;</td>
          <?php endif; ?>
        </tr>
      <?php endfor; ?>
    <?php endforeach; ?>
    <?= $pages ?>
  </table>
</div>