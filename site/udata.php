<?php
/*------------------------------------------------------------------------
# udata.php - Udata Component
# ------------------------------------------------------------------------
# author    Thomas Portier
# copyright Copyright (C) 2014. All Rights Reserved
# license   Depth France
# website   www.depth.fr
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Added for Joomla 3.0
if(!defined('DS')){
	define('DS',DIRECTORY_SEPARATOR);
};

// Set the component css/js
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_udata/assets/css/udata.css');

// Require helper file
JLoader::register('UdataHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'udata.php');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by uData
$controller = JControllerLegacy::getInstance('uData');

// Perform the request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
?>