<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoDouanieres StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InfoDouanieres extends AbstractStructBase
{
    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $devise = null;
    /**
     * The montant
     * @var float|null
     */
    protected ?float $montant = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for infoDouanieres
     * @uses InfoDouanieres::setDevise()
     * @uses InfoDouanieres::setMontant()
     * @uses InfoDouanieres::setType()
     * @param string $devise
     * @param float $montant
     * @param string $type
     */
    public function __construct(?string $devise = null, ?float $montant = null, ?string $type = null)
    {
        $this
            ->setDevise($devise)
            ->setMontant($montant)
            ->setType($type);
    }
    /**
     * Get devise value
     * @return string|null
     */
    public function getDevise(): ?string
    {
        return $this->devise;
    }
    /**
     * Set devise value
     * @param string $devise
     * @return \ChronopostShipping\StructType\InfoDouanieres
     */
    public function setDevise(?string $devise = null): self
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;
        
        return $this;
    }
    /**
     * Get montant value
     * @return float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }
    /**
     * Set montant value
     * @param float $montant
     * @return \ChronopostShipping\StructType\InfoDouanieres
     */
    public function setMontant(?float $montant = null): self
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \ChronopostShipping\StructType\InfoDouanieres
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
