<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationResponse
     * @uses ShippingWithReservationResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultReservationExpeditionValue $return
     * @return \ChronopostShipping\StructType\ShippingWithReservationResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
