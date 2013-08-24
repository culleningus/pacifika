<?php

class TestamonialsController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->headTitle('Pacifika Consultants - Testimonials');
    	$this->view->metaDescription = 'Read about Pacifika Consultants customer testamonials and achievements';
    }

    public function indexAction()
    {

    }

}

