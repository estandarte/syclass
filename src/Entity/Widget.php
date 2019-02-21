<?php

namespace Syclass\Core\Entity;

class Widget
{
    private $pkIId;

    private $sDescription;

    private $sLocation;

    private $eType;

    private $sContent;

    public function getPkIId(): ?int
    {
        return $this->pkIId;
    }

    public function getSDescription(): ?string
    {
        return $this->sDescription;
    }

    public function setSDescription(string $sDescription): self
    {
        $this->sDescription = $sDescription;

        return $this;
    }

    public function getSLocation(): ?string
    {
        return $this->sLocation;
    }

    public function setSLocation(string $sLocation): self
    {
        $this->sLocation = $sLocation;

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

    public function getSContent(): ?string
    {
        return $this->sContent;
    }

    public function setSContent(string $sContent): self
    {
        $this->sContent = $sContent;

        return $this;
    }
}
