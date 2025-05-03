<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultPickupOrCollectionRequest|null
     */
    protected ?\ChronopostShipping\StructType\ResultPickupOrCollectionRequest $return = null;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses CreerEnlevementEuropeResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultPickupOrCollectionRequest
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultPickupOrCollectionRequest $return
     * @return \ChronopostShipping\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
