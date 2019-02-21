<?php

namespace Syclass\Core\Entity;

class Log
{
    private $id;

    private $dtDate;

    private $sSection;

    private $sAction;

    private $fkIId;

    private $sData;

    private $sIp;

    private $sWho;

    private $fkIWhoId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDtDate(): ?\DateTimeInterface
    {
        return $this->dtDate;
    }

    public function setDtDate(\DateTimeInterface $dtDate): self
    {
        $this->dtDate = $dtDate;

        return $this;
    }

    public function getSSection(): ?string
    {
        return $this->sSection;
    }

    public function setSSection(string $sSection): self
    {
        $this->sSection = $sSection;

        return $this;
    }

    public function getSAction(): ?string
    {
        return $this->sAction;
    }

    public function setSAction(string $sAction): self
    {
        $this->sAction = $sAction;

        return $this;
    }

    public function getFkIId(): ?int
    {
        return $this->fkIId;
    }

    public function setFkIId(int $fkIId): self
    {
        $this->fkIId = $fkIId;

        return $this;
    }

    public function getSData(): ?string
    {
        return $this->sData;
    }

    public function setSData(string $sData): self
    {
        $this->sData = $sData;

        return $this;
    }

    public function getSIp(): ?string
    {
        return $this->sIp;
    }

    public function setSIp(string $sIp): self
    {
        $this->sIp = $sIp;

        return $this;
    }

    public function getSWho(): ?string
    {
        return $this->sWho;
    }

    public function setSWho(string $sWho): self
    {
        $this->sWho = $sWho;

        return $this;
    }

    public function getFkIWhoId(): ?int
    {
        return $this->fkIWhoId;
    }

    public function setFkIWhoId(int $fkIWhoId): self
    {
        $this->fkIWhoId = $fkIWhoId;

        return $this;
    }
}
