<?php
namespace LTD_API;

class ProtectionInformation
{
    private $protectedTicketsCount;
    private $totalProtectionPrice;
	
    public function getProtectedTicketsCount()
    {
        return $this->protectedTicketsCount;
    }
    public function setProtectedTicketsCount($protectedTicketsCount)
    {
        $this->protectedTicketsCount = $protectedTicketsCount;
    }

    public function getTotalProtectionPrice()
    {
        return $this->totalProtectionPrice;
    }
    public function setTotalProtectionPrice($totalProtectionPrice)
    {
        $this->totalProtectionPrice = $totalProtectionPrice;
    }
}
