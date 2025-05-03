<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipping StructType
 * Meta information extracted from the WSDL
 * - type: tns:shipping
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Shipping extends AbstractStructBase
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
     * @var \ChronopostShipping\StructType\SkybillValue|null
     */
    protected ?\ChronopostShipping\StructType\SkybillValue $skybillValue = null;
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
     * Constructor method for shipping
     * @uses Shipping::setEsdValue()
     * @uses Shipping::setHeaderValue()
     * @uses Shipping::setShipperValue()
     * @uses Shipping::setCustomerValue()
     * @uses Shipping::setRecipientValue()
     * @uses Shipping::setRefValue()
     * @uses Shipping::setSkybillValue()
     * @uses Shipping::setSkybillParamsValue()
     * @uses Shipping::setPassword()
     * @param \ChronopostShipping\StructType\EsdValue $esdValue
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @param \ChronopostShipping\StructType\CustomerValue $customerValue
     * @param \ChronopostShipping\StructType\RecipientValue $recipientValue
     * @param \ChronopostShipping\StructType\RefValue $refValue
     * @param \ChronopostShipping\StructType\SkybillValue $skybillValue
     * @param \ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     */
    public function __construct(?\ChronopostShipping\StructType\EsdValue $esdValue = null, ?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null, ?\ChronopostShipping\StructType\CustomerValue $customerValue = null, ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null, ?\ChronopostShipping\StructType\RefValue $refValue = null, ?\ChronopostShipping\StructType\SkybillValue $skybillValue = null, ?\ChronopostShipping\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null)
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
            ->setPassword($password);
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
     */
    public function setRefValue(?\ChronopostShipping\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \ChronopostShipping\StructType\SkybillValue|null
     */
    public function getSkybillValue(): ?\ChronopostShipping\StructType\SkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \ChronopostShipping\StructType\SkybillValue $skybillValue
     * @return \ChronopostShipping\StructType\Shipping
     */
    public function setSkybillValue(?\ChronopostShipping\StructType\SkybillValue $skybillValue = null): self
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
     * @return \ChronopostShipping\StructType\Shipping
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
     * @return \ChronopostShipping\StructType\Shipping
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
}
