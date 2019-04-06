<?php

namespace Syclass\Core\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Page
{
    private $id;

    private $internalName;

    private $indelible;

    private $link;
    /**
     * @var \DateTime
     */
    private $pubDate;

    /**
    * @var \DateTime
    */
    private $modDate;

    private $order;

    private $meta;

    private $localeCode;
    /**
     * @var PageDescription
     */
    private $description;


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
     * Get the value of Internal Name
     *
     * @return mixed
     */
    public function getInternalName()
    {
        return $this->internalName;
    }

    /**
     * Set the value of Internal Name
     *
     * @param mixed internalName
     *
     * @return self
     */
    public function setInternalName($internalName)
    {
        $this->internalName = $internalName;

        return $this;
    }

    /**
     * Get the value of Indelible
     *
     * @return mixed
     */
    public function getIndelible()
    {
        return $this->indelible;
    }

    /**
     * Set the value of Indelible
     *
     * @param mixed indelible
     *
     * @return self
     */
    public function setIndelible($indelible)
    {
        $this->indelible = $indelible;

        return $this;
    }

    /**
     * Get the value of Link
     *
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of Link
     *
     * @param mixed link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of Pub Date
     *
     * @return \DateTime
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * Set the value of Pub Date
     *
     * @param \DateTime pubDate
     *
     * @return self
     */
    public function setPubDate(\DateTime $pubDate)
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get the value of Mod Date
     *
     * @return \DateTime
     */
    public function getModDate()
    {
        return $this->modDate;
    }

    /**
     * Set the value of Mod Date
     *
     * @param \DateTime modDate
     *
     * @return self
     */
    public function setModDate(\DateTime $modDate)
    {
        $this->modDate = $modDate;

        return $this;
    }

    /**
     * Get the value of Order
     *
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of Order
     *
     * @param mixed order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get the value of Meta
     *
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the value of Meta
     *
     * @param mixed meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Get the value of Locale Code
     *
     * @return mixed
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Set the value of Locale Code
     *
     * @param mixed localeCode
     *
     * @return self
     */
    public function setLocaleCode($localeCode)
    {
        $this->localeCode = $localeCode;

        return $this;
    }


    /**
     * Get the value of Description
     *
     * @return PageDescription
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param PageDescription description
     *
     * @return self
     */
    public function setDescription(PageDescription $description)
    {
        $this->description = $description;

        return $this;
    }

}
