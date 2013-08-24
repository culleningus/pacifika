<?php

class IndexController extends SiteController
{

    public function init()
    {
    	parent::init();
        $this->view->headTitle('Pacifika Consultants');
    	$this->view->metaDescription = 'Pacifika Consultants Ltd are positive change management professionals. We specialise in Stakeholder and Community Engagement with Indigenous cultures in the Asia Pacific region';
    }

    public function indexAction()
    {

    }

}

