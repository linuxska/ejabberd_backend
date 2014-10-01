<td colspan="4">
  <?php echo __('%%coll_id%% - %%dir%% - %%utc%% - %%body%%', array('%%coll_id%%' => $ArchiveMessages->getCollId(), '%%dir%%' => $ArchiveMessages->getDir(), '%%utc%%' => false !== strtotime($ArchiveMessages->getUtc()) ? format_date($ArchiveMessages->getUtc(), "f") : '&nbsp;', '%%body%%' => $ArchiveMessages->getBody()), 'messages') ?>
</td>
