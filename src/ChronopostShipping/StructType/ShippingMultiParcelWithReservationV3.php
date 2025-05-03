<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelWithReservationV3 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\EsdValue3|null
     */
    protected ?\ChronopostShipping\StructType\EsdValue3 $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\HeaderValue|null
     */
    protected ?\ChronopostShipping\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ShipperValue|null
     */
    protected ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\CustomerValue|null
     */
    protected ?\ChronopostShipping\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillWithDimensionsValueV2[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillParamsValue|null
     */
    protected ?\ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ScheduledValue|null
     */
    protected ?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationV3
     * @uses ShippingMultiParcelWithReservationV3::setEsdValue()
     * @uses ShippingMultiParcelWithReservationV3::setHeaderValue()
     * @uses ShippingMultiParcelWithReservationV3::setShipperValue()
     * @uses ShippingMultiParcelWithReservationV3::setCustomerValue()
     * @uses ShippingMultiParcelWithReservationV3::setRecipientValue()
     * @uses ShippingMultiParcelWithReservationV3::setRefValue()
     * @uses ShippingMultiParcelWithReservationV3::setSkybillValue()
     * @uses ShippingMultiParcelWithReservationV3::setSkybillParamsValue()
     * @uses ShippingMultiParcelWithReservationV3::setPassword()
     * @uses ShippingMultiParcelWithReservationV3::setModeRetour()
     * @uses ShippingMultiParcelWithReservationV3::setNumberOfParcel()
     * @uses ShippingMultiParcelWithReservationV3::setVersion()
     * @uses ShippingMultiParcelWithReservationV3::setMultiParcel()
     * @uses ShippingMultiParcelWithReservationV3::setScheduledValue()
     * @param \ChronopostShipping\StructType\EsdValue3 $esdValue
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @param \ChronopostShipping\StructType\RecipientValue[] $recipientValue
     * @param \ChronopostShipping\StructType\RefValue[] $refValue
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @param \ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \ChronopostShipping\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\ChronopostShipping\StructType\EsdValue3 $esdValue = null, ?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null, ?\ChronopostShipping\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \ChronopostShipping\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\ChronopostShipping\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \ChronopostShipping\StructType\EsdValue3 $esdValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setEsdValue(?\ChronopostShipping\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \ChronopostShipping\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\ChronopostShipping\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setHeaderValue(?\ChronopostShipping\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \ChronopostShipping\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\ChronopostShipping\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setShipperValue(?\ChronopostShipping\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \ChronopostShipping\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\ChronopostShipping\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setCustomerValue(?\ChronopostShipping\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \ChronopostShipping\StructType\RecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV3RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3RecipientValueItem instanceof \ChronopostShipping\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3RecipientValueItem) ? get_class($shippingMultiParcelWithReservationV3RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3RecipientValueItem), var_export($shippingMultiParcelWithReservationV3RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \ChronopostShipping\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RecipientValue[] $recipientValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RecipientValue $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function addToRecipientValue(\ChronopostShipping\StructType\RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \ChronopostShipping\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \ChronopostShipping\StructType\RefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV3RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3RefValueItem instanceof \ChronopostShipping\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3RefValueItem) ? get_class($shippingMultiParcelWithReservationV3RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3RefValueItem), var_export($shippingMultiParcelWithReservationV3RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \ChronopostShipping\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RefValue[] $refValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RefValue $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function addToRefValue(\ChronopostShipping\StructType\RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \ChronopostShipping\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \ChronopostShipping\StructType\SkybillWithDimensionsValueV2[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV3SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3SkybillValueItem instanceof \ChronopostShipping\StructType\SkybillWithDimensionsValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3SkybillValueItem) ? get_class($shippingMultiParcelWithReservationV3SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3SkybillValueItem), var_export($shippingMultiParcelWithReservationV3SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \ChronopostShipping\StructType\SkybillWithDimensionsValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV2 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function addToSkybillValue(\ChronopostShipping\StructType\SkybillWithDimensionsValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\SkybillWithDimensionsValueV2) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \ChronopostShipping\StructType\SkybillWithDimensionsValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \ChronopostShipping\StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\ChronopostShipping\StructType\SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setSkybillParamsValue(?\ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
        return $this;
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \ChronopostShipping\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\ChronopostShipping\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \ChronopostShipping\StructType\ScheduledValue $scheduledValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setScheduledValue(?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
