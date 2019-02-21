<?php

namespace Syclass\Core\Entity;

class ItemDescription
{
    private $itemId;

    private $localeCode;

    private $title;

    private $description;

    private $item;

    private $locale;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getLocaleCode(): ?string
    {
        return $this->localeCode;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;
        $this->itemId = $item->getId();
        return $this;
    }

    public function getLocale(): ?Locale
    {
        return $this->locale;
    }

    public function setLocale(?Locale $locale): self
    {
        $this->locale = $locale;
        $this->localeCode = $locale->getCode();

        return $this;
    }
}
