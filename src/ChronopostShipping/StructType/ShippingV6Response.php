<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultExpeditionValueV3|null
     */
    protected ?\ChronopostShipping\StructType\ResultExpeditionValueV3 $return = null;
    /**
     * Constructor method for shippingV6Response
     * @uses ShippingV6Response::setReturn()
     * @param \ChronopostShipping\StructType\ResultExpeditionValueV3 $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultExpeditionValueV3|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultExpeditionValueV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultExpeditionValueV3 $return
     * @return \ChronopostShipping\StructType\ShippingV6Response
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
