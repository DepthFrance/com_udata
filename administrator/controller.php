<?php
/*------------------------------------------------------------------------
# controller.php - uData Component
# ------------------------------------------------------------------------
# author    Thomas Portier
# copyright Copyright (C) 2014. All Rights Reserved
# license   Depth France
# website   www.depth.fr
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of uData component
 */
class UdataController extends JControllerLegacy
{
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false, $urlparams = false)
	{
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'uData'));

		// call parent behavior
		parent::display($cachable);

		// set view
		$view = strtolower(JRequest::getVar('view'));

		// Set the submenu
		UdataHelper::addSubmenu($view);
	}
}
?>