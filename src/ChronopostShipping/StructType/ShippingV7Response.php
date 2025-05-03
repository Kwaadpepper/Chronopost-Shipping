<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultMonoParcelExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultMonoParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingV7Response
     * @uses ShippingV7Response::setReturn()
     * @param \ChronopostShipping\StructType\ResultMonoParcelExpeditionValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultMonoParcelExpeditionValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultMonoParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultMonoParcelExpeditionValue $return
     * @return \ChronopostShipping\StructType\ShippingV7Response
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultMonoParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
