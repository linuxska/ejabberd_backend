<?php

/**
 * ArchiveJidPrefs filter form base class.
 *
 * @package    arte
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseArchiveJidPrefsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'save'          => new sfWidgetFormFilterInput(),
      'expire'        => new sfWidgetFormFilterInput(),
      'otr'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'save'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expire'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'otr'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('archive_jid_prefs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveJidPrefs';
  }

  public function getFields()
  {
    return array(
      'us'            => 'Text',
      'with_user'     => 'Text',
      'with_server'   => 'Text',
      'with_resource' => 'Text',
      'save'          => 'Number',
      'expire'        => 'Number',
      'otr'           => 'Number',
    );
  }
}
