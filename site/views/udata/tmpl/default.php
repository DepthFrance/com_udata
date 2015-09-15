<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addScript(JURI::base(true) . '/media/jui/js/jquery.js');
$doc->addScript(JURI::base(true) . '/media/jui/js/jquery-noconflict.js');
$doc->addScript(JURI::base(true) . '/components/com_udata/assets/js/vendor/handlebars/handlebars.min.js');
$doc->addScript(JURI::base(true) . '/components/com_udata/assets/js/udata.js');
$doc->addStylesheet(JURI::base(true) . '/components/com_udata/assets/css/main.css');
$doc->addStylesheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

?>

<div id="uData" class="uData-data" data-q='' data-organizations="534fffb3a3a7292c64a78129,551959f6c751df6682057c91,534fffb9a3a7292c64a7814f,558bef88c751df1fd9a453b9,55896c18c751df5864a453b9,558bf578c751df2f9ea453ea,534fff4ea3a7292c64a77cab" data-organization="534fffb3a3a7292c64a78129" data-page_size="5"></div>


<script id='test' type="text/x-handlebars-template">


</script>



