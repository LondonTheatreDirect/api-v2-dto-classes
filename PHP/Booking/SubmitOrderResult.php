<?php
namespace LTD_API;

class SubmitOrderResult
{
    private $success;
    private $paymentRedirectUrl;
    
    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getPaymentRedirectUrl()
    {
        return $this->paymentRedirectUrl;
    }
    public function setPaymentRedirectUrl($paymentRedirectUrl)
    {
        $this->paymentRedirectUrl = $paymentRedirectUrl;
    }
}

