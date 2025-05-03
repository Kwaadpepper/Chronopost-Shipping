<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\EsdResultContraintesAgenceValue|null
     */
    protected ?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     * @param \ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\EsdResultContraintesAgenceValue|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return
     * @return \ChronopostShipping\StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
