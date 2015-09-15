<?php
/*------------------------------------------------------------------------
# controller.php - uData Component
# ------------------------------------------------------------------------
# author    Thomas Portier
# copyright Copyright (C) 2015. All Rights Reserved
# license   Depth France
# website   www.depth.fr
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * uData Component Controller
 */
class UdataController extends JControllerLegacy
{


    static private function returnJson($response_array) {
        JResponse::clearHeaders();
        JResponse::setHeader('Content-Type', 'application/json', true);
        JResponse::sendHeaders();

        if (is_array($response_array)) {
            array_walk_recursive($response_array, function(&$item, $key)
            {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });
        }

        echo json_encode($response_array);
        JFactory::getApplication()->close();
    }

    static public function ltrim0($str) {
        return ltrim($str,'0');
    }

    //Fonction qui retourne les communes
    public function getOrganizations(){
        UdataHelper::checkJsonRights();
        $response_array=UdataHelper::getOrganizations();
        self::returnJson($response_array);
    }

}
?>