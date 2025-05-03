<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\Error|null
     */
    protected ?\ChronopostShipping\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ShippingInfo|null
     */
    protected ?\ChronopostShipping\StructType\ShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \ChronopostShipping\StructType\Error $error
     * @param \ChronopostShipping\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?\ChronopostShipping\StructType\Error $error = null, ?\ChronopostShipping\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \ChronopostShipping\StructType\Error|null
     */
    public function getError(): ?\ChronopostShipping\StructType\Error
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \ChronopostShipping\StructType\Error $error
     * @return \ChronopostShipping\StructType\ResultShippingInfo
     */
    public function setError(?\ChronopostShipping\StructType\Error $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \ChronopostShipping\StructType\ShippingInfo|null
     */
    public function getShippingInfo(): ?\ChronopostShipping\StructType\ShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \ChronopostShipping\StructType\ShippingInfo $shippingInfo
     * @return \ChronopostShipping\StructType\ResultShippingInfo
     */
    public function setShippingInfo(?\ChronopostShipping\StructType\ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
