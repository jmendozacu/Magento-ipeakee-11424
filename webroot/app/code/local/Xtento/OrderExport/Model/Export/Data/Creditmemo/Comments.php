<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            vPGjkQHqxXo20xCC7zQ8CGcLxhRkBY+cGe1+8TjDIvI=
 * Last Modified: 2015-06-15T13:04:53+02:00
 * File:          app/code/local/Xtento/OrderExport/Model/Export/Data/Creditmemo/Comments.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

class Xtento_OrderExport_Model_Export_Data_Creditmemo_Comments extends Xtento_OrderExport_Model_Export_Data_Abstract
{
    public function getConfiguration()
    {
        return array(
            'name' => 'Credit Memo Comments',
            'category' => 'Creditmemo',
            'description' => 'Export any comments added to credit memos, retrieved from the sales_flat_creditmemo_comment table.',
            'enabled' => true,
            'apply_to' => array(Xtento_OrderExport_Model_Export::ENTITY_CREDITMEMO),
        );
    }

    public function getExportData($entityType, $collectionItem)
    {
        // Set return array
        $returnArray = array();
        $this->_writeArray = & $returnArray['creditmemo_comments'];
        // Fetch fields to export
        $creditmemo = $collectionItem->getObject();

        if (!$this->fieldLoadingRequired('creditmemo_comments')) {
            return $returnArray;
        }

        if ($creditmemo) {
            $commentsCollection = $creditmemo->getCommentsCollection();
            if ($commentsCollection) {
                foreach ($commentsCollection->getItems() as $creditmemoComment) {
                    $this->_writeArray = & $returnArray['creditmemo_comments'][];
                    $this->writeValue('comment', $creditmemoComment->getComment());
                    $this->writeValue('created_at', $creditmemoComment->getCreatedAt());
                }
            }
        }
        $this->_writeArray = & $returnArray;
        // Done
        return $returnArray;
    }
}