<?php

class ContactController extends SiteController
{

    public function init()
    {
    	parent::init();
        $this->view->headTitle('Pacifika Consultants - Contact');
    	$this->view->metaDescription = 'Contact information for Pacifika Consultants';
    }

    public function indexAction()
    {

    }

}

