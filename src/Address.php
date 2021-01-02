<?php
namespace Runasoft\Supergaz\Classes\CielWeb;


class Address
{
    /** @var string */
    private $rezidenceName;
    /** @var string */
    private $countryName;
    /** @var string */
    private $countyName;
    /** @var string */
    private $cityName;
    /** @var string */
    private $streetName;
    /** @var string */
    private $streetNumber;
    /** @var string */
    private $buildingNumber;
    /** @var string */
    private $buildingEntryNumber;
    /** @var string */
    private $apartmentNumber;
    /** @var string */
    private $floorNumber;
    /** @var string */
    private $postalCode;
    /** @var string */
    private $phone;
    /** @var string */
    private $email;
    /** @var string */
    private $mobilePhone;
    /** @var string */
    private $fax;
    /** @var bool */
    private $isDefault;
    /** @var string */
    private $name;
    /** @var string */
    private $atHeadOffice;
    /** @var string */
    private $addressType;
    /** @var float */
    private $longitude;
    /** @var float */
    private $latitude;
    /** @var string */
    private $externalKey;

    /**
     * @return string
     */
    public function getRezidenceName()
    {
        return $this->rezidenceName;
    }

    /**
     * @param string $rezidenceName
     * @return Address
     */
    public function setRezidenceName($rezidenceName)
    {
        $this->rezidenceName = $rezidenceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return Address
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * @param string $countyName
     * @return Address
     */
    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return Address
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return Address
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     * @return Address
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingEntryNumber()
    {
        return $this->buildingEntryNumber;
    }

    /**
     * @param string $buildingEntryNumber
     * @return Address
     */
    public function setBuildingEntryNumber($buildingEntryNumber)
    {
        $this->buildingEntryNumber = $buildingEntryNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * @param string $apartmentNumber
     * @return Address
     */
    public function setApartmentNumber($apartmentNumber)
    {
        $this->apartmentNumber = $apartmentNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloorNumber()
    {
        return $this->floorNumber;
    }

    /**
     * @param string $floorNumber
     * @return Address
     */
    public function setFloorNumber($floorNumber)
    {
        $this->floorNumber = $floorNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return Address
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Address
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return Address
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAtHeadOffice()
    {
        return $this->atHeadOffice;
    }

    /**
     * @param string $atHeadOffice
     * @return Address
     */
    public function setAtHeadOffice($atHeadOffice)
    {
        $this->atHeadOffice = $atHeadOffice;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Address
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Address
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalKey()
    {
        return $this->externalKey;
    }

    /**
     * @param string $externalKey
     * @return Address
     */
    public function setExternalKey($externalKey)
    {
        $this->externalKey = $externalKey;
        return $this;
    }
}
