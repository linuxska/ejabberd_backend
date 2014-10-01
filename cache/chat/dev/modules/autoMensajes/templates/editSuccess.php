<?php use_helper('I18N', 'Date') ?>
<?php include_partial('mensajes/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Mensajes', array(), 'messages') ?></h1>

  <?php include_partial('mensajes/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('mensajes/form_header', array('ArchiveMessages' => $ArchiveMessages, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('mensajes/form', array('ArchiveMessages' => $ArchiveMessages, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('mensajes/form_footer', array('ArchiveMessages' => $ArchiveMessages, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
