<?php

class SiteController extends Zend_Controller_Action
{

	public function init()
    {
    	$this->view->request = Zend_Controller_Front::getInstance()->getRequest();
    }
}
