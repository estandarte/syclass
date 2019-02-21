<?php

namespace Syclass\Core\Entity;

class Cron
{
    private $id;

    private $eType;

    private $dLastExec;

    private $dNextExec;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDLastExec(): ?\DateTimeInterface
    {
        return $this->dLastExec;
    }

    public function setDLastExec(\DateTimeInterface $dLastExec): self
    {
        $this->dLastExec = $dLastExec;

        return $this;
    }

    public function getDNextExec(): ?\DateTimeInterface
    {
        return $this->dNextExec;
    }

    public function setDNextExec(\DateTimeInterface $dNextExec): self
    {
        $this->dNextExec = $dNextExec;

        return $this;
    }
}
