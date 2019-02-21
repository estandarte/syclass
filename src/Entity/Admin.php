<?php

namespace Syclass\Core\Entity;

class Admin
{
    private $pkIId;

    private $sName;

    private $sUsername;

    private $sPassword;

    private $sEmail;

    private $sSecret;

    private $bModerator;

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

    public function getSUsername(): ?string
    {
        return $this->sUsername;
    }

    public function setSUsername(string $sUsername): self
    {
        $this->sUsername = $sUsername;

        return $this;
    }

    public function getSPassword(): ?string
    {
        return $this->sPassword;
    }

    public function setSPassword(string $sPassword): self
    {
        $this->sPassword = $sPassword;

        return $this;
    }

    public function getSEmail(): ?string
    {
        return $this->sEmail;
    }

    public function setSEmail(?string $sEmail): self
    {
        $this->sEmail = $sEmail;

        return $this;
    }

    public function getSSecret(): ?string
    {
        return $this->sSecret;
    }

    public function setSSecret(?string $sSecret): self
    {
        $this->sSecret = $sSecret;

        return $this;
    }

    public function getBModerator(): ?bool
    {
        return $this->bModerator;
    }

    public function setBModerator(bool $bModerator): self
    {
        $this->bModerator = $bModerator;

        return $this;
    }
}
