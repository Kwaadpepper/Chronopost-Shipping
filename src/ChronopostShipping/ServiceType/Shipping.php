<?php

declare(strict_types=1);

namespace ChronopostShipping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping ServiceType
 * @subpackage Services
 */
class Shipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClientPC = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClientPC', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClientPC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV3 $parameters
     * @return \ChronopostShipping\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\ChronopostShipping\StructType\ShippingV3 $parameters)
    {
        try {
            $this->setResult($resultShippingV3 = $this->getSoapClient()->__soapCall('shippingV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV2 $parameters
     * @return \ChronopostShipping\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\ChronopostShipping\StructType\ShippingV2 $parameters)
    {
        try {
            $this->setResult($resultShippingV2 = $this->getSoapClient()->__soapCall('shippingV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithESDOnlyV2 $parameters
     * @return \ChronopostShipping\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\ChronopostShipping\StructType\ShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnlyV2 = $this->getSoapClient()->__soapCall('shippingWithESDOnlyV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnlyV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelV6 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV6Response|bool
     */
    public function shippingMultiParcelV6(\ChronopostShipping\StructType\ShippingMultiParcelV6 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV6 = $this->getSoapClient()->__soapCall('shippingMultiParcelV6', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelV5 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\ChronopostShipping\StructType\ShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV5 = $this->getSoapClient()->__soapCall('shippingMultiParcelV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV7 $parameters
     * @return \ChronopostShipping\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\ChronopostShipping\StructType\ShippingV7 $parameters)
    {
        try {
            $this->setResult($resultShippingV7 = $this->getSoapClient()->__soapCall('shippingV7', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV7;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelV4 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\ChronopostShipping\StructType\ShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV4 = $this->getSoapClient()->__soapCall('shippingMultiParcelV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV6 $parameters
     * @return \ChronopostShipping\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\ChronopostShipping\StructType\ShippingV6 $parameters)
    {
        try {
            $this->setResult($resultShippingV6 = $this->getSoapClient()->__soapCall('shippingV6', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelV3 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\ChronopostShipping\StructType\ShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV5 $parameters
     * @return \ChronopostShipping\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\ChronopostShipping\StructType\ShippingV5 $parameters)
    {
        try {
            $this->setResult($resultShippingV5 = $this->getSoapClient()->__soapCall('shippingV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelV2 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\ChronopostShipping\StructType\ShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingV4 $parameters
     * @return \ChronopostShipping\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\ChronopostShipping\StructType\ShippingV4 $parameters)
    {
        try {
            $this->setResult($resultShippingV4 = $this->getSoapClient()->__soapCall('shippingV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithESDOnly $parameters
     * @return \ChronopostShipping\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\ChronopostShipping\StructType\ShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnly = $this->getSoapClient()->__soapCall('shippingWithESDOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelWithReservation $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\ChronopostShipping\StructType\ShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservation = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClient $parameters
     * @return \ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClient = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClient', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcel $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\ChronopostShipping\StructType\ShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcel = $this->getSoapClient()->__soapCall('shippingMultiParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\Shipping $parameters
     * @return \ChronopostShipping\StructType\ShippingResponse|bool
     */
    public function shipping(\ChronopostShipping\StructType\Shipping $parameters)
    {
        try {
            $this->setResult($resultShipping = $this->getSoapClient()->__soapCall('shipping', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV2 $parameters
     * @return \ChronopostShipping\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\ChronopostShipping\StructType\ShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithReservationV2 $parameters
     * @return \ChronopostShipping\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\ChronopostShipping\StructType\ShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationV2 = $this->getSoapClient()->__soapCall('shippingWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\ShippingWithReservation $parameters
     * @return \ChronopostShipping\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\ChronopostShipping\StructType\ShippingWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservation = $this->getSoapClient()->__soapCall('shippingWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostShipping\StructType\ShippingMultiParcelResponse|\ChronopostShipping\StructType\ShippingMultiParcelV2Response|\ChronopostShipping\StructType\ShippingMultiParcelV3Response|\ChronopostShipping\StructType\ShippingMultiParcelV4Response|\ChronopostShipping\StructType\ShippingMultiParcelV5Response|\ChronopostShipping\StructType\ShippingMultiParcelV6Response|\ChronopostShipping\StructType\ShippingMultiParcelWithReservationResponse|\ChronopostShipping\StructType\ShippingMultiParcelWithReservationV2Response|\ChronopostShipping\StructType\ShippingMultiParcelWithReservationV3Response|\ChronopostShipping\StructType\ShippingResponse|\ChronopostShipping\StructType\ShippingV2Response|\ChronopostShipping\StructType\ShippingV3Response|\ChronopostShipping\StructType\ShippingV4Response|\ChronopostShipping\StructType\ShippingV5Response|\ChronopostShipping\StructType\ShippingV6Response|\ChronopostShipping\StructType\ShippingV7Response|\ChronopostShipping\StructType\ShippingWithESDOnlyResponse|\ChronopostShipping\StructType\ShippingWithESDOnlyV2Response|\ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\ChronopostShipping\StructType\ShippingWithReservationAndESDWithRefClientResponse|\ChronopostShipping\StructType\ShippingWithReservationResponse|\ChronopostShipping\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
