<?php

/**
 * sfGuardUserPermission form base class.
 *
 * @method sfGuardUserPermission getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfGuardUserPermissionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'       => new sfWidgetFormInputHidden(),
      'permission_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'user_id'       => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id', 'required' => false)),
      'permission_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardPermission', 'column' => 'id', 'required' => false)),
    ));


Warning: call_user_func() expects parameter 1 to be a valid callback, class 'sfGuardUserPermissionPeer' does not have a method 'getUniqueColumnNames' in /Library/WebServer/Documents/arte/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562

Warning: Invalid argument supplied for foreach() in /Library/WebServer/Documents/arte/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562
    $this->widgetSchema->setNameFormat('sf_guard_user_permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserPermission';
  }


}
