<?php

/**
 * ipe actions.
 *  
 * @package    ipe
 * @subpackage ipe
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ipeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }
 
/*
    public function executeChangePasswordShow(sfWebRequest $request) {
        $c = new Criteria;
        $c->add(sfGuardUserPeer::USERNAME, $this->getUser()->getUsername(), Criteria::EQUAL);
        $sf_user = sfGuardUserPeer::doSelectOne($c);

        $this->form = new ChangePasswordForm($sf_user);
    }

    public function executeChangePassword(sfWebRequest $request) {
        $c = new Criteria;
        $c->add(sfGuardUserPeer::USERNAME, $this->getUser()->getUsername(), Criteria::EQUAL);
        $sf_user = sfGuardUserPeer::doSelectOne($c);

        $this->form = new ChangePasswordForm($sf_user);

        $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));

        if ($this->form->isValid()) {
            $this->form->save();
            $this->redirect('@homepage');
        } else {
            $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        }

        $this->setTemplate('ChangePasswordShow');
    }

    public function executeRecoverPasswordShow(sfWebRequest $request) {
        $this->form = new RecoverPasswordForm();
    }

    public function executeRecoverPassword(sfWebRequest $request) {
        $this->form = new RecoverPasswordForm();

        $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));

        if ($this->form->isValid()) {
        	$this->form->save();
            $this->redirect('@homepage');
        }
        $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        $tthis->setTemplate('RecoverPasswordShow');
    }
*/
}

