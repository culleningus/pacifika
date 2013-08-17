<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype()
	{
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->metaDescription = 'Pacifika Consultants Ltd are positive change management professionals. We specialise in Stakeholder and Community Engagement with Indigenous cultures in the Asia Pacific region';
	}
	
}

