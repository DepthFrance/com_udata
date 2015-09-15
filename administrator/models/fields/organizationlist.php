<?php
/**
 \* @version     4.0.0
 * @package     com_easysdi_map
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      EasySDI Community <contact@easysdi.org> - http://www.easysdi.org
 */

defined('JPATH_BASE') or die;

jimport('joomla.html.html');
jimport('joomla.form.formfield');

/**
 * Form Field class for the EasySDI solution.
 * Provides a grouped list select field for services.
 *
 * @package     EasySDI
 * @subpackage  EasySDI Map
 * @since       3.0.0
 */
class JFormFieldOrganizationList extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  11.1
	 */
	protected $type = 'OrganizationList';

	/**
	 * Method to get the field option groups.
	 *
	 * @return  array  The field option objects as a nested array in groups.
	 *
	 * @since   11.1
	 */
	protected function getOrganizations()
	{
		// Initialize variables.
		/*$url = str_replace (" ", "+", "https://www.data.gouv.fr:443/api/1/organizations/?");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
                return curl_exec($ch);*/
                $opt = ' allowClear: true,
                    width: "70%",  
                    formatResult: function format(state) {  if (!state.id) return state.text; return "<img class=\'item\' src=\'' . JURI::base() .'media/com_test1/images/" + state.id.toLowerCase() + ".png\'/>" + state.text; },
                    formatSelection: function format(state) {  if (!state.id) return state.text; return "<img class=\'item\' src=\'' . JURI::base() .'media/com_test1/images/" + state.id.toLowerCase() + ".png\'/>" + state.text; },
                    escapeMarkup: function(m) { return m; }
                 ';

                 JHtml::_('formbehavior2.select2', '.organizations', $opt);
                 
                 $attr = array(
                        'id'          => 'countries',
                        'list.attr'   => 'class="organizations" multiple '   
                 );
                 
                 JHtml::_('select.groupedlist', $countries, 'countries', $attr);
	}
        
        protected function getInput()
	{
            return "test";
        }

}
