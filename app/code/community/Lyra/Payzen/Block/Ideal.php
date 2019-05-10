<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen plugin for Magento. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Lyra_Payzen_Block_Ideal extends Lyra_Payzen_Block_Abstract
{
    protected $_model = 'ideal';

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('payzen/ideal.phtml');
    }
}
