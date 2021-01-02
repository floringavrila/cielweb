<?php

namespace Runasoft\Supergaz\Classes\CielWeb;


class Article
{
    /** @var int */
    private $articleId;
    /** @var string */
    private $articleCode;
    /** @var string */
    private $articleBarCode;
    /** @var float */
    private $quantity;
    /** @var int */
    private $articleTemplateId;
    /** @var string */
    private $articleTemplateName;
    /** @var float */
    private $priceOut;
    /** @var float */
    private $priceOutWithVAT;
    /** @var float */
    private $priceInLocalCurrency;
    /** @var int */
    private $vatOutOptionId;
    /** @var string */
    private $vatOutOptionName;
    /** @var int */
    private $vatOutQuotaId;
    /** @var float */
    private $vatOutQuotaValue;
    /** @var int */
    private $accountId;
    /** @var string */
    private $accountSymbol;
    /** @var float */
    private $discount;
    /** @var string */
    private $notes;
    /** @var CustomField[] */
    private $customFields;

    /**
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     * @return Article
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleCode()
    {
        return $this->articleCode;
    }

    /**
     * @param string $articleCode
     * @return Article
     */
    public function setArticleCode($articleCode)
    {
        $this->articleCode = $articleCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleBarCode()
    {
        return $this->articleBarCode;
    }

    /**
     * @param string $articleBarCode
     * @return Article
     */
    public function setArticleBarCode($articleBarCode)
    {
        $this->articleBarCode = $articleBarCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return Article
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleTemplateId()
    {
        return $this->articleTemplateId;
    }

    /**
     * @param int $articleTemplateId
     * @return Article
     */
    public function setArticleTemplateId($articleTemplateId)
    {
        $this->articleTemplateId = $articleTemplateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleTemplateName()
    {
        return $this->articleTemplateName;
    }

    /**
     * @param string $articleTemplateName
     * @return Article
     */
    public function setArticleTemplateName($articleTemplateName)
    {
        $this->articleTemplateName = $articleTemplateName;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOut()
    {
        return $this->priceOut;
    }

    /**
     * @param float $priceOut
     * @return Article
     */
    public function setPriceOut($priceOut)
    {
        $this->priceOut = $priceOut;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOutWithVAT()
    {
        return $this->priceOutWithVAT;
    }

    /**
     * @param float $priceOutWithVAT
     * @return Article
     */
    public function setPriceOutWithVAT($priceOutWithVAT)
    {
        $this->priceOutWithVAT = $priceOutWithVAT;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceInLocalCurrency()
    {
        return $this->priceInLocalCurrency;
    }

    /**
     * @param float $priceInLocalCurrency
     * @return Article
     */
    public function setPriceInLocalCurrency($priceInLocalCurrency)
    {
        $this->priceInLocalCurrency = $priceInLocalCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getVatOutOptionId()
    {
        return $this->vatOutOptionId;
    }

    /**
     * @param int $vatOutOptionId
     * @return Article
     */
    public function setVatOutOptionId($vatOutOptionId)
    {
        $this->vatOutOptionId = $vatOutOptionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatOutOptionName()
    {
        return $this->vatOutOptionName;
    }

    /**
     * @param string $vatOutOptionName
     * @return Article
     */
    public function setVatOutOptionName($vatOutOptionName)
    {
        $this->vatOutOptionName = $vatOutOptionName;
        return $this;
    }

    /**
     * @return int
     */
    public function getVatOutQuotaId()
    {
        return $this->vatOutQuotaId;
    }

    /**
     * @param int $vatOutQuotaId
     * @return Article
     */
    public function setVatOutQuotaId($vatOutQuotaId)
    {
        $this->vatOutQuotaId = $vatOutQuotaId;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatOutQuotaValue()
    {
        return $this->vatOutQuotaValue;
    }

    /**
     * @param float $vatOutQuotaValue
     * @return Article
     */
    public function setVatOutQuotaValue($vatOutQuotaValue)
    {
        $this->vatOutQuotaValue = $vatOutQuotaValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return Article
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountSymbol()
    {
        return $this->accountSymbol;
    }

    /**
     * @param string $accountSymbol
     * @return Article
     */
    public function setAccountSymbol($accountSymbol)
    {
        $this->accountSymbol = $accountSymbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return Article
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
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
     * @return Article
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
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
     * @return Article
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }
}
