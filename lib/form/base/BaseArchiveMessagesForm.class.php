<?php

/**
 * ArchiveMessages form base class.
 *
 * @method ArchiveMessages getObject() Returns the current form's model object
 *
 * @package    arte
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArchiveMessagesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'coll_id' => new sfWidgetFormInputText(),
      'utc'     => new sfWidgetFormDateTime(),
      'dir'     => new sfWidgetFormInputText(),
      'body'    => new sfWidgetFormTextarea(),
      'name'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'coll_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'utc'     => new sfValidatorDateTime(),
      'dir'     => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'body'    => new sfValidatorString(array('required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 1023, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archive_messages[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveMessages';
  }


}
