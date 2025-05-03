<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultGetRouting|null
     */
    protected ?\ChronopostShipping\StructType\ResultGetRouting $return = null;
    /**
     * Constructor method for getRoutingResponse
     * @uses GetRoutingResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultGetRouting $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultGetRouting|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultGetRouting
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultGetRouting $return
     * @return \ChronopostShipping\StructType\GetRoutingResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultGetRouting $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
