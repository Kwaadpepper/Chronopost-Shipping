<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeByReservationResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeByReservationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillWithTypeAndModeByReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeByReservationResponse
     * @uses GetReservedSkybillWithTypeAndModeByReservationResponse::setReturn()
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
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
