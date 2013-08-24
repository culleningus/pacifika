<?php

class ContactController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->headTitle('Pacifika Consultants - Contact');
    	$this->view->metaDescription = 'Contact information for Pacifika Consultants';
    }

    public function indexAction()
    {

    }

}

