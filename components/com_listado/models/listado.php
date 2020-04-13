<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class ListAdoModelListAdo extends JModelItem
{
    /**
     * @var string message
     */
    protected $message;

    /**
     * Get the message
     *
     * @return  string  The message to be displayed to the user
     */
    public function getCon()
    {
        if (!isset($this->conexion))
        {
            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->select($db->quoteName(array('Codigo', 'Titulo', 'Autor')));
            $query->from($db->quoteName('pelicula'));

            $db->setQuery($query);
            $this->conexion= $db->loadObjectList();
        }

        return $this->conexion;
    }
}