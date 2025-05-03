<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationResponse
     * @uses ShippingMultiParcelWithReservationResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue $return
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultReservationMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
