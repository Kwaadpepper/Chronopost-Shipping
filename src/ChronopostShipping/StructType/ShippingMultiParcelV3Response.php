<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV3Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultMultiParcelExpeditionValue|null
     */
    protected ?\ChronopostShipping\StructType\ResultMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelV3Response
     * @uses ShippingMultiParcelV3Response::setReturn()
     * @param \ChronopostShipping\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultMultiParcelExpeditionValue $return
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3Response
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
