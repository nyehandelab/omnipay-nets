<?php

namespace Nyehandel\Omnipay\Nets\Message;

/**
 * Nets Easy Checkout Authorize Request
 */
class NetsEasyUpdateReferenceInformationRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('paymentId', 'reference');

        return [
            'reference' => $this->getReference(),
            'checkoutUrl' => $this->getCheckoutUrl(),
        ];
    }

    public function getCheckoutUrl()
    {
        return $this->getParameter('checkoutUrl');
    }

    public function setCheckoutUrl($value)
    {
        return $this->setParameter('checkoutUrl', $value);
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/payments/' . $this->getPaymentId() . '/referenceinformation';
    }

    public function sendData($data)
    {
        $httpResponse = $this->httpClient->request(
            'PUT',
            $this->getEndpoint(),
            $this->getHeaders(),
            json_encode($data),
        );

        return new NetsEasyUpdateOrderResponse($this, $this->getResponseBody($httpResponse));
    }
}
