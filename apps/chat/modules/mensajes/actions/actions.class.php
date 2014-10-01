<?php

require_once dirname(__FILE__).'/../lib/mensajesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mensajesGeneratorHelper.class.php';

/**
 * mensajes actions.
 *
 * @package    arte
 * @subpackage mensajes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class mensajesActions extends autoMensajesActions
{
	  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }
}
