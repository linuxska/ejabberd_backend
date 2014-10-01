<?php

/**
 * ArchiveMessages filter form base class.
 *
 * @package    arte
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseArchiveMessagesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'coll_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utc'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dir'     => new sfWidgetFormFilterInput(),
      'body'    => new sfWidgetFormFilterInput(),
      'name'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'coll_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'utc'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'dir'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'body'    => new sfValidatorPass(array('required' => false)),
      'name'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archive_messages_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveMessages';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'coll_id' => 'Number',
      'utc'     => 'Date',
      'dir'     => 'Number',
      'body'    => 'Text',
      'name'    => 'Text',
    );
  }
}
