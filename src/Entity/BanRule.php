<?php

namespace Syclass\Entity;

class BanRule
{
    private $pkIId;

    private $sName;

    private $sIp;

    private $sEmail;

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

    public function getSIp(): ?string
    {
        return $this->sIp;
    }

    public function setSIp(string $sIp): self
    {
        $this->sIp = $sIp;

        return $this;
    }

    public function getSEmail(): ?string
    {
        return $this->sEmail;
    }

    public function setSEmail(string $sEmail): self
    {
        $this->sEmail = $sEmail;

        return $this;
    }
}
