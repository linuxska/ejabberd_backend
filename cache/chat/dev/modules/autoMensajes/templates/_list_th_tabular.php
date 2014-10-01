<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_coll_id">
  <?php if ('coll_id' == $sort[0]): ?>
    <?php echo link_to(__('Cuenta', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=coll_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Cuenta', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=coll_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_dir">
  <?php if ('dir' == $sort[0]): ?>
    <?php echo link_to(__('Direccion', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=dir&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Direccion', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=dir&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_utc">
  <?php if ('utc' == $sort[0]): ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=utc&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=utc&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_body">
  <?php if ('body' == $sort[0]): ?>
    <?php echo link_to(__('Mensaje', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=body&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Mensaje', array(), 'messages'), '@archive_messages', array('query_string' => 'sort=body&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>