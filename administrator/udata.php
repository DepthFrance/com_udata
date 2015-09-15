<?php
/*------------------------------------------------------------------------
# udata.php - uData Component
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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_udata')){
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
};

// Load cms libraries
JLoader::registerPrefix('J', JPATH_PLATFORM . '/cms');
// Load joomla libraries without overwrite
JLoader::registerPrefix('J', JPATH_PLATFORM . '/joomla',false);

// require helper files
JLoader::register('UdataHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'udata.php');

// import joomla controller library
jimport('joomla.application.component.controller');

// Add CSS file for all pages
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_udata/assets/css/udata.css');
$document->addScript('components/com_udata/assets/js/udata.js');

// Get an instance of the controller prefixed by Udata
$controller = JControllerLegacy::getInstance('uData');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();

?>