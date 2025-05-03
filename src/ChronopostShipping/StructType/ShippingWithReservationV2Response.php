<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultReservationExpeditionValueV2|null
     */
    protected ?\ChronopostShipping\StructType\ResultReservationExpeditionValueV2 $return = null;
    /**
     * Constructor method for shippingWithReservationV2Response
     * @uses ShippingWithReservationV2Response::setReturn()
     * @param \ChronopostShipping\StructType\ResultReservationExpeditionValueV2 $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultReservationExpeditionValueV2|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultReservationExpeditionValueV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultReservationExpeditionValueV2 $return
     * @return \ChronopostShipping\StructType\ShippingWithReservationV2Response
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultReservationExpeditionValueV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
