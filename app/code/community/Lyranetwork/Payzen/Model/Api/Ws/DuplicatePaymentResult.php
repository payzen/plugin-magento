<?php
/**
 * PayZen V2-Payment Module version 1.11.1 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class DuplicatePaymentResult
{
    /**
     * @var CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var PaymentResponse $paymentResponse
     */
    private $paymentResponse = null;

    /**
     * @var OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var CardResponse $cardResponse
     */
    private $cardResponse = null;

    /**
     * @var AuthorizationResponse $authorizationResponse
     */
    private $authorizationResponse = null;

    /**
     * @var CaptureResponse $captureResponse
     */
    private $captureResponse = null;

    /**
     * @var CustomerResponse $customerResponse
     */
    private $customerResponse = null;

    /**
     * @var MarkResponse $markResponse
     */
    private $markResponse = null;

    /**
     * @var ThreeDSResponse $threeDSResponse
     */
    private $threeDSResponse = null;

    /**
     * @var ExtraResponse $extraResponse
     */
    private $extraResponse = null;

    /**
     * @var FraudManagementResponse $fraudManagementResponse
     */
    private $fraudManagementResponse = null;

    /**
     * @return CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param CommonResponse $commonResponse
     * @return DuplicatePaymentResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return PaymentResponse
     */
    public function getPaymentResponse()
    {
        return $this->paymentResponse;
    }

    /**
     * @param PaymentResponse $paymentResponse
     * @return DuplicatePaymentResult
     */
    public function setPaymentResponse($paymentResponse)
    {
        $this->paymentResponse = $paymentResponse;
        return $this;
    }

    /**
     * @return OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param OrderResponse $orderResponse
     * @return DuplicatePaymentResult
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * @return CardResponse
     */
    public function getCardResponse()
    {
        return $this->cardResponse;
    }

    /**
     * @param CardResponse $cardResponse
     * @return DuplicatePaymentResult
     */
    public function setCardResponse($cardResponse)
    {
        $this->cardResponse = $cardResponse;
        return $this;
    }

    /**
     * @return AuthorizationResponse
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }

    /**
     * @param AuthorizationResponse $authorizationResponse
     * @return DuplicatePaymentResult
     */
    public function setAuthorizationResponse($authorizationResponse)
    {
        $this->authorizationResponse = $authorizationResponse;
        return $this;
    }

    /**
     * @return CaptureResponse
     */
    public function getCaptureResponse()
    {
        return $this->captureResponse;
    }

    /**
     * @param CaptureResponse $captureResponse
     * @return DuplicatePaymentResult
     */
    public function setCaptureResponse($captureResponse)
    {
        $this->captureResponse = $captureResponse;
        return $this;
    }

    /**
     * @return CustomerResponse
     */
    public function getCustomerResponse()
    {
        return $this->customerResponse;
    }

    /**
     * @param CustomerResponse $customerResponse
     * @return DuplicatePaymentResult
     */
    public function setCustomerResponse($customerResponse)
    {
        $this->customerResponse = $customerResponse;
        return $this;
    }

    /**
     * @return MarkResponse
     */
    public function getMarkResponse()
    {
        return $this->markResponse;
    }

    /**
     * @param MarkResponse $markResponse
     * @return DuplicatePaymentResult
     */
    public function setMarkResponse($markResponse)
    {
        $this->markResponse = $markResponse;
        return $this;
    }

    /**
     * @return ThreeDSResponse
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param ThreeDSResponse $threeDSResponse
     * @return DuplicatePaymentResult
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }

    /**
     * @return ExtraResponse
     */
    public function getExtraResponse()
    {
        return $this->extraResponse;
    }

    /**
     * @param ExtraResponse $extraResponse
     * @return DuplicatePaymentResult
     */
    public function setExtraResponse($extraResponse)
    {
        $this->extraResponse = $extraResponse;
        return $this;
    }

    /**
     * @return FraudManagementResponse
     */
    public function getFraudManagementResponse()
    {
        return $this->fraudManagementResponse;
    }

    /**
     * @param FraudManagementResponse $fraudManagementResponse
     * @return DuplicatePaymentResult
     */
    public function setFraudManagementResponse($fraudManagementResponse)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
        return $this;
    }
}
