<?php

namespace Syclass\Entity;

class UserEmailTmp
{
    private $sNewEmail;

    private $dtDate;

    private $fkIUser;

    public function getSNewEmail(): ?string
    {
        return $this->sNewEmail;
    }

    public function setSNewEmail(string $sNewEmail): self
    {
        $this->sNewEmail = $sNewEmail;

        return $this;
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

    public function getFkIUser(): ?User
    {
        return $this->fkIUser;
    }

    public function setFkIUser(?User $fkIUser): self
    {
        $this->fkIUser = $fkIUser;

        return $this;
    }
}
