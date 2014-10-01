<?php

/**
 * ArchiveCollections filter form base class.
 *
 * @package    arte
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseArchiveCollectionsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'prev_id'       => new sfWidgetFormFilterInput(),
      'next_id'       => new sfWidgetFormFilterInput(),
      'us'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'with_user'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'with_server'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'with_resource' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utc'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'change_by'     => new sfWidgetFormFilterInput(),
      'change_utc'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted'       => new sfWidgetFormFilterInput(),
      'subject'       => new sfWidgetFormFilterInput(),
      'thread'        => new sfWidgetFormFilterInput(),
      'crypt'         => new sfWidgetFormFilterInput(),
      'extra'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'prev_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'next_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'us'            => new sfValidatorPass(array('required' => false)),
      'with_user'     => new sfValidatorPass(array('required' => false)),
      'with_server'   => new sfValidatorPass(array('required' => false)),
      'with_resource' => new sfValidatorPass(array('required' => false)),
      'utc'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'change_by'     => new sfValidatorPass(array('required' => false)),
      'change_utc'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'subject'       => new sfValidatorPass(array('required' => false)),
      'thread'        => new sfValidatorPass(array('required' => false)),
      'crypt'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'extra'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archive_collections_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveCollections';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'prev_id'       => 'Number',
      'next_id'       => 'Number',
      'us'            => 'Text',
      'with_user'     => 'Text',
      'with_server'   => 'Text',
      'with_resource' => 'Text',
      'utc'           => 'Date',
      'change_by'     => 'Text',
      'change_utc'    => 'Date',
      'deleted'       => 'Number',
      'subject'       => 'Text',
      'thread'        => 'Text',
      'crypt'         => 'Number',
      'extra'         => 'Text',
    );
  }
}
