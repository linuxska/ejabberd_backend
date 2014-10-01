<?php

/**
 * mensajes module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage mensajes
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseMensajesGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'archive_messages' : 'archive_messages_'.$action;
  }
}
