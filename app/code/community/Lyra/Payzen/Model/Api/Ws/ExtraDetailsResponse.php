<?php
/**
 * PayZen V2-Payment Module version 1.9.4 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyra\Payzen\Model\Api\Ws;

class ExtraDetailsResponse
{
    /**
     * @var string $ipAddress
     */
    private $ipAddress = null;

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return ExtraDetailsResponse
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}