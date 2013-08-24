<?php

class AboutController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->headTitle('Pacifika Consultants - About');
    	$this->view->metaDescription = 'What are Pacifika Consultants about';
    }

    public function indexAction()
    {

    }

}

