<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen plugin for Magento. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Lyra_Payzen_Block_Oneclick_Cart extends Mage_Core_Block_Template
{
    public function isOneclickAvailable()
    {
        $model = Mage::getModel('payzen/payment_standard');

        // 1-Click is not available in current context
        $configContext = $model->getConfigData('one_click_location');
        if ($configContext != Lyra_Payzen_Helper_Payment::ONECLICK_LOCATION_CART
            && $configContext != Lyra_Payzen_Helper_Payment::ONECLICK_LOCATION_BOTH
        ) {
            return false;
        }

        return $model->isOneclickAvailable();
    }

    public function getConfigData($name)
    {
        return Mage::getModel('payzen/payment_standard')->getConfigData($name);
    }
}