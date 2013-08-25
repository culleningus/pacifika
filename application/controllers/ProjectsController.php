<?php

class ProjectsController extends SiteController
{

    public function init()
    {
    	parent::init();
        $this->view->headTitle('Pacifika Consultants - Projects');
    	$this->view->metaDescription = 'Read about Pacifika Consultants previous projects';
    }

    public function indexAction()
    {

    }

}

