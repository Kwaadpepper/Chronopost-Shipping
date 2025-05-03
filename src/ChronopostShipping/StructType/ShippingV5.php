<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV5 extends AbstractStructBase
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
     * @var \ChronopostShipping\StructType\SkybillValueV2|null
     */
    protected ?\ChronopostShipping\StructType\SkybillValueV2 $skybillValue = null;
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
     * Constructor method for shippingV5
     * @uses ShippingV5::setEsdValue()
     * @uses ShippingV5::setHeaderValue()
     * @uses ShippingV5::setShipperValue()
     * @uses ShippingV5::setCustomerValue()
     * @uses ShippingV5::setRecipientValue()
     * @uses ShippingV5::setRefValue()
     * @uses ShippingV5::setSkybillValue()
     * @uses ShippingV5::setSkybillParamsValue()
     * @uses ShippingV5::setPassword()
     * @uses ShippingV5::setVersion()
     * @uses ShippingV5::setScheduledValue()
     * @param \ChronopostShipping\StructType\EsdValue3 $esdValue
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @param \ChronopostShipping\StructType\RecipientValue $recipientValue
     * @param \ChronopostShipping\StructType\RefValue $refValue
     * @param \ChronopostShipping\StructType\SkybillValueV2 $skybillValue
     * @param \ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @param \ChronopostShipping\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\ChronopostShipping\StructType\EsdValue3 $esdValue = null, ?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null, ?\ChronopostShipping\StructType\CustomerValue $customerValue = null, ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null, ?\ChronopostShipping\StructType\RefValue $refValue = null, ?\ChronopostShipping\StructType\SkybillValueV2 $skybillValue = null, ?\ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null)
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
            ->setVersion($version)
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
     */
    public function setRefValue(?\ChronopostShipping\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \ChronopostShipping\StructType\SkybillValueV2|null
     */
    public function getSkybillValue(): ?\ChronopostShipping\StructType\SkybillValueV2
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \ChronopostShipping\StructType\SkybillValueV2 $skybillValue
     * @return \ChronopostShipping\StructType\ShippingV5
     */
    public function setSkybillValue(?\ChronopostShipping\StructType\SkybillValueV2 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
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
     * @return \ChronopostShipping\StructType\ShippingV5
     */
    public function setScheduledValue(?\ChronopostShipping\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
