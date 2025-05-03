<?php

declare(strict_types=1);

namespace ChronopostShipping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rechercher ServiceType
 * @subpackage Services
 */
class Rechercher extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rechercherContraintesEnlevementV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\RechercherContraintesEnlevementV2 $parameters
     * @return \ChronopostShipping\StructType\RechercherContraintesEnlevementV2Response|bool
     */
    public function rechercherContraintesEnlevementV2(\ChronopostShipping\StructType\RechercherContraintesEnlevementV2 $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevementV2 = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevementV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercherContraintesEnlevementV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercherContraintesEnlevement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\RechercherContraintesEnlevement $parameters
     * @return \ChronopostShipping\StructType\RechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\ChronopostShipping\StructType\RechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevement = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercherContraintesEnlevement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostShipping\StructType\RechercherContraintesEnlevementResponse|\ChronopostShipping\StructType\RechercherContraintesEnlevementV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
