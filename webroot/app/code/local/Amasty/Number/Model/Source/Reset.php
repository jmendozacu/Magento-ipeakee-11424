<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2018 Amasty (https://www.amasty.com)
 * @package Amasty_Number
 */
class Amasty_Number_Model_Source_Reset
{
    public function toOptionArray()
    {
        $options = array();
        
        // magento wants at least one option to be selected
        $options[] = array(
            'value' => '',
            'label' => Mage::helper('amnumber')->__('Never'),
            
        );
        $options[] = array(
            'value' => 'Y-m-d',
            'label' => Mage::helper('amnumber')->__('Each Day'),
            
        );
        $options[] = array(
            'value' => 'Y-m',
            'label' => Mage::helper('amnumber')->__('Each Month'),
            
        );
        $options[] = array(
            'value' => 'Y',
            'label' => Mage::helper('amnumber')->__('Each Year'),
            
        );
        return $options;
    }
}