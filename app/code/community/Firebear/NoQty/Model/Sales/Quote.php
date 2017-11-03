<?php
/**
 * Firebear No Qty Module
 *
 * @category    Firebear
 * @package     Firebear_NoQty
 * @copyright   Copyright (c) 2014 Firebear
 * @author      biotech (Hlupko Viktor)
 */

/**
 * Model
 *
 * @category    Firebear
 * @package     Firebear_NoQty
 */

class Firebear_NoQty_Model_Sales_Quote extends Mage_Sales_Model_Quote
{
    /**
    * Retrieve quote item by product id
    *
    * @param   Mage_Catalog_Model_Product $product
    * @return  Mage_Sales_Model_Quote_Item || false
    */

    public function getItemByProduct($product)
    {
        if (Mage::getStoreConfig('noqty/general/enabled')){
            return false;
        }else{
            foreach ($this->getAllItems() as $item) {
                if ($item->representProduct($product)) {
                    return $item;
                }
            }
            return false;
        }

    }
}

