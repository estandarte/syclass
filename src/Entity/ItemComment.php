<?php

namespace Syclass\Core\Entity;

class ItemComment
{
    private $pkIId;

    private $dtPubDate;

    private $sTitle;

    private $sAuthorName;

    private $sAuthorEmail;

    private $sBody;

    private $bEnabled;

    private $bActive;

    private $bSpam;

    private $fkIItem;

    private $fkIUser;

    public function getPkIId(): ?int
    {
        return $this->pkIId;
    }

    public function getDtPubDate(): ?\DateTimeInterface
    {
        return $this->dtPubDate;
    }

    public function setDtPubDate(\DateTimeInterface $dtPubDate): self
    {
        $this->dtPubDate = $dtPubDate;

        return $this;
    }

    public function getSTitle(): ?string
    {
        return $this->sTitle;
    }

    public function setSTitle(string $sTitle): self
    {
        $this->sTitle = $sTitle;

        return $this;
    }

    public function getSAuthorName(): ?string
    {
        return $this->sAuthorName;
    }

    public function setSAuthorName(string $sAuthorName): self
    {
        $this->sAuthorName = $sAuthorName;

        return $this;
    }

    public function getSAuthorEmail(): ?string
    {
        return $this->sAuthorEmail;
    }

    public function setSAuthorEmail(string $sAuthorEmail): self
    {
        $this->sAuthorEmail = $sAuthorEmail;

        return $this;
    }

    public function getSBody(): ?string
    {
        return $this->sBody;
    }

    public function setSBody(string $sBody): self
    {
        $this->sBody = $sBody;

        return $this;
    }

    public function getBEnabled(): ?bool
    {
        return $this->bEnabled;
    }

    public function setBEnabled(bool $bEnabled): self
    {
        $this->bEnabled = $bEnabled;

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

    public function getBSpam(): ?bool
    {
        return $this->bSpam;
    }

    public function setBSpam(bool $bSpam): self
    {
        $this->bSpam = $bSpam;

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

    public function getFkIUser(): ?User
    {
        return $this->fkIUser;
    }

    public function setFkIUser(?User $fkIUser): self
    {
        $this->fkIUser = $fkIUser;

        return $this;
    }
}
