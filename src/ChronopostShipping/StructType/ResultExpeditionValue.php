<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultExpeditionValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultExpeditionValue extends AbstractStructBase
{
    /**
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDFullNumber = null;
    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDNumber = null;
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickupDate = null;
    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybill = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * Constructor method for resultExpeditionValue
     * @uses ResultExpeditionValue::setESDFullNumber()
     * @uses ResultExpeditionValue::setESDNumber()
     * @uses ResultExpeditionValue::setErrorCode()
     * @uses ResultExpeditionValue::setErrorMessage()
     * @uses ResultExpeditionValue::setPickupDate()
     * @uses ResultExpeditionValue::setSkybill()
     * @uses ResultExpeditionValue::setSkybillNumber()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $pickupDate
     * @param string $skybill
     * @param string $skybillNumber
     */
    public function __construct(?string $eSDFullNumber = null, ?string $eSDNumber = null, ?int $errorCode = null, ?string $errorMessage = null, ?string $pickupDate = null, ?string $skybill = null, ?string $skybillNumber = null)
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setSkybill($skybill)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get ESDFullNumber value
     * @return string|null
     */
    public function getESDFullNumber(): ?string
    {
        return $this->ESDFullNumber;
    }
    /**
     * Set ESDFullNumber value
     * @param string $eSDFullNumber
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setESDFullNumber(?string $eSDFullNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;
        
        return $this;
    }
    /**
     * Get ESDNumber value
     * @return string|null
     */
    public function getESDNumber(): ?string
    {
        return $this->ESDNumber;
    }
    /**
     * Set ESDNumber value
     * @param string $eSDNumber
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setESDNumber(?string $eSDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        
        return $this;
    }
    /**
     * Get skybill value
     * @return string|null
     */
    public function getSkybill(): ?string
    {
        return $this->skybill;
    }
    /**
     * Set skybill value
     * @param string $skybill
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setSkybill(?string $skybill = null): self
    {
        // validation for constraint: string
        if (!is_null($skybill) && !is_string($skybill)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybill, true), gettype($skybill)), __LINE__);
        }
        $this->skybill = $skybill;
        
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \ChronopostShipping\StructType\ResultExpeditionValue
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
}
