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

    public function projectAction()
    {
    	$this->_helper->layout()->disableLayout(); 
    	$this->_helper->viewRenderer->setNoRender(true);

    	$project = json_encode($this->render('partials/solomon-islands/1'));
    	
    	echo $project;
    }
}

