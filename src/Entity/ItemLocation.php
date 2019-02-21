<?php

namespace Syclass\Core\Entity;

class ItemLocation
{
    private $sCountry;

    private $sAddress;

    private $sZip;

    private $sRegion;

    private $sCity;

    private $sCityArea;

    private $dCoordLat;

    private $dCoordLong;

    private $fkIItem;

    private $fkCCountryCode;

    private $fkIRegion;

    private $fkICity;

    private $fkICityArea;

    private $address;

    private $zip;

    private $coordLat;

    private $coordLong;

    private $item;

    private $country;

    private $region;

    private $city;

    private $cityArea;
    private $itemId;
    private $localeCode;
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }
    public function getLocaleCode(): ?int
    {
        return $this->LocaleCode;
    }
    public function setLocaleCode($localeCode)
    {
        $this->localeCode = $localeCode;
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

    public function getSAddress(): ?string
    {
        return $this->sAddress;
    }

    public function setSAddress(?string $sAddress): self
    {
        $this->sAddress = $sAddress;

        return $this;
    }

    public function getSZip(): ?string
    {
        return $this->sZip;
    }

    public function setSZip(?string $sZip): self
    {
        $this->sZip = $sZip;

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

    public function getFkIItem(): ?Item
    {
        return $this->fkIItem;
    }

    public function setFkIItem(?Item $fkIItem): self
    {
        $this->fkIItem = $fkIItem;

        return $this;
    }

    public function getFkCCountryCode(): ?Country
    {
        return $this->fkCCountryCode;
    }

    public function setFkCCountryCode(?Country $fkCCountryCode): self
    {
        $this->fkCCountryCode = $fkCCountryCode;

        return $this;
    }

    public function getFkIRegion(): ?Region
    {
        return $this->fkIRegion;
    }

    public function setFkIRegion(?Region $fkIRegion): self
    {
        $this->fkIRegion = $fkIRegion;

        return $this;
    }

    public function getFkICity(): ?City
    {
        return $this->fkICity;
    }

    public function setFkICity(?City $fkICity): self
    {
        $this->fkICity = $fkICity;

        return $this;
    }

    public function getFkICityArea(): ?CityArea
    {
        return $this->fkICityArea;
    }

    public function setFkICityArea(?CityArea $fkICityArea): self
    {
        $this->fkICityArea = $fkICityArea;

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
