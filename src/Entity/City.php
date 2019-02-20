<?php

namespace Syclass\Entity;

class City
{
    private $pkIId;

    private $sName;

    private $sSlug;

    private $bActive;

    private $fkIRegion;

    private $fkCCountryCode;

    public function getPkIId(): ?int
    {
        return $this->pkIId;
    }

    public function getSName(): ?string
    {
        return $this->sName;
    }

    public function setSName(string $sName): self
    {
        $this->sName = $sName;

        return $this;
    }

    public function getSSlug(): ?string
    {
        return $this->sSlug;
    }

    public function setSSlug(string $sSlug): self
    {
        $this->sSlug = $sSlug;

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

    public function getFkIRegion(): ?Region
    {
        return $this->fkIRegion;
    }

    public function setFkIRegion(?Region $fkIRegion): self
    {
        $this->fkIRegion = $fkIRegion;

        return $this;
    }

    public function getFkCCountryCode(): ?Country
    {
        return $this->fkCCountryCode;
    }

    public function setFkCCountryCode(?Country $fkCCountryCode): self
    {
        $this->fkCCountryCode = $fkCCountryCode;

        return $this;
    }
}
