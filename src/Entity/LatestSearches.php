<?php

namespace Syclass\Entity;

class LatestSearches
{
    private $id;

    private $dDate;

    private $sSearch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDDate(): ?\DateTimeInterface
    {
        return $this->dDate;
    }

    public function setDDate(\DateTimeInterface $dDate): self
    {
        $this->dDate = $dDate;

        return $this;
    }

    public function getSSearch(): ?string
    {
        return $this->sSearch;
    }

    public function setSSearch(string $sSearch): self
    {
        $this->sSearch = $sSearch;

        return $this;
    }
}
