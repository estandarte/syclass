<?php

namespace Syclass\Core\Entity;

class CategoryStats
{
    private $iNumItems;

    private $fkICategory;

    public function getINumItems(): ?int
    {
        return $this->iNumItems;
    }

    public function setINumItems(int $iNumItems): self
    {
        $this->iNumItems = $iNumItems;

        return $this;
    }

    public function getFkICategory(): ?Category
    {
        return $this->fkICategory;
    }

    public function setFkICategory(?Category $fkICategory): self
    {
        $this->fkICategory = $fkICategory;

        return $this;
    }
}
