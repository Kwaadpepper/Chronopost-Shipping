<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipperValueV2 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShipperValueV2 extends ShipperValue
{
    /**
     * The shipperType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperType = null;
    /**
     * Constructor method for shipperValueV2
     * @uses ShipperValueV2::setShipperType()
     * @param string $shipperType
     */
    public function __construct(?string $shipperType = null)
    {
        $this
            ->setShipperType($shipperType);
    }
    /**
     * Get shipperType value
     * @return string|null
     */
    public function getShipperType(): ?string
    {
        return $this->shipperType;
    }
    /**
     * Set shipperType value
     * @param string $shipperType
     * @return \ChronopostShipping\StructType\ShipperValueV2
     */
    public function setShipperType(?string $shipperType = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperType) && !is_string($shipperType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperType, true), gettype($shipperType)), __LINE__);
        }
        $this->shipperType = $shipperType;
        
        return $this;
    }
}
