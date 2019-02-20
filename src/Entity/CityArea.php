<?php

namespace Syclass\Entity;

class CityArea
{
    private $pkIId;

    private $sName;

    private $fkICity;

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

    public function getFkICity(): ?City
    {
        return $this->fkICity;
    }

    public function setFkICity(?City $fkICity): self
    {
        $this->fkICity = $fkICity;

        return $this;
    }
}
