<?php

namespace Syclass\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Locale
{
    private $code;

    private $name;

    private $shortName;

    private $description;

    private $version;

    private $authorName;

    private $authorUrl;

    private $currencyFormat;

    private $decPoint;

    private $thousandsSep;

    private $numDec;

    private $dateFormat;

    private $stopWords;

    private $enabled;

    private $enabledBo;

    private $category;

    private $page;

    private $user;

    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->page = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorUrl(): ?string
    {
        return $this->authorUrl;
    }

    public function setAuthorUrl(string $authorUrl): self
    {
        $this->authorUrl = $authorUrl;

        return $this;
    }

    public function getCurrencyFormat(): ?string
    {
        return $this->currencyFormat;
    }

    public function setCurrencyFormat(string $currencyFormat): self
    {
        $this->currencyFormat = $currencyFormat;

        return $this;
    }

    public function getDecPoint(): ?string
    {
        return $this->decPoint;
    }

    public function setDecPoint(?string $decPoint): self
    {
        $this->decPoint = $decPoint;

        return $this;
    }

    public function getThousandsSep(): ?string
    {
        return $this->thousandsSep;
    }

    public function setThousandsSep(?string $thousandsSep): self
    {
        $this->thousandsSep = $thousandsSep;

        return $this;
    }

    public function getNumDec(): ?bool
    {
        return $this->numDec;
    }

    public function setNumDec(?bool $numDec): self
    {
        $this->numDec = $numDec;

        return $this;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    public function getStopWords(): ?string
    {
        return $this->stopWords;
    }

    public function setStopWords(?string $stopWords): self
    {
        $this->stopWords = $stopWords;

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

    public function getEnabledBo(): ?bool
    {
        return $this->enabledBo;
    }

    public function setEnabledBo(bool $enabledBo): self
    {
        $this->enabledBo = $enabledBo;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
            $category->addLocale($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->category->contains($category)) {
            $this->category->removeElement($category);
            $category->removeLocale($this);
        }

        return $this;
    }

    /**
     * @return Collection|Pages[]
     */
    public function getPage(): Collection
    {
        return $this->page;
    }

    public function addPage(Pages $page): self
    {
        if (!$this->page->contains($page)) {
            $this->page[] = $page;
            $page->addLocale($this);
        }

        return $this;
    }

    public function removePage(Pages $page): self
    {
        if ($this->page->contains($page)) {
            $this->page->removeElement($page);
            $page->removeLocale($this);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->addLocale($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            $user->removeLocale($this);
        }

        return $this;
    }
}
