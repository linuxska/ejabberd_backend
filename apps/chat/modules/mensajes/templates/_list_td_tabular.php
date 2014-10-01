<td class="sf_admin_text sf_admin_list_td_coll_id">
  <?php echo $ArchiveMessages->getCollId() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_dir">
  <?php echo get_partial('Mensajes/list_field_boolean', array('value' => $ArchiveMessages->getDir() ))?>
</td>
<td class="sf_admin_date sf_admin_list_td_utc">
  <?php echo false !== strtotime($ArchiveMessages->getUtc()) ? format_date($ArchiveMessages->getUtc(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo $ArchiveMessages->getBody() ?>
</td>
