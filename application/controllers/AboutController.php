<?php

class AboutController extends SiteController
{

    public function init()
    {
    	parent::init();
        $this->view->headTitle('Pacifika Consultants - About');
    	$this->view->metaDescription = 'What are Pacifika Consultants about';
    }

    public function indexAction()
    {

    }

}

