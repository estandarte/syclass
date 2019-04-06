<?php

namespace Syclass\Core\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class Item
{
    private $id;
    private $pubDate;
    private $modDate;
    private $fPrice;
    private $iPrice;
    private $contactName;
    private $contactEmail;
    private $premium;
    private $ip;
    private $enabled;
    private $active;
    private $spam;
    private $secret;
    private $showEmail;
    private $expiration;
    private $user;
    private $category;
    private $currency;

    private $description;
    /**
     * ItemLocation
     **/
    private $location;
    public function __construct()
    {
        $this->description = new ArrayCollection();
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
     * Get the value of Pub Date
     *
     * @return mixed
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * Set the value of Pub Date
     *
     * @param mixed pubDate
     *
     * @return self
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get the value of Mod Date
     *
     * @return mixed
     */
    public function getModDate()
    {
        return $this->modDate;
    }

    /**
     * Set the value of Mod Date
     *
     * @param mixed modDate
     *
     * @return self
     */
    public function setModDate($modDate)
    {
        $this->modDate = $modDate;

        return $this;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getFPrice()
    {
        return $this->fPrice;
    }

    /**
     * Set the value of Price
     *
     * @param mixed fPrice
     *
     * @return self
     */
    public function setFPrice($fPrice)
    {
        $this->fPrice = $fPrice;

        return $this;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getIPrice()
    {
        return $this->iPrice;
    }

    /**
     * Set the value of Price
     *
     * @param mixed iPrice
     *
     * @return self
     */
    public function setIPrice($iPrice)
    {
        $this->iPrice = $iPrice;

        return $this;
    }

    /**
     * Get the value of Contact Name
     *
     * @return mixed
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set the value of Contact Name
     *
     * @param mixed contactName
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get the value of Contact Email
     *
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set the value of Contact Email
     *
     * @param mixed contactEmail
     *
     * @return self
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get the value of Premium
     *
     * @return mixed
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set the value of Premium
     *
     * @param mixed premium
     *
     * @return self
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get the value of Ip
     *
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set the value of Ip
     *
     * @param mixed Ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get the value of Enabled
     *
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of Enabled
     *
     * @param mixed enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

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
     * Get the value of Spam
     *
     * @return mixed
     */
    public function getSpam()
    {
        return $this->spam;
    }

    /**
     * Set the value of Spam
     *
     * @param mixed spam
     *
     * @return self
     */
    public function setSpam($spam)
    {
        $this->spam = $spam;

        return $this;
    }

    /**
     * Get the value of Secret
     *
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set the value of Secret
     *
     * @param mixed secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get the value of Show Email
     *
     * @return mixed
     */
    public function getShowEmail()
    {
        return $this->showEmail;
    }

    /**
     * Set the value of Show Email
     *
     * @param mixed showEmail
     *
     * @return self
     */
    public function setShowEmail($showEmail)
    {
        $this->showEmail = $showEmail;

        return $this;
    }

    /**
     * Get the value of Expiration
     *
     * @return mixed
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of Expiration
     *
     * @param mixed expiration
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of Currency
     *
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of Currency
     *
     * @param mixed currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return Collection|ItemDescription[]
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(ItemDescription $description): self
    {
        if (!$this->description->contains($description)) {
            $this->description[] = $description;
            $description->setItem($this);
        }

        return $this;
    }

    public function removeDescription(ItemDescription $description): self
    {
        if ($this->description->contains($description)) {
            $this->description->removeElement($description);
            // set the owning side to null (unless already changed)
            if ($description->getItem() === $this) {
                $description->setItem(null);
            }
        }

        return $this;
    }


    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Location
     *
     * @return mixed
     */
    public function getLocation() : ?ItemLocation
    {
        return $this->location;
    }

    /**
     * Set the value of Location
     *
     * @param mixed location
     *
     * @return self
     */
    public function setLocation(ItemLocation $location)
    {
        $this->location = $location;
        $this->location->setItem($this);
        return $this;
    }

}
