<?php

namespace Syclass\Core\Entity;

class PluginCategory
{
    private $id;

    private $sPluginName;

    private $fkICategory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSPluginName(): ?string
    {
        return $this->sPluginName;
    }

    public function setSPluginName(string $sPluginName): self
    {
        $this->sPluginName = $sPluginName;

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
