<?php

namespace Syclass\Core\Entity;

class City
{
    /**
     * City ID
     **/
    private $id;

    /**
     * City name
     **/
    private $name;

    /**
     * City slug
     **/
    private $slug;

    /**
     * is this city active?
     **/
    private $active = 1;

    /**
     *
     * @var Region city region
     **/
    private $region;

    /**
     *
     * @var Country City country
     **/
    private $country;

    public function __construct($name, Region $region)
    {
        $this->name = $name;
        $this->setRegion($region);
        $this->setCountry($this->getRegion()->getCountry());
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
     * Get the value of Region
     *
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of Region
     *
     * @param mixed region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;

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
