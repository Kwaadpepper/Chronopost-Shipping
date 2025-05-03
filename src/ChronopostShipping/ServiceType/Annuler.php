<?php

declare(strict_types=1);

namespace ChronopostShipping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler ServiceType
 * @subpackage Services
 */
class Annuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\AnnulerEnlevements $parameters
     * @return \ChronopostShipping\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\ChronopostShipping\StructType\AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnulerEnlevements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostShipping\StructType\AnnulerEnlevementsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
