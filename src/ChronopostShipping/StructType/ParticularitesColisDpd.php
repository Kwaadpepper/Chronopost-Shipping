<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParticularitesColisDpd extends AbstractStructBase
{
    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\InfoDouanieres|null
     */
    protected ?\ChronopostShipping\StructType\InfoDouanieres $infoDouanieres = null;
    /**
     * The valeurAssuree
     * @var float|null
     */
    protected ?float $valeurAssuree = null;
    /**
     * Constructor method for particularitesColisDpd
     * @uses ParticularitesColisDpd::setInfoDouanieres()
     * @uses ParticularitesColisDpd::setValeurAssuree()
     * @param \ChronopostShipping\StructType\InfoDouanieres $infoDouanieres
     * @param float $valeurAssuree
     */
    public function __construct(?\ChronopostShipping\StructType\InfoDouanieres $infoDouanieres = null, ?float $valeurAssuree = null)
    {
        $this
            ->setInfoDouanieres($infoDouanieres)
            ->setValeurAssuree($valeurAssuree);
    }
    /**
     * Get infoDouanieres value
     * @return \ChronopostShipping\StructType\InfoDouanieres|null
     */
    public function getInfoDouanieres(): ?\ChronopostShipping\StructType\InfoDouanieres
    {
        return $this->infoDouanieres;
    }
    /**
     * Set infoDouanieres value
     * @param \ChronopostShipping\StructType\InfoDouanieres $infoDouanieres
     * @return \ChronopostShipping\StructType\ParticularitesColisDpd
     */
    public function setInfoDouanieres(?\ChronopostShipping\StructType\InfoDouanieres $infoDouanieres = null): self
    {
        $this->infoDouanieres = $infoDouanieres;
        
        return $this;
    }
    /**
     * Get valeurAssuree value
     * @return float|null
     */
    public function getValeurAssuree(): ?float
    {
        return $this->valeurAssuree;
    }
    /**
     * Set valeurAssuree value
     * @param float $valeurAssuree
     * @return \ChronopostShipping\StructType\ParticularitesColisDpd
     */
    public function setValeurAssuree(?float $valeurAssuree = null): self
    {
        // validation for constraint: float
        if (!is_null($valeurAssuree) && !(is_float($valeurAssuree) || is_numeric($valeurAssuree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valeurAssuree, true), gettype($valeurAssuree)), __LINE__);
        }
        $this->valeurAssuree = $valeurAssuree;
        
        return $this;
    }
}
