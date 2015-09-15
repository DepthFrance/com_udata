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

/**
 * uData component helper.
 */
abstract class UdataHelper
{
	/**
	 *	Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(JText::_('uData'), 'index.php?option=com_udata&view=udata', $submenu == 'udata');
	}

	/**
	 *	Get the actions
	 */
	public static function getActions($Id = 0)
	{
		jimport('joomla.access.access');

		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($Id)){
			$assetName = 'com_udata';
		} else {
			$assetName = 'com_udata.message.'.(int) $Id;
		};

		$actions = JAccess::getActions('com_udata', 'component');

		foreach ($actions as $action){
			$result->set($action->name, $user->authorise($action->name, $assetName));
		};

		return $result;
	}
}
?>