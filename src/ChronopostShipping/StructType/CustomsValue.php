<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomsValue extends AbstractStructBase
{
    /**
     * The bagNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bagNumber = null;
    /**
     * The clearanceCleared
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $clearanceCleared = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The descriptionInLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descriptionInLanguage = null;
    /**
     * The eori
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eori = null;
    /**
     * The incoterm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $incoterm = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The numberOfItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $numberOfItems = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The vatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vatNumber = null;
    /**
     * The articlesValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostShipping\StructType\ArticleValue[]
     */
    protected ?array $articlesValue = null;
    /**
     * Constructor method for customsValue
     * @uses CustomsValue::setBagNumber()
     * @uses CustomsValue::setClearanceCleared()
     * @uses CustomsValue::setCurrency()
     * @uses CustomsValue::setDescription()
     * @uses CustomsValue::setDescriptionInLanguage()
     * @uses CustomsValue::setEori()
     * @uses CustomsValue::setIncoterm()
     * @uses CustomsValue::setLanguage()
     * @uses CustomsValue::setNumberOfItems()
     * @uses CustomsValue::setValue()
     * @uses CustomsValue::setVatNumber()
     * @uses CustomsValue::setArticlesValue()
     * @param string $bagNumber
     * @param string $clearanceCleared
     * @param string $currency
     * @param string $description
     * @param string $descriptionInLanguage
     * @param string $eori
     * @param string $incoterm
     * @param string $language
     * @param int $numberOfItems
     * @param float $value
     * @param string $vatNumber
     * @param \ChronopostShipping\StructType\ArticleValue[] $articlesValue
     */
    public function __construct(?string $bagNumber = null, ?string $clearanceCleared = null, ?string $currency = null, ?string $description = null, ?string $descriptionInLanguage = null, ?string $eori = null, ?string $incoterm = null, ?string $language = null, ?int $numberOfItems = null, ?float $value = null, ?string $vatNumber = null, ?array $articlesValue = null)
    {
        $this
            ->setBagNumber($bagNumber)
            ->setClearanceCleared($clearanceCleared)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDescriptionInLanguage($descriptionInLanguage)
            ->setEori($eori)
            ->setIncoterm($incoterm)
            ->setLanguage($language)
            ->setNumberOfItems($numberOfItems)
            ->setValue($value)
            ->setVatNumber($vatNumber)
            ->setArticlesValue($articlesValue);
    }
    /**
     * Get bagNumber value
     * @return string|null
     */
    public function getBagNumber(): ?string
    {
        return $this->bagNumber;
    }
    /**
     * Set bagNumber value
     * @param string $bagNumber
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setBagNumber(?string $bagNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bagNumber) && !is_string($bagNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bagNumber, true), gettype($bagNumber)), __LINE__);
        }
        $this->bagNumber = $bagNumber;
        
        return $this;
    }
    /**
     * Get clearanceCleared value
     * @return string|null
     */
    public function getClearanceCleared(): ?string
    {
        return $this->clearanceCleared;
    }
    /**
     * Set clearanceCleared value
     * @param string $clearanceCleared
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setClearanceCleared(?string $clearanceCleared = null): self
    {
        // validation for constraint: string
        if (!is_null($clearanceCleared) && !is_string($clearanceCleared)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clearanceCleared, true), gettype($clearanceCleared)), __LINE__);
        }
        $this->clearanceCleared = $clearanceCleared;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get descriptionInLanguage value
     * @return string|null
     */
    public function getDescriptionInLanguage(): ?string
    {
        return $this->descriptionInLanguage;
    }
    /**
     * Set descriptionInLanguage value
     * @param string $descriptionInLanguage
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setDescriptionInLanguage(?string $descriptionInLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionInLanguage) && !is_string($descriptionInLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionInLanguage, true), gettype($descriptionInLanguage)), __LINE__);
        }
        $this->descriptionInLanguage = $descriptionInLanguage;
        
        return $this;
    }
    /**
     * Get eori value
     * @return string|null
     */
    public function getEori(): ?string
    {
        return $this->eori;
    }
    /**
     * Set eori value
     * @param string $eori
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setEori(?string $eori = null): self
    {
        // validation for constraint: string
        if (!is_null($eori) && !is_string($eori)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eori, true), gettype($eori)), __LINE__);
        }
        $this->eori = $eori;
        
        return $this;
    }
    /**
     * Get incoterm value
     * @return string|null
     */
    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }
    /**
     * Set incoterm value
     * @param string $incoterm
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setIncoterm(?string $incoterm = null): self
    {
        // validation for constraint: string
        if (!is_null($incoterm) && !is_string($incoterm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incoterm, true), gettype($incoterm)), __LINE__);
        }
        $this->incoterm = $incoterm;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get numberOfItems value
     * @return int|null
     */
    public function getNumberOfItems(): ?int
    {
        return $this->numberOfItems;
    }
    /**
     * Set numberOfItems value
     * @param int $numberOfItems
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setNumberOfItems(?int $numberOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
        $this->numberOfItems = $numberOfItems;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get vatNumber value
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }
    /**
     * Set vatNumber value
     * @param string $vatNumber
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setVatNumber(?string $vatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        $this->vatNumber = $vatNumber;
        
        return $this;
    }
    /**
     * Get articlesValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostShipping\StructType\ArticleValue[]
     */
    public function getArticlesValue(): ?array
    {
        return $this->articlesValue ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setArticlesValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArticlesValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArticlesValueForArrayConstraintFromSetArticlesValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customsValueArticlesValueItem) {
            // validation for constraint: itemType
            if (!$customsValueArticlesValueItem instanceof \ChronopostShipping\StructType\ArticleValue) {
                $invalidValues[] = is_object($customsValueArticlesValueItem) ? get_class($customsValueArticlesValueItem) : sprintf('%s(%s)', gettype($customsValueArticlesValueItem), var_export($customsValueArticlesValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The articlesValue property can only contain items of type \ChronopostShipping\StructType\ArticleValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set articlesValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ArticleValue[] $articlesValue
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function setArticlesValue(?array $articlesValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($articlesValueArrayErrorMessage = self::validateArticlesValueForArrayConstraintFromSetArticlesValue($articlesValue))) {
            throw new InvalidArgumentException($articlesValueArrayErrorMessage, __LINE__);
        }
        if (is_null($articlesValue) || (is_array($articlesValue) && empty($articlesValue))) {
            unset($this->articlesValue);
        } else {
            $this->articlesValue = $articlesValue;
        }
        
        return $this;
    }
    /**
     * Add item to articlesValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ArticleValue $item
     * @return \ChronopostShipping\StructType\CustomsValue
     */
    public function addToArticlesValue(\ChronopostShipping\StructType\ArticleValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\ArticleValue) {
            throw new InvalidArgumentException(sprintf('The articlesValue property can only contain items of type \ChronopostShipping\StructType\ArticleValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->articlesValue[] = $item;
        
        return $this;
    }
}
