<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV7 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\EsdValue|null
     */
    protected ?\ChronopostShipping\StructType\EsdValue $esdValue = null;
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
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RecipientValue|null
     */
    protected ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RefValue|null
     */
    protected ?\ChronopostShipping\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillWithDimensionsValueV3|null
     */
    protected ?\ChronopostShipping\StructType\SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillParamsValueV2|null
     */
    protected ?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\CustomsValue|null
     */
    protected ?\ChronopostShipping\StructType\CustomsValue $customsValue = null;
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
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ScheduledValue|null
     */
    protected ?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingV7
     * @uses ShippingV7::setEsdValue()
     * @uses ShippingV7::setHeaderValue()
     * @uses ShippingV7::setShipperValue()
     * @uses ShippingV7::setCustomerValue()
     * @uses ShippingV7::setRecipientValue()
     * @uses ShippingV7::setRefValue()
     * @uses ShippingV7::setSkybillValue()
     * @uses ShippingV7::setSkybillParamsValue()
     * @uses ShippingV7::setCustomsValue()
     * @uses ShippingV7::setPassword()
     * @uses ShippingV7::setModeRetour()
     * @uses ShippingV7::setVersion()
     * @uses ShippingV7::setScheduledValue()
     * @param \ChronopostShipping\StructType\EsdValue $esdValue
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @param \ChronopostShipping\StructType\RecipientValue $recipientValue
     * @param \ChronopostShipping\StructType\RefValue $refValue
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param \ChronopostShipping\StructType\CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param \ChronopostShipping\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\ChronopostShipping\StructType\EsdValue $esdValue = null, ?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null, ?\ChronopostShipping\StructType\CustomerValue $customerValue = null, ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null, ?\ChronopostShipping\StructType\RefValue $refValue = null, ?\ChronopostShipping\StructType\SkybillWithDimensionsValueV3 $skybillValue = null, ?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?\ChronopostShipping\StructType\CustomsValue $customsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null)
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
            ->setCustomsValue($customsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \ChronopostShipping\StructType\EsdValue|null
     */
    public function getEsdValue(): ?\ChronopostShipping\StructType\EsdValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \ChronopostShipping\StructType\EsdValue $esdValue
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setEsdValue(?\ChronopostShipping\StructType\EsdValue $esdValue = null): self
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
     * @return \ChronopostShipping\StructType\ShippingV7
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
     * @return \ChronopostShipping\StructType\ShippingV7
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
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setCustomerValue(?\ChronopostShipping\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \ChronopostShipping\StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\ChronopostShipping\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \ChronopostShipping\StructType\RecipientValue $recipientValue
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setRecipientValue(?\ChronopostShipping\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \ChronopostShipping\StructType\RefValue|null
     */
    public function getRefValue(): ?\ChronopostShipping\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \ChronopostShipping\StructType\RefValue $refValue
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setRefValue(?\ChronopostShipping\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \ChronopostShipping\StructType\SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue(): ?\ChronopostShipping\StructType\SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \ChronopostShipping\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setSkybillValue(?\ChronopostShipping\StructType\SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
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
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setSkybillParamsValue(?\ChronopostShipping\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \ChronopostShipping\StructType\CustomsValue|null
     */
    public function getCustomsValue(): ?\ChronopostShipping\StructType\CustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param \ChronopostShipping\StructType\CustomsValue $customsValue
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setCustomsValue(?\ChronopostShipping\StructType\CustomsValue $customsValue = null): self
    {
        $this->customsValue = $customsValue;
        
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
     * @return \ChronopostShipping\StructType\ShippingV7
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
     * @return \ChronopostShipping\StructType\ShippingV7
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
     * @return \ChronopostShipping\StructType\ShippingV7
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
     * @return \ChronopostShipping\StructType\ShippingV7
     */
    public function setScheduledValue(?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
