<?php

namespace Syclass\Entity;

class RegionStats
{
    private $iNumItems;

    private $fkIRegion;

    public function getINumItems(): ?int
    {
        return $this->iNumItems;
    }

    public function setINumItems(int $iNumItems): self
    {
        $this->iNumItems = $iNumItems;

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
}
