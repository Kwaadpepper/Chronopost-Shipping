<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultEnlevementNational|null
     */
    protected ?\ChronopostShipping\StructType\ResultEnlevementNational $return = null;
    /**
     * Constructor method for creerEnlevementNationalResponse
     * @uses CreerEnlevementNationalResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultEnlevementNational $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultEnlevementNational|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultEnlevementNational
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultEnlevementNational $return
     * @return \ChronopostShipping\StructType\CreerEnlevementNationalResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultEnlevementNational $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
