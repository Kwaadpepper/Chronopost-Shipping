<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultAnnulerEnlevement|null
     */
    protected ?\ChronopostShipping\StructType\ResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultAnnulerEnlevement $return
     * @return \ChronopostShipping\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
