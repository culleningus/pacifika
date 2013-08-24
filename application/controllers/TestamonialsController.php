<?php

class TestamonialsController extends SiteController
{

    public function init()
    {
    	parent::init();
        $this->view->headTitle('Pacifika Consultants - Testimonials');
    	$this->view->metaDescription = 'Read about Pacifika Consultants customer testamonials and achievements';
    }

    public function indexAction()
    {

    }

}

