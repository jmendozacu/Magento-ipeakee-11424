<?php
/**
 * Copyright (c) 2015 S.L.I. Systems, Inc. (www.sli-systems.com) - All Rights
 * Reserved
 * This file is part of Learning Search Connect.
 * Learning Search Connect is distributed under a limited and restricted
 * license - please visit www.sli-systems.com/LSC for full license details.
 *
 * THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY
 * KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
 * PARTICULAR PURPOSE. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO
 * EVENT WILL SLI BE LIABLE TO YOU OR ANY OTHER PARTY FOR ANY GENERAL, DIRECT,
 * INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL LOSS OR DAMAGES OF ANY
 * CHARACTER ARISING OUT OF THE USE OF THE CODE AND/OR THE LICENSE INCLUDING
 * BUT NOT LIMITED TO PERSONAL INJURY, LOSS OF DATA, LOSS OF PROFITS, LOSS OF
 * ASSIGNMENTS, DATA OR OUTPUT FROM THE SERVICE BEING RENDERED INACCURATE,
 * FAILURE OF CODE, SERVER DOWN TIME, DAMAGES FOR LOSS OF GOODWILL, BUSINESS
 * INTERRUPTION, COMPUTER FAILURE OR MALFUNCTION, OR ANY AND ALL OTHER DAMAGES
 * OR LOSSES OF WHATEVER NATURE, EVEN IF SLI HAS BEEN INFORMED OF THE
 * POSSIBILITY OF SUCH DAMAGES.
 */

/**
 * Feed Resource used to grab MYSQL settings
 *
 * @package    SLI
 * @subpackage Search
 */
class SLI_Search_Model_Resource_FeedManager extends Mage_Core_Model_Resource_Db_Abstract
{
    /** @var $connection Varien_Db_Adapter_Pdo_Mysql */
    protected $connection = null;

    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->connection = Mage::getSingleton('core/resource')
            ->getConnection(Mage_Core_Model_Resource::DEFAULT_READ_RESOURCE);
    }

    /**
     * Get a key value array of the system settings for output
     *
     * @return Zend_Db_Statement_Pdo
     */
    public function getSystemSettings()
    {
        $query
            = "SHOW VARIABLES where
                    Variable_name = 'max_allowed_packet'
                    OR Variable_name = 'wait_timeout'
                    OR Variable_name = 'connect_timeout'
                    OR Variable_name = 'innodb_buffer_pool_size'";

        /* @var $result Zend_Db_Statement_Pdo */
        try {
            $result = $this->connection->query($query);
        } catch (Exception $e) {
            Mage::throwException(Mage::helper('sli_search')->__('Unable to log Mysql settings'));
        }

        return $result;
    }


}