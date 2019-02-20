<?php

namespace Syclass\Entity;

class ItemMeta
{
    private $sMulti;

    private $sValue;

    private $fkIItem;

    private $fkIField;

    public function getSMulti(): ?string
    {
        return $this->sMulti;
    }

    public function getSValue(): ?string
    {
        return $this->sValue;
    }

    public function setSValue(?string $sValue): self
    {
        $this->sValue = $sValue;

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

    public function getFkIField(): ?MetaFields
    {
        return $this->fkIField;
    }

    public function setFkIField(?MetaFields $fkIField): self
    {
        $this->fkIField = $fkIField;

        return $this;
    }
}
