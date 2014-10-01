<?php

/**
 * ArchiveJidPrefs form base class.
 *
 * @method ArchiveJidPrefs getObject() Returns the current form's model object
 *
 * @package    arte
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArchiveJidPrefsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'us'            => new sfWidgetFormInputHidden(),
      'with_user'     => new sfWidgetFormInputHidden(),
      'with_server'   => new sfWidgetFormInputHidden(),
      'with_resource' => new sfWidgetFormInputHidden(),
      'save'          => new sfWidgetFormInputText(),
      'expire'        => new sfWidgetFormInputText(),
      'otr'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'us'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getUs()), 'empty_value' => $this->getObject()->getUs(), 'required' => false)),
      'with_user'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getWithUser()), 'empty_value' => $this->getObject()->getWithUser(), 'required' => false)),
      'with_server'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getWithServer()), 'empty_value' => $this->getObject()->getWithServer(), 'required' => false)),
      'with_resource' => new sfValidatorChoice(array('choices' => array($this->getObject()->getWithResource()), 'empty_value' => $this->getObject()->getWithResource(), 'required' => false)),
      'save'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'expire'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'otr'           => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));
    $this->widgetSchema->setNameFormat('archive_jid_prefs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveJidPrefs';
  }


}
