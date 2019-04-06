<?php

namespace Syclass\Core\Entity;

class Country
{
    private $code;
    /**
     * Country name
     */
    private $name;

    /**
     * Country slug
     **/
    private $slug;

    public function __construct($name)
    {
        $this->setName($name);
        $this->setSlug($this->toSlug($name));
        $this->code = substr($this->getSlug(), 0, 2);
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    private function toSlug(string $name) : string
    {
        return strtolower(preg_replace("/[^a-zA-Z_]/", '',preg_replace("/[ -]+/", "_", $name)));
    }
}
