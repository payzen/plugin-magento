<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen plugin for Magento. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Lyra_Payzen_Model_Field_Oney_Active extends Mage_Core_Model_Config_Data
{
    protected $_message;

    public function save()
    {
        $this->_message = '';

        if ($this->getValue() /* submodule enabled */) {
            try {
                // Check Oney requirements.
                Mage::helper('payzen/util')->checkOneyRequirements($this->getScope(), $this->getScopeId());
            } catch (Mage_Core_Exception $e) {
                $this->setValue(0);

                $this->_message = $e->getMessage();
            }
        }

        return parent::save();
    }

    public function afterCommitCallback()
    {
        if (! empty($this->_message)) {
            Mage::throwException(
                $this->_message . "\n" . Mage::helper('payzen')->__('FacilyPay Oney means of payment cannot be used.')
            );
        }

        return parent::afterCommitCallback();
    }
}
