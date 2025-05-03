<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationAndESDWithRefClientResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientResponse
     * @uses ShippingWithReservationAndESDWithRefClientResponse::setReturn()
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
     * @return \ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
