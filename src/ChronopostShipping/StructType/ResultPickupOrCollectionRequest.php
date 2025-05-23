<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultPickupOrCollectionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultPickupOrCollectionRequest extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The collectionRequest
     * @var bool|null
     */
    protected ?bool $collectionRequest = null;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libelleErreur = null;
    /**
     * The infoEnlevements
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostShipping\StructType\InfoEnlevement[]
     */
    protected ?array $infoEnlevements = null;
    /**
     * Constructor method for resultPickupOrCollectionRequest
     * @uses ResultPickupOrCollectionRequest::setCodeErreur()
     * @uses ResultPickupOrCollectionRequest::setCollectionRequest()
     * @uses ResultPickupOrCollectionRequest::setLibelleErreur()
     * @uses ResultPickupOrCollectionRequest::setInfoEnlevements()
     * @param int $codeErreur
     * @param bool $collectionRequest
     * @param string $libelleErreur
     * @param \ChronopostShipping\StructType\InfoEnlevement[] $infoEnlevements
     */
    public function __construct(?int $codeErreur = null, ?bool $collectionRequest = null, ?string $libelleErreur = null, ?array $infoEnlevements = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setCollectionRequest($collectionRequest)
            ->setLibelleErreur($libelleErreur)
            ->setInfoEnlevements($infoEnlevements);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        
        return $this;
    }
    /**
     * Get collectionRequest value
     * @return bool|null
     */
    public function getCollectionRequest(): ?bool
    {
        return $this->collectionRequest;
    }
    /**
     * Set collectionRequest value
     * @param bool $collectionRequest
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest
     */
    public function setCollectionRequest(?bool $collectionRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectionRequest) && !is_bool($collectionRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectionRequest, true), gettype($collectionRequest)), __LINE__);
        }
        $this->collectionRequest = $collectionRequest;
        
        return $this;
    }
    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }
    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;
        
        return $this;
    }
    /**
     * Get infoEnlevements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostShipping\StructType\InfoEnlevement[]
     */
    public function getInfoEnlevements(): ?array
    {
        return $this->infoEnlevements ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInfoEnlevements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoEnlevements method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoEnlevementsForArrayConstraintFromSetInfoEnlevements(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultPickupOrCollectionRequestInfoEnlevementsItem) {
            // validation for constraint: itemType
            if (!$resultPickupOrCollectionRequestInfoEnlevementsItem instanceof \ChronopostShipping\StructType\InfoEnlevement) {
                $invalidValues[] = is_object($resultPickupOrCollectionRequestInfoEnlevementsItem) ? get_class($resultPickupOrCollectionRequestInfoEnlevementsItem) : sprintf('%s(%s)', gettype($resultPickupOrCollectionRequestInfoEnlevementsItem), var_export($resultPickupOrCollectionRequestInfoEnlevementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoEnlevements property can only contain items of type \ChronopostShipping\StructType\InfoEnlevement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set infoEnlevements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\InfoEnlevement[] $infoEnlevements
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest
     */
    public function setInfoEnlevements(?array $infoEnlevements = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoEnlevementsArrayErrorMessage = self::validateInfoEnlevementsForArrayConstraintFromSetInfoEnlevements($infoEnlevements))) {
            throw new InvalidArgumentException($infoEnlevementsArrayErrorMessage, __LINE__);
        }
        if (is_null($infoEnlevements) || (is_array($infoEnlevements) && empty($infoEnlevements))) {
            unset($this->infoEnlevements);
        } else {
            $this->infoEnlevements = $infoEnlevements;
        }
        
        return $this;
    }
    /**
     * Add item to infoEnlevements value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\InfoEnlevement $item
     * @return \ChronopostShipping\StructType\ResultPickupOrCollectionRequest
     */
    public function addToInfoEnlevements(\ChronopostShipping\StructType\InfoEnlevement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\InfoEnlevement) {
            throw new InvalidArgumentException(sprintf('The infoEnlevements property can only contain items of type \ChronopostShipping\StructType\InfoEnlevement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoEnlevements[] = $item;
        
        return $this;
    }
}
