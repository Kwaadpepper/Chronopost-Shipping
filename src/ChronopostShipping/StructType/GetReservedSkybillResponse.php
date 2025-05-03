<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultGetReservedSkybillValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultGetReservedSkybillValue $return = null;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultGetReservedSkybillValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultGetReservedSkybillValue $return
     * @return \ChronopostShipping\StructType\GetReservedSkybillResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
