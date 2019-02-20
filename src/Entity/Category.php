<?php

namespace Syclass\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Category
{
    private $id;

    private $expirationDays;

    private $position;

    private $enabled;

    private $priceEnabled;

    private $icon;

    private $parent;

    private $locale;

    private $field;

    public function __construct()
    {
        $this->locale = new ArrayCollection();
        $this->field = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpirationDays(): ?int
    {
        return $this->expirationDays;
    }

    public function setExpirationDays(int $expirationDays): self
    {
        $this->expirationDays = $expirationDays;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getPriceEnabled(): ?bool
    {
        return $this->priceEnabled;
    }

    public function setPriceEnabled(bool $priceEnabled): self
    {
        $this->priceEnabled = $priceEnabled;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection|Locale[]
     */
    public function getLocale(): Collection
    {
        return $this->locale;
    }

    public function addLocale(Locale $locale): self
    {
        if (!$this->locale->contains($locale)) {
            $this->locale[] = $locale;
        }

        return $this;
    }

    public function removeLocale(Locale $locale): self
    {
        if ($this->locale->contains($locale)) {
            $this->locale->removeElement($locale);
        }

        return $this;
    }

    /**
     * @return Collection|MetaFields[]
     */
    public function getField(): Collection
    {
        return $this->field;
    }

    public function addField(MetaFields $field): self
    {
        if (!$this->field->contains($field)) {
            $this->field[] = $field;
        }

        return $this;
    }

    public function removeField(MetaFields $field): self
    {
        if ($this->field->contains($field)) {
            $this->field->removeElement($field);
        }

        return $this;
    }
}
