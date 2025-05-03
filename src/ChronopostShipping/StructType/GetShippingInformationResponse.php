<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultShippingInfo|null
     */
    protected ?\ChronopostShipping\StructType\ResultShippingInfo $return = null;
    /**
     * Constructor method for getShippingInformationResponse
     * @uses GetShippingInformationResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultShippingInfo $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultShippingInfo|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultShippingInfo
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultShippingInfo $return
     * @return \ChronopostShipping\StructType\GetShippingInformationResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultShippingInfo $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
