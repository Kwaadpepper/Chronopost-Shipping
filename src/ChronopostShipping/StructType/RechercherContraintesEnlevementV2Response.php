<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevementV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\EsdResultContraintesAgenceValue|null
     */
    protected ?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementV2Response
     * @uses RechercherContraintesEnlevementV2Response::setReturn()
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
     * @return \ChronopostShipping\StructType\RechercherContraintesEnlevementV2Response
     */
    public function setReturn(?\ChronopostShipping\StructType\EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
