<?php
/**
 * PayZen V2-Payment Module version 1.9.3 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyra\Payzen\Model\Api\Ws;

class RiskAssessments
{
    /**
     * @var string $results
     */
    private $results = null;

    /**
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param string $results
     * @return RiskAssessments
     */
    public function setResults($results)
    {
        $this->results = $results;
        return $this;
    }
}
