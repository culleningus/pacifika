<?php

class ProjectsController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->headTitle('Pacifika Consultants Projects');
    	$this->view->metaDescription = 'Read about Pacifika Consultants previous projects';
    }

    public function indexAction()
    {

    }

}

