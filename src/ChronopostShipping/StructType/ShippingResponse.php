<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingResponse
     * @uses ShippingResponse::setReturn()
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
     * @return \ChronopostShipping\StructType\ShippingResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
