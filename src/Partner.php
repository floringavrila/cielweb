<?php
namespace Runasoft\Supergaz\Classes\CielWeb;


class Partner
{
    /** @var string */
    private $code;
    /** @var string */
    private $name;
    /** @var string */
    private $taxCode;
    /** @var string */
    private $taxAttribute;
    /** @var string */
    private $tradeRegisterNumber;
    /** @var string */
    private $bank;
    /** @var string */
    private $iban;
    /** @var int */
    private $discount;
    /** @var int */
    private $paymentDueDays;
    /** @var bool */
    private $blocked;
    /** @var bool */
    private $active;
    /** @var string */
    private $observation;
    /** @var float */
    private $creditLimit;
    /** @var boolean */
    private $displayInMobileDevice;
    /** @var string */
    private $accountTemplateName;
    /** @var string */
    private $partnerCategoryName;
    /** @var Address[] */
    private $addresses;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Partner
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return Partner
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * @param string $taxCode
     * @return Partner
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxAttribute()
    {
        return $this->taxAttribute;
    }

    /**
     * @param string $taxAttribute
     * @return Partner
     */
    public function setTaxAttribute($taxAttribute)
    {
        $this->taxAttribute = $taxAttribute;
        return $this;
    }

    /**
     * @return string
     */
    public function getTradeRegisterNumber()
    {
        return $this->tradeRegisterNumber;
    }

    /**
     * @param string $tradeRegisterNumber
     * @return Partner
     */
    public function setTradeRegisterNumber($tradeRegisterNumber)
    {
        $this->tradeRegisterNumber = $tradeRegisterNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     * @return Partner
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return Partner
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     * @return Partner
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentDueDays()
    {
        return $this->paymentDueDays;
    }

    /**
     * @param int $paymentDueDays
     * @return Partner
     */
    public function setPaymentDueDays($paymentDueDays)
    {
        $this->paymentDueDays = $paymentDueDays;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param boolean $blocked
     * @return Partner
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return Partner
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param string $observation
     * @return Partner
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * @param float $creditLimit
     * @return Partner
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDisplayInMobileDevice()
    {
        return $this->displayInMobileDevice;
    }

    /**
     * @param boolean $displayInMobileDevice
     * @return Partner
     */
    public function setDisplayInMobileDevice($displayInMobileDevice)
    {
        $this->displayInMobileDevice = $displayInMobileDevice;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountTemplateName()
    {
        return $this->accountTemplateName;
    }

    /**
     * @param string $accountTemplateName
     * @return Partner
     */
    public function setAccountTemplateName($accountTemplateName)
    {
        $this->accountTemplateName = $accountTemplateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCategoryName()
    {
        return $this->partnerCategoryName;
    }

    /**
     * @param string $partnerCategoryName
     * @return Partner
     */
    public function setPartnerCategoryName($partnerCategoryName)
    {
        $this->partnerCategoryName = $partnerCategoryName;
        return $this;
    }

    /**
     * @return Address[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param Address[] $addresses
     * @return Partner
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

}
