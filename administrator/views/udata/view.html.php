<?php
/*------------------------------------------------------------------------
# view.html.php - uData Component
# ------------------------------------------------------------------------
# author    Thomas Portier
# copyright Copyright (C) 2014. All Rights Reserved
# license   Depth France
# website   www.depth.fr
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * uData View
 */
class UdataViewudata extends JViewLegacy
{
	/**
	 * uData view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Include helper submenu
		UdataHelper::addSubmenu('udata');

		// Set the toolbar
		$this->addToolBar();
		// Show sidebar
		$this->sidebar = JHtmlSidebar::render();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
		JToolBarHelper::title(JText::_('uData Manager'), 'udata');
		JToolBarHelper::preferences('com_udata');
	}

	/**
	 * Method to set up the document properties
	 *
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('uData Manager - Administrator'));
	}
}
?>