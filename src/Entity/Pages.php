<?php

namespace Syclass\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Pages
{
    private $pkIId;

    private $sInternalName;

    private $bIndelible;

    private $bLink;

    private $dtPubDate;

    private $dtModDate;

    private $iOrder;

    private $sMeta;

    private $fkCLocaleCode;

    public function __construct()
    {
        $this->fkCLocaleCode = new ArrayCollection();
    }

    public function getPkIId(): ?int
    {
        return $this->pkIId;
    }

    public function getSInternalName(): ?string
    {
        return $this->sInternalName;
    }

    public function setSInternalName(?string $sInternalName): self
    {
        $this->sInternalName = $sInternalName;

        return $this;
    }

    public function getBIndelible(): ?bool
    {
        return $this->bIndelible;
    }

    public function setBIndelible(bool $bIndelible): self
    {
        $this->bIndelible = $bIndelible;

        return $this;
    }

    public function getBLink(): ?bool
    {
        return $this->bLink;
    }

    public function setBLink(bool $bLink): self
    {
        $this->bLink = $bLink;

        return $this;
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

    public function getDtModDate(): ?\DateTimeInterface
    {
        return $this->dtModDate;
    }

    public function setDtModDate(?\DateTimeInterface $dtModDate): self
    {
        $this->dtModDate = $dtModDate;

        return $this;
    }

    public function getIOrder(): ?int
    {
        return $this->iOrder;
    }

    public function setIOrder(int $iOrder): self
    {
        $this->iOrder = $iOrder;

        return $this;
    }

    public function getSMeta(): ?string
    {
        return $this->sMeta;
    }

    public function setSMeta(?string $sMeta): self
    {
        $this->sMeta = $sMeta;

        return $this;
    }

    /**
     * @return Collection|Locale[]
     */
    public function getFkCLocaleCode(): Collection
    {
        return $this->fkCLocaleCode;
    }

    public function addFkCLocaleCode(Locale $fkCLocaleCode): self
    {
        if (!$this->fkCLocaleCode->contains($fkCLocaleCode)) {
            $this->fkCLocaleCode[] = $fkCLocaleCode;
        }

        return $this;
    }

    public function removeFkCLocaleCode(Locale $fkCLocaleCode): self
    {
        if ($this->fkCLocaleCode->contains($fkCLocaleCode)) {
            $this->fkCLocaleCode->removeElement($fkCLocaleCode);
        }

        return $this;
    }
}
