<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statut StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Statut extends AbstractStructBase
{
    /**
     * The entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\Entry[]
     */
    protected ?array $entry = null;
    /**
     * Constructor method for statut
     * @uses Statut::setEntry()
     * @param \ChronopostShipping\StructType\Entry[] $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return \ChronopostShipping\StructType\Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->entry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintFromSetEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $statutEntryItem) {
            // validation for constraint: itemType
            if (!$statutEntryItem instanceof \ChronopostShipping\StructType\Entry) {
                $invalidValues[] = is_object($statutEntryItem) ? get_class($statutEntryItem) : sprintf('%s(%s)', gettype($statutEntryItem), var_export($statutEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entry property can only contain items of type \ChronopostShipping\StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entry value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\Entry[] $entry
     * @return \ChronopostShipping\StructType\Statut
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->entry = $entry;
        
        return $this;
    }
    /**
     * Add item to entry value
     * @throws InvalidArgumentException
     * @param \ChronopostShipping\StructType\Entry $item
     * @return \ChronopostShipping\StructType\Statut
     */
    public function addToEntry(\ChronopostShipping\StructType\Entry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostShipping\StructType\Entry) {
            throw new InvalidArgumentException(sprintf('The entry property can only contain items of type \ChronopostShipping\StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entry[] = $item;
        
        return $this;
    }
}
