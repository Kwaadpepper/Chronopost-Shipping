<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV3
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV3 extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ShipperValueV2[]
     */
    protected ?array $shipperValue = null;
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
     * @var \ChronopostShipping\StructType\RecipientValueV2[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RefValueV2[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillWithDimensionsValueV5[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillParamsValueV2|null
     */
    protected ?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ScheduledValue[]
     */
    protected ?array $scheduledValue = null;
    /**
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RecipientLocalValueV2[]
     */
    protected ?array $recipientLocalValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\CustomsValue[]
     */
    protected ?array $customsValue = null;
    /**
     * Constructor method for shippingMultiParcelV3
     * @uses ShippingMultiParcelV3::setEsdValue()
     * @uses ShippingMultiParcelV3::setHeaderValue()
     * @uses ShippingMultiParcelV3::setShipperValue()
     * @uses ShippingMultiParcelV3::setCustomerValue()
     * @uses ShippingMultiParcelV3::setRecipientValue()
     * @uses ShippingMultiParcelV3::setRefValue()
     * @uses ShippingMultiParcelV3::setSkybillValue()
     * @uses ShippingMultiParcelV3::setSkybillParamsValue()
     * @uses ShippingMultiParcelV3::setPassword()
     * @uses ShippingMultiParcelV3::setModeRetour()
     * @uses ShippingMultiParcelV3::setNumberOfParcel()
     * @uses ShippingMultiParcelV3::setVersion()
     * @uses ShippingMultiParcelV3::setMultiParcel()
     * @uses ShippingMultiParcelV3::setScheduledValue()
     * @uses ShippingMultiParcelV3::setRecipientLocalValue()
     * @uses ShippingMultiParcelV3::setCustomsValue()
     * @param \ChronopostShipping\StructType\EsdValue3 $esdValue
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValueV2[] $shipperValue
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @param \ChronopostShipping\StructType\RecipientValueV2[] $recipientValue
     * @param \ChronopostShipping\StructType\RefValueV2[] $refValue
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV5[] $skybillValue
     * @param \ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \ChronopostShipping\StructType\ScheduledValue[] $scheduledValue
     * @param \ChronopostShipping\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @param \ChronopostShipping\StructType\CustomsValue[] $customsValue
     */
    public function __construct(?\ChronopostShipping\StructType\EsdValue3 $esdValue = null, ?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?array $shipperValue = null, ?\ChronopostShipping\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
            ->setScheduledValue($scheduledValue)
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue);
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setHeaderValue(?\ChronopostShipping\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \ChronopostShipping\StructType\ShipperValueV2[]
     */
    public function getShipperValue(): ?array
    {
        return $this->shipperValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintFromSetShipperValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3ShipperValueItem instanceof \ChronopostShipping\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3ShipperValueItem) ? get_class($shippingMultiParcelV3ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3ShipperValueItem), var_export($shippingMultiParcelV3ShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \ChronopostShipping\StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ShipperValueV2[] $shipperValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setShipperValue(?array $shipperValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintFromSetShipperValue($shipperValue))) {
            throw new InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Add item to shipperValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ShipperValueV2 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToShipperValue(\ChronopostShipping\StructType\ShipperValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\ShipperValueV2) {
            throw new InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \ChronopostShipping\StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;
        
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setCustomerValue(?\ChronopostShipping\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \ChronopostShipping\StructType\RecipientValueV2[]
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
        foreach ($values as $shippingMultiParcelV3RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RecipientValueItem instanceof \ChronopostShipping\StructType\RecipientValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RecipientValueItem) ? get_class($shippingMultiParcelV3RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RecipientValueItem), var_export($shippingMultiParcelV3RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \ChronopostShipping\StructType\RecipientValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RecipientValueV2[] $recipientValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @param \ChronopostShipping\StructType\RecipientValueV2 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToRecipientValue(\ChronopostShipping\StructType\RecipientValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\RecipientValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \ChronopostShipping\StructType\RecipientValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \ChronopostShipping\StructType\RefValueV2[]
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
        foreach ($values as $shippingMultiParcelV3RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RefValueItem instanceof \ChronopostShipping\StructType\RefValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RefValueItem) ? get_class($shippingMultiParcelV3RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RefValueItem), var_export($shippingMultiParcelV3RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \ChronopostShipping\StructType\RefValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RefValueV2[] $refValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @param \ChronopostShipping\StructType\RefValueV2 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToRefValue(\ChronopostShipping\StructType\RefValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\RefValueV2) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \ChronopostShipping\StructType\RefValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \ChronopostShipping\StructType\SkybillWithDimensionsValueV5[]
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
        foreach ($values as $shippingMultiParcelV3SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3SkybillValueItem instanceof \ChronopostShipping\StructType\SkybillWithDimensionsValueV5) {
                $invalidValues[] = is_object($shippingMultiParcelV3SkybillValueItem) ? get_class($shippingMultiParcelV3SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3SkybillValueItem), var_export($shippingMultiParcelV3SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \ChronopostShipping\StructType\SkybillWithDimensionsValueV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV5[] $skybillValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV5 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToSkybillValue(\ChronopostShipping\StructType\SkybillWithDimensionsValueV5 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\SkybillWithDimensionsValueV5) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \ChronopostShipping\StructType\SkybillWithDimensionsValueV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \ChronopostShipping\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\ChronopostShipping\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setSkybillParamsValue(?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
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
     * @return \ChronopostShipping\StructType\ScheduledValue[]
     */
    public function getScheduledValue(): ?array
    {
        return $this->scheduledValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintFromSetScheduledValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3ScheduledValueItem instanceof \ChronopostShipping\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV3ScheduledValueItem) ? get_class($shippingMultiParcelV3ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3ScheduledValueItem), var_export($shippingMultiParcelV3ScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \ChronopostShipping\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set scheduledValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ScheduledValue[] $scheduledValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setScheduledValue(?array $scheduledValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintFromSetScheduledValue($scheduledValue))) {
            throw new InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
    /**
     * Add item to scheduledValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\ScheduledValue $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToScheduledValue(\ChronopostShipping\StructType\ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\ScheduledValue) {
            throw new InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \ChronopostShipping\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;
        
        return $this;
    }
    /**
     * Get recipientLocalValue value
     * @return \ChronopostShipping\StructType\RecipientLocalValueV2[]
     */
    public function getRecipientLocalValue(): ?array
    {
        return $this->recipientLocalValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RecipientLocalValueItem instanceof \ChronopostShipping\StructType\RecipientLocalValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RecipientLocalValueItem) ? get_class($shippingMultiParcelV3RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RecipientLocalValueItem), var_export($shippingMultiParcelV3RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \ChronopostShipping\StructType\RecipientLocalValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setRecipientLocalValue(?array $recipientLocalValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;
        
        return $this;
    }
    /**
     * Add item to recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\RecipientLocalValueV2 $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToRecipientLocalValue(\ChronopostShipping\StructType\RecipientLocalValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\RecipientLocalValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \ChronopostShipping\StructType\RecipientLocalValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \ChronopostShipping\StructType\CustomsValue[]
     */
    public function getCustomsValue(): ?array
    {
        return $this->customsValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintFromSetCustomsValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3CustomsValueItem instanceof \ChronopostShipping\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV3CustomsValueItem) ? get_class($shippingMultiParcelV3CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3CustomsValueItem), var_export($shippingMultiParcelV3CustomsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \ChronopostShipping\StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customsValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\CustomsValue[] $customsValue
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function setCustomsValue(?array $customsValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintFromSetCustomsValue($customsValue))) {
            throw new InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;
        
        return $this;
    }
    /**
     * Add item to customsValue value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\CustomsValue $item
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3
     */
    public function addToCustomsValue(\ChronopostShipping\StructType\CustomsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\CustomsValue) {
            throw new InvalidArgumentException(sprintf('The customsValue property can only contain items of type \ChronopostShipping\StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;
        
        return $this;
    }
}
