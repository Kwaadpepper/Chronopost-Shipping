<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformation
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShippingInformation extends AbstractStructBase
{
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
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\RecipientValue|null
     */
    protected ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null;
    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\SkybillValueBase|null
     */
    protected ?\ChronopostShipping\StructType\SkybillValueBase $skybillValueBase = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for getShippingInformation
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     * @param \ChronopostShipping\StructType\HeaderValue $headerValue
     * @param \ChronopostShipping\StructType\ShipperValue $shipperValue
     * @param \ChronopostShipping\StructType\RecipientValue $recipientValue
     * @param \ChronopostShipping\StructType\SkybillValueBase $skybillValueBase
     * @param string $password
     */
    public function __construct(?\ChronopostShipping\StructType\HeaderValue $headerValue = null, ?\ChronopostShipping\StructType\ShipperValue $shipperValue = null, ?\ChronopostShipping\StructType\RecipientValue $recipientValue = null, ?\ChronopostShipping\StructType\SkybillValueBase $skybillValueBase = null, ?string $password = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setRecipientValue($recipientValue)
            ->setSkybillValueBase($skybillValueBase)
            ->setPassword($password);
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
     * @return \ChronopostShipping\StructType\GetShippingInformation
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
     * @return \ChronopostShipping\StructType\GetShippingInformation
     */
    public function setShipperValue(?\ChronopostShipping\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
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
     * @return \ChronopostShipping\StructType\GetShippingInformation
     */
    public function setRecipientValue(?\ChronopostShipping\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get skybillValueBase value
     * @return \ChronopostShipping\StructType\SkybillValueBase|null
     */
    public function getSkybillValueBase(): ?\ChronopostShipping\StructType\SkybillValueBase
    {
        return $this->skybillValueBase;
    }
    /**
     * Set skybillValueBase value
     * @param \ChronopostShipping\StructType\SkybillValueBase $skybillValueBase
     * @return \ChronopostShipping\StructType\GetShippingInformation
     */
    public function setSkybillValueBase(?\ChronopostShipping\StructType\SkybillValueBase $skybillValueBase = null): self
    {
        $this->skybillValueBase = $skybillValueBase;
        
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
     * @return \ChronopostShipping\StructType\GetShippingInformation
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
