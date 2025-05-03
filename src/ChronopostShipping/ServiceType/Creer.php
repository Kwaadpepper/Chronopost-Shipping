<?php

declare(strict_types=1);

namespace ChronopostShipping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer ServiceType
 * @subpackage Services
 */
class Creer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\CreerEnlevementNational $parameters
     * @return \ChronopostShipping\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\ChronopostShipping\StructType\CreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementNational = $this->getSoapClient()->__soapCall('creerEnlevementNational', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementNational;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementEurope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\CreerEnlevementEurope $parameters
     * @return \ChronopostShipping\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\ChronopostShipping\StructType\CreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementEurope = $this->getSoapClient()->__soapCall('creerEnlevementEurope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementEurope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostShipping\StructType\CreerEnlevementEuropeResponse|\ChronopostShipping\StructType\CreerEnlevementNationalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
