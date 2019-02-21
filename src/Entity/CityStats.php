<?php

namespace Syclass\Core\Entity;

class CityStats
{
    private $iNumItems;

    private $fkICity;

    public function getINumItems(): ?int
    {
        return $this->iNumItems;
    }

    public function setINumItems(int $iNumItems): self
    {
        $this->iNumItems = $iNumItems;

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
