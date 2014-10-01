<?php

/**
 * mensajes module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage mensajes
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMensajesGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array();
  }

  public function getListActions()
  {
    return array();
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%coll_id%% - %%dir%% - %%utc%% - %%body%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Historial de mensajes';
  }

  public function getEditTitle()
  {
    return 'Edit Mensajes';
  }

  public function getNewTitle()
  {
    return 'New Mensajes';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'utc',  1 => 'body',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'coll_id',  1 => 'dir',  2 => 'utc',  3 => 'body',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Numero',),
      'coll_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cuenta',),
      'utc' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha',),
      'dir' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Direccion',),
      'body' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Mensaje',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'coll_id' => array(),
      'utc' => array(),
      'dir' => array(),
      'body' => array(),
      'name' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'coll_id' => array(),
      'utc' => array(),
      'dir' => array(),
      'body' => array(),
      'name' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'coll_id' => array(),
      'utc' => array(),
      'dir' => array(),
      'body' => array(),
      'name' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'coll_id' => array(),
      'utc' => array(),
      'dir' => array(),
      'body' => array(),
      'name' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'coll_id' => array(),
      'utc' => array(),
      'dir' => array(),
      'body' => array(),
      'name' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ArchiveMessagesForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ArchiveMessagesFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 50;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}
