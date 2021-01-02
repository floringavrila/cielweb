<?php

namespace Runasoft\Supergaz\Classes\CielWeb;

class Order
{
    /** @var int */
    private $partnerId;
    /** @var string */
    private $partnerCode;
    /** @var string */
    private $date;
    /** @var string */
    private $dueDate;
    /** @var int */
    private $currencyId;
    /** @var string */
    private $currencySymbol;
    /** @var float */
    private $exchangeRate;
    /** @var int */
    private $partnerWorksiteId;
    /** @var string */
    private $partnerWorksiteName;
    /** @var int */
    private $warehouseId;
    /** @var string */
    private $warehouseCode;
    /** @var string */
    private $warehouseName;
    /** @var string */
    private $nrDoc;
    /** @var string */
    private $series;
    /** @var int */
    private $agentId;
    /** @var string */
    private $agentCode;
    /** @var bool */
    private $reverseCharge;
    /** @var bool */
    private $isVatCollectableOnPayment;
    /** @var bool */
    private $isSimplifiedInvoice;
    /** @var int */
    private $worksiteId;
    /** @var int */
    private $partnerDeliveryAddressId;
    /** @var string */
    private $notes;
    /** @var Article[] */
    private $documentLines;
    /** @var CustomField[] */
    private $customFields;

    /**
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param int $partnerId
     * @return Order
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * @param string $partnerCode
     * @return Order
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return Order
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param int $currencyId
     * @return Order
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @param string $currencySymbol
     * @return Order
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return Order
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartnerWorksiteId()
    {
        return $this->partnerWorksiteId;
    }

    /**
     * @param int $partnerWorksiteId
     * @return Order
     */
    public function setPartnerWorksiteId($partnerWorksiteId)
    {
        $this->partnerWorksiteId = $partnerWorksiteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerWorksiteName()
    {
        return $this->partnerWorksiteName;
    }

    /**
     * @param string $partnerWorksiteName
     * @return Order
     */
    public function setPartnerWorksiteName($partnerWorksiteName)
    {
        $this->partnerWorksiteName = $partnerWorksiteName;
        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * @param int $warehouseId
     * @return Order
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $warehouseCode
     * @return Order
     */
    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    /**
     * @param string $warehouseName
     * @return Order
     */
    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName = $warehouseName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNrDoc()
    {
        return $this->nrDoc;
    }

    /**
     * @param string $nrDoc
     * @return Order
     */
    public function setNrDoc($nrDoc)
    {
        $this->nrDoc = $nrDoc;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     * @return Order
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     * @return Order
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * @param string $agentCode
     * @return Order
     */
    public function setAgentCode($agentCode)
    {
        $this->agentCode = $agentCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isReverseCharge()
    {
        return $this->reverseCharge;
    }

    /**
     * @param boolean $reverseCharge
     * @return Order
     */
    public function setReverseCharge($reverseCharge)
    {
        $this->reverseCharge = $reverseCharge;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsVatCollectableOnPayment()
    {
        return $this->isVatCollectableOnPayment;
    }

    /**
     * @param boolean $isVatCollectableOnPayment
     * @return Order
     */
    public function setIsVatCollectableOnPayment($isVatCollectableOnPayment)
    {
        $this->isVatCollectableOnPayment = $isVatCollectableOnPayment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsSimplifiedInvoice()
    {
        return $this->isSimplifiedInvoice;
    }

    /**
     * @param boolean $isSimplifiedInvoice
     * @return Order
     */
    public function setIsSimplifiedInvoice($isSimplifiedInvoice)
    {
        $this->isSimplifiedInvoice = $isSimplifiedInvoice;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorksiteId()
    {
        return $this->worksiteId;
    }

    /**
     * @param int $worksiteId
     * @return Order
     */
    public function setWorksiteId($worksiteId)
    {
        $this->worksiteId = $worksiteId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartnerDeliveryAddressId()
    {
        return $this->partnerDeliveryAddressId;
    }

    /**
     * @param int $partnerDeliveryAddressId
     * @return Order
     */
    public function setPartnerDeliveryAddressId($partnerDeliveryAddressId)
    {
        $this->partnerDeliveryAddressId = $partnerDeliveryAddressId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return Order
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return Article[]
     */
    public function getDocumentLines()
    {
        return $this->documentLines;
    }

    /**
     * @param Article[] $documentLines
     * @return Order
     */
    public function setDocumentLines($documentLines)
    {
        $this->documentLines = $documentLines;
        return $this;
    }

    /**
     * @return CustomField[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param CustomField[] $customFields
     * @return Order
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }
}
