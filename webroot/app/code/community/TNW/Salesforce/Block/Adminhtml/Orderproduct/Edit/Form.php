<?php

class TNW_Salesforce_Block_Adminhtml_Orderproduct_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('mapping_id' => $this->getRequest()->getParam('mapping_id'))),
            'method' => 'post',
            'enctype' => 'multipart/form-data'
        ));
        $form->setUseContainer(true);
        $this->setForm($form);
        $fieldset = $form->addFieldset('entity_map', array('legend' => Mage::helper('tnw_salesforce')->__('Mapping Information')));
        $formData = Mage::registry('salesforce_order_products_data')->getData();

        if (array_key_exists('default_value', $formData) && $formData['default_value']) {
            $locAttr = explode(" : ", $formData['local_field']);
            $formData['default_code'] = end($locAttr);
            array_pop($locAttr);
            array_push($locAttr, "field");
            $formData['local_field'] = join(" : ", $locAttr);
            Mage::registry('salesforce_order_products_data')->setData($formData);
        }

        $sfFields = array();
        $helper = Mage::helper('tnw_salesforce/salesforce_data');
        $hideFields = array(Mage::helper('tnw_salesforce/config')->getSalesforcePrefix('enterprise') . 'disableMagentoSync__c', 'UnitPrice', 'TotalPrice', 'Quantity', 'Description');
        foreach ($helper->getAllFields('OrderItem') as $key => $field) {
            if (in_array($key, $hideFields)) {
                continue;
            }
            $sfFields[] = array(
                'value' => $key,
                'label' => $field
            );
        }
        if (empty($sfFields)) {
            $sfFields[] = array(
                'value' => '',
                'label' => 'No custom fields found in Salesforce'
            );
        }

        $fieldset->addField('sf_field', 'select', array(
            'label' => Mage::helper('tnw_salesforce')->__('Salesforce Name'),
            'name' => 'sf_field',
            'note' => $this->__('Salesforce API field name.'),
            'style' => 'width:400px',
            'required' => true,
            'values' => $sfFields,
            'class' => 'chosen-select',
        ));

        $fieldset->addField('local_field', 'select', array(
            'label' => Mage::helper('tnw_salesforce')->__('Local Name'),
            'class' => 'required-entry chosen-select',
            'note' => $this->__('Choose Magento field you wish to map to Salesforce API.'),
            'required' => true,
            'style' => 'width:400px',
            'name' => 'local_field',
            'values' => Mage::helper('tnw_salesforce/magento')->getMagentoAttributes('OrderItem'),
        ));

        /* Custom Value */
        $fieldset = $form->addFieldset('entity_map_custom', array('legend' => Mage::helper('tnw_salesforce')->__('Custom Mapping')));

        $fieldset->addField('default_code', 'text', array(
            'label' => Mage::helper('tnw_salesforce')->__('Attribute Code'),
            'note' => $this->__('Unique attribute code.'),
            'style' => 'width:400px',
            'name' => 'default_code',
        ));

        $fieldset->addField('default_value', 'text', array(
            'label' => Mage::helper('tnw_salesforce')->__('Attribute Value'),
            'note' => $this->__('Value to be used when Object is created'),
            'style' => 'width:400px',
            'name' => 'default_value',
        ));

        if (Mage::getSingleton('adminhtml/session')->getTnwOrderProductData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getTnwOrderProductData());
            Mage::getSingleton('adminhtml/session')->getTnwOrderProductData(null);
        } elseif (Mage::registry('salesforce_order_products_data')) {
            $form->setValues(Mage::registry('salesforce_order_products_data')->getData());
        }
        return parent::_prepareForm();
    }

}