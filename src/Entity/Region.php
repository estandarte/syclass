<?php

namespace Syclass\Core\Entity;

class Region
{
    private $id;

    private $name;

    private $slug;

    private $active = 1;
    /**
     * Country
     **/
    private $country;

    public function __construct(string $name, Country $country)
    {
        $this->name = $name;
        $this->country = $country;
        $this->setSlug($this->toSlug($name));
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Slug
     *
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of Slug
     *
     * @param mixed slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of Active
     *
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of Active
     *
     * @param mixed active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of Country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of Country
     *
     * @param mixed country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
    private function toSlug(string $name) : string
    {
        return strtolower(preg_replace("/[^a-zA-Z_]/", '',preg_replace("/[ -]+/", "_", $name)));
    }

}
