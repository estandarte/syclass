<?php

namespace Syclass\Entity;

class AlertsSent
{
    private $dDate;

    private $iNumAlertsSent;

    public function getDDate(): ?\DateTimeInterface
    {
        return $this->dDate;
    }

    public function getINumAlertsSent(): ?int
    {
        return $this->iNumAlertsSent;
    }

    public function setINumAlertsSent(int $iNumAlertsSent): self
    {
        $this->iNumAlertsSent = $iNumAlertsSent;

        return $this;
    }
}
