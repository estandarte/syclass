<?php

namespace Syclass\Entity;

class CountryStats
{
    private $iNumItems;

    private $fkCCountryCode;

    public function getINumItems(): ?int
    {
        return $this->iNumItems;
    }

    public function setINumItems(int $iNumItems): self
    {
        $this->iNumItems = $iNumItems;

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
