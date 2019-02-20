<?php

namespace Syclass\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class MetaFields
{
    private $pkIId;

    private $sName;

    private $sSlug;

    private $eType;

    private $sOptions;

    private $bRequired;

    private $bSearchable;

    private $fkICategory;

    public function __construct()
    {
        $this->fkICategory = new ArrayCollection();
    }

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

    public function getEType(): ?string
    {
        return $this->eType;
    }

    public function setEType(?string $eType): self
    {
        $this->eType = $eType;

        return $this;
    }

    public function getSOptions(): ?string
    {
        return $this->sOptions;
    }

    public function setSOptions(?string $sOptions): self
    {
        $this->sOptions = $sOptions;

        return $this;
    }

    public function getBRequired(): ?bool
    {
        return $this->bRequired;
    }

    public function setBRequired(bool $bRequired): self
    {
        $this->bRequired = $bRequired;

        return $this;
    }

    public function getBSearchable(): ?bool
    {
        return $this->bSearchable;
    }

    public function setBSearchable(bool $bSearchable): self
    {
        $this->bSearchable = $bSearchable;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getFkICategory(): Collection
    {
        return $this->fkICategory;
    }

    public function addFkICategory(Category $fkICategory): self
    {
        if (!$this->fkICategory->contains($fkICategory)) {
            $this->fkICategory[] = $fkICategory;
            $fkICategory->addFkIField($this);
        }

        return $this;
    }

    public function removeFkICategory(Category $fkICategory): self
    {
        if ($this->fkICategory->contains($fkICategory)) {
            $this->fkICategory->removeElement($fkICategory);
            $fkICategory->removeFkIField($this);
        }

        return $this;
    }
}
