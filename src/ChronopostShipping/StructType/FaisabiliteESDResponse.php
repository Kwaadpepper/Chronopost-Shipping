<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ResultFaisabiliteESD|null
     */
    protected ?\ChronopostShipping\StructType\ResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \ChronopostShipping\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?\ChronopostShipping\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostShipping\StructType\ResultFaisabiliteESD|null
     */
    public function getReturn(): ?\ChronopostShipping\StructType\ResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostShipping\StructType\ResultFaisabiliteESD $return
     * @return \ChronopostShipping\StructType\FaisabiliteESDResponse
     */
    public function setReturn(?\ChronopostShipping\StructType\ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
