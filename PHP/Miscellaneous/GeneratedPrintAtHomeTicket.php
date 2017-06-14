<?php
namespace LTD_API;


class GeneratedPrintAtHomeTicket
{
    //instance of PrintAtHomeTicketInfo
	private $ticket;
	//instance of int?
	private $fileSize;
	private $downloadUrl;
	
	public function getTicket()
    {
        return $this->ticket;
    }
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

	public function getFileSize()
    {
        return $this->fileSize;
    }
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

	public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
}

