<?php

/**
 * ArchiveGlobalPrefs filter form base class.
 *
 * @package    arte
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseArchiveGlobalPrefsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'save'          => new sfWidgetFormFilterInput(),
      'expire'        => new sfWidgetFormFilterInput(),
      'otr'           => new sfWidgetFormFilterInput(),
      'method_auto'   => new sfWidgetFormFilterInput(),
      'method_local'  => new sfWidgetFormFilterInput(),
      'method_manual' => new sfWidgetFormFilterInput(),
      'auto_save'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'save'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expire'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'otr'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'method_auto'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'method_local'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'method_manual' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'auto_save'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('archive_global_prefs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveGlobalPrefs';
  }

  public function getFields()
  {
    return array(
      'us'            => 'Text',
      'save'          => 'Number',
      'expire'        => 'Number',
      'otr'           => 'Number',
      'method_auto'   => 'Number',
      'method_local'  => 'Number',
      'method_manual' => 'Number',
      'auto_save'     => 'Number',
    );
  }
}
