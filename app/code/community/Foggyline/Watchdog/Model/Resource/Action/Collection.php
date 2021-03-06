<?php

/**
 * Foggyline
 *
 * @category    Foggyline
 * @package     Foggyline_Watchdog
 * @copyright   Copyright (c) Foggyline <ajzele@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Watchdog_Model_Resource_Action_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('foggyline_watchdog/action');
    }
}
