<?php
namespace LTD_API;

class SubmitOrderResult
{
    private $success;
    private $bookingReference;
    
    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getBookingReference()
    {
        return $this->bookingReference;
    }
    public function setBookingReference($bookingReference)
    {
        $this->bookingReference = $bookingReference;
    }
}

