<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV4Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV4Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV4Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingV4Response
     * @uses ShippingV4Response::setReturn()
     * @param \ChronopostShipping\StructType\ResultExpeditionValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultExpeditionValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultExpeditionValue $return
     * @return \ChronopostShipping\StructType\ShippingV4Response
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
