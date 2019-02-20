<?php

namespace Syclass\Entity;

class Alerts
{
    private $pkIId;

    private $sEmail;

    private $fkIUserId;

    private $sSearch;

    private $sSecret;

    private $bActive;

    private $eType;

    private $dtDate;

    private $dtUnsubDate;

    public function getPkIId(): ?int
    {
        return $this->pkIId;
    }

    public function getSEmail(): ?string
    {
        return $this->sEmail;
    }

    public function setSEmail(?string $sEmail): self
    {
        $this->sEmail = $sEmail;

        return $this;
    }

    public function getFkIUserId(): ?int
    {
        return $this->fkIUserId;
    }

    public function setFkIUserId(?int $fkIUserId): self
    {
        $this->fkIUserId = $fkIUserId;

        return $this;
    }

    public function getSSearch(): ?string
    {
        return $this->sSearch;
    }

    public function setSSearch(?string $sSearch): self
    {
        $this->sSearch = $sSearch;

        return $this;
    }

    public function getSSecret(): ?string
    {
        return $this->sSecret;
    }

    public function setSSecret(?string $sSecret): self
    {
        $this->sSecret = $sSecret;

        return $this;
    }

    public function getBActive(): ?bool
    {
        return $this->bActive;
    }

    public function setBActive(bool $bActive): self
    {
        $this->bActive = $bActive;

        return $this;
    }

    public function getEType(): ?string
    {
        return $this->eType;
    }

    public function setEType(?string $eType): self
    {
        $this->eType = $eType;

        return $this;
    }

    public function getDtDate(): ?\DateTimeInterface
    {
        return $this->dtDate;
    }

    public function setDtDate(?\DateTimeInterface $dtDate): self
    {
        $this->dtDate = $dtDate;

        return $this;
    }

    public function getDtUnsubDate(): ?\DateTimeInterface
    {
        return $this->dtUnsubDate;
    }

    public function setDtUnsubDate(?\DateTimeInterface $dtUnsubDate): self
    {
        $this->dtUnsubDate = $dtUnsubDate;

        return $this;
    }
}
