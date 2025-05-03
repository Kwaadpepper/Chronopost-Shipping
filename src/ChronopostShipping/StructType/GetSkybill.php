<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSkybill StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSkybill
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSkybill extends AbstractStructBase
{
    /**
     * The numberSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numberSearch = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mode = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The account
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * Constructor method for getSkybill
     * @uses GetSkybill::setNumberSearch()
     * @uses GetSkybill::setMode()
     * @uses GetSkybill::setKey()
     * @uses GetSkybill::setAccount()
     * @param string $numberSearch
     * @param string $mode
     * @param string $key
     * @param string $account
     */
    public function __construct(?string $numberSearch = null, ?string $mode = null, ?string $key = null, ?string $account = null)
    {
        $this
            ->setNumberSearch($numberSearch)
            ->setMode($mode)
            ->setKey($key)
            ->setAccount($account);
    }
    /**
     * Get numberSearch value
     * @return string|null
     */
    public function getNumberSearch(): ?string
    {
        return $this->numberSearch;
    }
    /**
     * Set numberSearch value
     * @param string $numberSearch
     * @return \ChronopostShipping\StructType\GetSkybill
     */
    public function setNumberSearch(?string $numberSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($numberSearch) && !is_string($numberSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberSearch, true), gettype($numberSearch)), __LINE__);
        }
        $this->numberSearch = $numberSearch;
        
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \ChronopostShipping\StructType\GetSkybill
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \ChronopostShipping\StructType\GetSkybill
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \ChronopostShipping\StructType\GetSkybill
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
}
