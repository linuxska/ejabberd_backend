<?php

/**
 * ArchiveGlobalPrefs form base class.
 *
 * @method ArchiveGlobalPrefs getObject() Returns the current form's model object
 *
 * @package    arte
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArchiveGlobalPrefsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'us'            => new sfWidgetFormInputHidden(),
      'save'          => new sfWidgetFormInputText(),
      'expire'        => new sfWidgetFormInputText(),
      'otr'           => new sfWidgetFormInputText(),
      'method_auto'   => new sfWidgetFormInputText(),
      'method_local'  => new sfWidgetFormInputText(),
      'method_manual' => new sfWidgetFormInputText(),
      'auto_save'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'us'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getUs()), 'empty_value' => $this->getObject()->getUs(), 'required' => false)),
      'save'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'expire'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'otr'           => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'method_auto'   => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'method_local'  => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'method_manual' => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'auto_save'     => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));


    $this->widgetSchema->setNameFormat('archive_global_prefs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveGlobalPrefs';
  }


}
