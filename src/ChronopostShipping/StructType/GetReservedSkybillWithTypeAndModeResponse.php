<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
