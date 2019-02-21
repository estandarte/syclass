<?php

namespace Syclass\Core\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class User
{
    private $id;

    private $regDate;

    private $modDate;

    private $name;

    private $username;

    private $sPassword;

    private $secret;

    private $email;

    private $website;

    private $phoneLand;

    private $phoneMobile;

    private $enabled;

    private $active;

    private $passCode;

    private $passDate;

    private $passIp;

    private $sCountry;

    private $address;

    private $zip;

    private $sRegion;

    private $sCity;

    private $sCityArea;

    private $coordLat;

    private $coordLong;

    private $company;

    private $items;

    private $comments;

    private $accessDate;

    private $accessIp;

    private $country;

    private $region;

    private $city;

    private $cityArea;

    private $locale;

    public function __construct()
    {
        $this->locale = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegDate(): ?\DateTimeInterface
    {
        return $this->regDate;
    }

    public function setRegDate(\DateTimeInterface $regDate): self
    {
        $this->regDate = $regDate;

        return $this;
    }

    public function getModDate(): ?\DateTimeInterface
    {
        return $this->modDate;
    }

    public function setModDate(?\DateTimeInterface $modDate): self
    {
        $this->modDate = $modDate;

        return $this;
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getPhoneLand(): ?string
    {
        return $this->phoneLand;
    }

    public function setPhoneLand(?string $phoneLand): self
    {
        $this->phoneLand = $phoneLand;

        return $this;
    }

    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }

    public function setPhoneMobile(?string $phoneMobile): self
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPassCode(): ?string
    {
        return $this->passCode;
    }

    public function setPassCode(?string $passCode): self
    {
        $this->passCode = $passCode;

        return $this;
    }

    public function getPassDate(): ?\DateTimeInterface
    {
        return $this->passDate;
    }

    public function setPassDate(?\DateTimeInterface $passDate): self
    {
        $this->passDate = $passDate;

        return $this;
    }

    public function getPassIp(): ?string
    {
        return $this->passIp;
    }

    public function setPassIp(?string $passIp): self
    {
        $this->passIp = $passIp;

        return $this;
    }

    public function getSCountry(): ?string
    {
        return $this->sCountry;
    }

    public function setSCountry(?string $sCountry): self
    {
        $this->sCountry = $sCountry;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getSRegion(): ?string
    {
        return $this->sRegion;
    }

    public function setSRegion(?string $sRegion): self
    {
        $this->sRegion = $sRegion;

        return $this;
    }

    public function getSCity(): ?string
    {
        return $this->sCity;
    }

    public function setSCity(?string $sCity): self
    {
        $this->sCity = $sCity;

        return $this;
    }

    public function getSCityArea(): ?string
    {
        return $this->sCityArea;
    }

    public function setSCityArea(?string $sCityArea): self
    {
        $this->sCityArea = $sCityArea;

        return $this;
    }

    public function getCoordLat()
    {
        return $this->coordLat;
    }

    public function setCoordLat($coordLat): self
    {
        $this->coordLat = $coordLat;

        return $this;
    }

    public function getCoordLong()
    {
        return $this->coordLong;
    }

    public function setCoordLong($coordLong): self
    {
        $this->coordLong = $coordLong;

        return $this;
    }

    public function getCompany(): ?bool
    {
        return $this->company;
    }

    public function setCompany(bool $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getItems(): ?int
    {
        return $this->items;
    }

    public function setItems(?int $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getComments(): ?int
    {
        return $this->comments;
    }

    public function setComments(?int $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getAccessDate(): ?\DateTimeInterface
    {
        return $this->accessDate;
    }

    public function setAccessDate(\DateTimeInterface $accessDate): self
    {
        $this->accessDate = $accessDate;

        return $this;
    }

    public function getAccessIp(): ?string
    {
        return $this->accessIp;
    }

    public function setAccessIp(string $accessIp): self
    {
        $this->accessIp = $accessIp;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityArea(): ?CityArea
    {
        return $this->cityArea;
    }

    public function setCityArea(?CityArea $cityArea): self
    {
        $this->cityArea = $cityArea;

        return $this;
    }

    /**
     * @return Collection|Locale[]
     */
    public function getLocale(): Collection
    {
        return $this->locale;
    }

    public function addLocale(Locale $locale): self
    {
        if (!$this->locale->contains($locale)) {
            $this->locale[] = $locale;
        }

        return $this;
    }

    public function removeLocale(Locale $locale): self
    {
        if ($this->locale->contains($locale)) {
            $this->locale->removeElement($locale);
        }

        return $this;
    }
}
