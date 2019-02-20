<?php

namespace Syclass\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Syclass\Repository\AdsRepository")
 */
class Ads
{
    const NEW = 0;
    const PUBLISHED = 1;
    const FINALIZED = 2;
    private $id;
    private $url;
    private $itemId;
    private $status;
    private $pubDate;
    private $site;
    private $siteId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPubDate(): ?\DateTimeInterface
    {
        return $this->pubDate;
    }

    public function setPubDate(?\DateTimeInterface $pubDate): self
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;

        return $this;
    }
}
