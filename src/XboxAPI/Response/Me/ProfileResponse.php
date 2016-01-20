<?php

namespace XboxAPI\Response\Me;

use JMS\Serializer\Annotation as JMS;
use XboxAPI\Response\ResponseInterface;

class ProfileResponse implements ResponseInterface
{
    /**
     * @JMS\Type("string")
     *
     * @var string $userKey
     */
    private $userKey;

    /**
     * @JMS\Type("array")
     *
     * @var array $administeredConsoles
     */
    private $administeredConsoles;

    /**
     * @JMS\Type("Datetime")
     *
     * @var \DateTime $dateOfBirth
     */
    private $dateOfBirth;

    /**
     * @JMS\Type("string")
     *
     * @var string $email
     */
    private $email;

    /**
     * @JMS\Type("string")
     *
     * @var string $firstName
     */
    private $firstName;

    /**
     * @JMS\Type("string")
     *
     * @var string $lastName
     */
    private $lastName;

    /**
     * @JMS\Type("string")
     *
     * @var string $gamerTag
     */
    private $gamerTag;

    /**
     * @JMS\Type("string")
     *
     * @var string $homeAddressInfo
     */
    private $homeAddressInfo;

    /**
     * @JMS\Type("string")
     *
     * @var string $street1
     */
    private $street1;

    /**
     * @JMS\Type("string")
     *
     * @var string $street2
     */
    private $street2;

    /**
     * @JMS\Type("string")
     *
     * @var string $city
     */
    private $city;

    /**
     * @JMS\Type("string")
     *
     * @var string $state
     */
    private $state;

    /**
     * @JMS\Type("string")
     *
     * @var string $postalCode
     */
    private $postalCode;

    /**
     * @JMS\Type("string")
     *
     * @var string $country
     */
    private $country;

    /**
     * @JMS\Type("integer")
     *
     * @var int $homeConsole
     */
    private $homeConsole;

    /**
     * @JMS\Type("string")
     *
     * @var string $imageUrl
     */
    private $imageUrl;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isAdult
     */
    private $isAdult;

    /**
     * @JMS\Type("string")
     *
     * @var string $legalCountry
     */
    private $legalCountry;

    /**
     * @JMS\Type("string")
     *
     * @var string $locale
     */
    private $locale;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $msftOptin
     */
    private $msftOptin;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $ownerHash
     */
    private $ownerHash;

    /**
     * @JMS\Type("integer")
     *
     * @var int $ownerXuid
     */
    private $ownerXuid;

    /**
     * @JMS\Type("integer")
     *
     * @var int $midasConsole
     */
    private $midasConsole;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $partnerOptin
     */
    private $partnerOptin;

    /**
     * @JMS\Type("integer")
     *
     * @var int $userHash
     */
    private $userHash;

    /**
     * @JMS\Type("integer")
     *
     * @var int $userXuid
     */
    private $userXuid;

    /**
     * @JMS\Type("DateTime")
     *
     * @var \DateTime $touAcceptanceDate
     */
    private $touAcceptanceDate;

    /**
     * @JMS\Type("string")
     *
     * @var string $gamerTagChangeReason
     */
    private $gamerTagChangeReason;

    /**
     * @return mixed
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * @param mixed $userKey
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;
    }

    /**
     * @return mixed
     */
    public function getAdministeredConsoles()
    {
        return $this->administeredConsoles;
    }

    /**
     * @param mixed $administeredConsoles
     */
    public function setAdministeredConsoles($administeredConsoles)
    {
        $this->administeredConsoles = $administeredConsoles;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getGamerTag()
    {
        return $this->gamerTag;
    }

    /**
     * @param mixed $gamerTag
     */
    public function setGamerTag($gamerTag)
    {
        $this->gamerTag = $gamerTag;
    }

    /**
     * @return mixed
     */
    public function getHomeAddressInfo()
    {
        return $this->homeAddressInfo;
    }

    /**
     * @param mixed $homeAddressInfo
     */
    public function setHomeAddressInfo($homeAddressInfo)
    {
        $this->homeAddressInfo = $homeAddressInfo;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getHomeConsole()
    {
        return $this->homeConsole;
    }

    /**
     * @param mixed $homeConsole
     */
    public function setHomeConsole($homeConsole)
    {
        $this->homeConsole = $homeConsole;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getIsAdult()
    {
        return $this->isAdult;
    }

    /**
     * @param mixed $isAdult
     */
    public function setIsAdult($isAdult)
    {
        $this->isAdult = $isAdult;
    }

    /**
     * @return mixed
     */
    public function getLegalCountry()
    {
        return $this->legalCountry;
    }

    /**
     * @param mixed $legalCountry
     */
    public function setLegalCountry($legalCountry)
    {
        $this->legalCountry = $legalCountry;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getMsftOptin()
    {
        return $this->msftOptin;
    }

    /**
     * @param mixed $msftOptin
     */
    public function setMsftOptin($msftOptin)
    {
        $this->msftOptin = $msftOptin;
    }

    /**
     * @return mixed
     */
    public function getOwnerHash()
    {
        return $this->ownerHash;
    }

    /**
     * @param mixed $ownerHash
     */
    public function setOwnerHash($ownerHash)
    {
        $this->ownerHash = $ownerHash;
    }

    /**
     * @return mixed
     */
    public function getOwnerXuid()
    {
        return $this->ownerXuid;
    }

    /**
     * @param mixed $ownerXuid
     */
    public function setOwnerXuid($ownerXuid)
    {
        $this->ownerXuid = $ownerXuid;
    }

    /**
     * @return mixed
     */
    public function getMidasConsole()
    {
        return $this->midasConsole;
    }

    /**
     * @param mixed $midasConsole
     */
    public function setMidasConsole($midasConsole)
    {
        $this->midasConsole = $midasConsole;
    }

    /**
     * @return mixed
     */
    public function getPartnerOptin()
    {
        return $this->partnerOptin;
    }

    /**
     * @param mixed $partnerOptin
     */
    public function setPartnerOptin($partnerOptin)
    {
        $this->partnerOptin = $partnerOptin;
    }

    /**
     * @return mixed
     */
    public function getUserHash()
    {
        return $this->userHash;
    }

    /**
     * @param mixed $userHash
     */
    public function setUserHash($userHash)
    {
        $this->userHash = $userHash;
    }

    /**
     * @return mixed
     */
    public function getUserXuid()
    {
        return $this->userXuid;
    }

    /**
     * @param mixed $userXuid
     */
    public function setUserXuid($userXuid)
    {
        $this->userXuid = $userXuid;
    }

    /**
     * @return mixed
     */
    public function getTouAcceptanceDate()
    {
        return $this->touAcceptanceDate;
    }

    /**
     * @param mixed $touAcceptanceDate
     */
    public function setTouAcceptanceDate($touAcceptanceDate)
    {
        $this->touAcceptanceDate = $touAcceptanceDate;
    }

    /**
     * @return mixed
     */
    public function getGamerTagChangeReason()
    {
        return $this->gamerTagChangeReason;
    }

    /**
     * @param mixed $gamerTagChangeReason
     */
    public function setGamerTagChangeReason($gamerTagChangeReason)
    {
        $this->gamerTagChangeReason = $gamerTagChangeReason;
    }


}