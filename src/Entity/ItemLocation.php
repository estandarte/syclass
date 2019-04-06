<?php

namespace Syclass\Core\Entity;

class ItemLocation
{
    private $address;
    private $sCountry;

    private $sRegion;

    private $sCity;

    private $sCityArea;

    private $zip;

    private $coordLat;

    private $coordLong;

    private $item;

    private $country;

    private $region;

    private $city;

    private $cityArea;
    private $localeCode;

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
        return $this->Zip;
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

    public function getDCoordLat()
    {
        return $this->dCoordLat;
    }

    public function setDCoordLat($dCoordLat): self
    {
        $this->dCoordLat = $dCoordLat;

        return $this;
    }

    public function getDCoordLong()
    {
        return $this->dCoordLong;
    }

    public function setDCoordLong($dCoordLong): self
    {
        $this->dCoordLong = $dCoordLong;

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

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

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
}
