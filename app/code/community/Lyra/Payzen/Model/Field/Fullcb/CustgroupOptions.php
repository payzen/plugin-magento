<?php
/**
 * PayZen V2-Payment Module version 1.9.0 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2018 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */

class Lyra_Payzen_Model_Field_Fullcb_CustgroupOptions extends Lyra_Payzen_Model_Field_CustgroupOptions
{
    protected function _beforeSave()
    {
        $values = $this->getValue();

        $data = $this->getGroups('payzen_fullcb'); // get data of FullCB config group
        if ($data['fields']['fullcb_active']['value']) { // FullCB is activated
            foreach ($values as $key => $value) {
                if (empty($value) || ($value['code'] !== 'all')) {
                    continue;
                }

                if (empty($value['amount_min'])) {
                    $field = 'Minimum amount';
                } elseif (empty($value['amount_max'])) {
                    $field = 'Maximum amount';
                }

                if (isset($field)) {
                    $field = Mage::helper('payzen')->__($field); // translate field name
                    $group = Mage::helper('payzen')->getConfigGroupTitle($this->getGroupId());
                    $msg = Mage::helper('payzen')->__('Please enter a value for &laquo;ALL GROUPS - %s&raquo; in &laquo;%s&raquo; section as agreed with your bank.', $field, $group);

                    // throw exception
                    Mage::throwException($msg);
                }
            }
        }

        return parent::_beforeSave();
    }
}