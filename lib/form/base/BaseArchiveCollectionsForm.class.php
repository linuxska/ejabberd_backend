<?php

/**
 * ArchiveCollections form base class.
 *
 * @method ArchiveCollections getObject() Returns the current form's model object
 *
 * @package    arte
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArchiveCollectionsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'prev_id'       => new sfWidgetFormInputText(),
      'next_id'       => new sfWidgetFormInputText(),
      'us'            => new sfWidgetFormInputText(),
      'with_user'     => new sfWidgetFormInputText(),
      'with_server'   => new sfWidgetFormInputText(),
      'with_resource' => new sfWidgetFormInputText(),
      'utc'           => new sfWidgetFormDateTime(),
      'change_by'     => new sfWidgetFormInputText(),
      'change_utc'    => new sfWidgetFormDateTime(),
      'deleted'       => new sfWidgetFormInputText(),
      'subject'       => new sfWidgetFormInputText(),
      'thread'        => new sfWidgetFormInputText(),
      'crypt'         => new sfWidgetFormInputText(),
      'extra'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'prev_id'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'next_id'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'us'            => new sfValidatorString(array('max_length' => 2047)),
      'with_user'     => new sfValidatorString(array('max_length' => 1023)),
      'with_server'   => new sfValidatorString(array('max_length' => 1023)),
      'with_resource' => new sfValidatorString(array('max_length' => 1023)),
      'utc'           => new sfValidatorDateTime(),
      'change_by'     => new sfValidatorString(array('max_length' => 3071, 'required' => false)),
      'change_utc'    => new sfValidatorDateTime(array('required' => false)),
      'deleted'       => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'subject'       => new sfValidatorString(array('max_length' => 1023, 'required' => false)),
      'thread'        => new sfValidatorString(array('max_length' => 1023, 'required' => false)),
      'crypt'         => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'extra'         => new sfValidatorString(array('required' => false)),
    ));


    $this->widgetSchema->setNameFormat('archive_collections[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveCollections';
  }


}
