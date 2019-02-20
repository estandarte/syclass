<?php

namespace Syclass\Entity;

class ItemStats
{
    private $dtDate;

    private $iNumViews;

    private $iNumSpam;

    private $iNumRepeated;

    private $iNumBadClassified;

    private $iNumOffensive;

    private $iNumExpired;

    private $iNumPremiumViews;

    private $fkIItem;

    public function getDtDate(): ?\DateTimeInterface
    {
        return $this->dtDate;
    }

    public function getINumViews(): ?int
    {
        return $this->iNumViews;
    }

    public function setINumViews(int $iNumViews): self
    {
        $this->iNumViews = $iNumViews;

        return $this;
    }

    public function getINumSpam(): ?int
    {
        return $this->iNumSpam;
    }

    public function setINumSpam(int $iNumSpam): self
    {
        $this->iNumSpam = $iNumSpam;

        return $this;
    }

    public function getINumRepeated(): ?int
    {
        return $this->iNumRepeated;
    }

    public function setINumRepeated(int $iNumRepeated): self
    {
        $this->iNumRepeated = $iNumRepeated;

        return $this;
    }

    public function getINumBadClassified(): ?int
    {
        return $this->iNumBadClassified;
    }

    public function setINumBadClassified(int $iNumBadClassified): self
    {
        $this->iNumBadClassified = $iNumBadClassified;

        return $this;
    }

    public function getINumOffensive(): ?int
    {
        return $this->iNumOffensive;
    }

    public function setINumOffensive(int $iNumOffensive): self
    {
        $this->iNumOffensive = $iNumOffensive;

        return $this;
    }

    public function getINumExpired(): ?int
    {
        return $this->iNumExpired;
    }

    public function setINumExpired(int $iNumExpired): self
    {
        $this->iNumExpired = $iNumExpired;

        return $this;
    }

    public function getINumPremiumViews(): ?int
    {
        return $this->iNumPremiumViews;
    }

    public function setINumPremiumViews(int $iNumPremiumViews): self
    {
        $this->iNumPremiumViews = $iNumPremiumViews;

        return $this;
    }

    public function getFkIItem(): ?Item
    {
        return $this->fkIItem;
    }

    public function setFkIItem(?Item $fkIItem): self
    {
        $this->fkIItem = $fkIItem;

        return $this;
    }
}
