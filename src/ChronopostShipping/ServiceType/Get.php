<?php

declare(strict_types=1);

namespace ChronopostShipping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getReservedSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetReservedSkybill $parameters
     * @return \ChronopostShipping\StructType\GetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\ChronopostShipping\StructType\GetReservedSkybill $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybill = $this->getSoapClient()->__soapCall('getReservedSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetRouting $parameters
     * @return \ChronopostShipping\StructType\GetRoutingResponse|bool
     */
    public function getRouting(\ChronopostShipping\StructType\GetRouting $parameters)
    {
        try {
            $this->setResult($resultGetRouting = $this->getSoapClient()->__soapCall('getRouting', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRouting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeByReservation = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeByReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndModeByReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetSkybill $parameters
     * @return \ChronopostShipping\StructType\GetSkybillResponse|bool
     */
    public function getSkybill(\ChronopostShipping\StructType\GetSkybill $parameters)
    {
        try {
            $this->setResult($resultGetSkybill = $this->getSoapClient()->__soapCall('getSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeAuth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeAuth = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeAuth', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndModeAuth;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndMode $parameters
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndMode $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndMode = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndMode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetReservedSkybillWithType $parameters
     * @return \ChronopostShipping\StructType\GetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\ChronopostShipping\StructType\GetReservedSkybillWithType $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithType = $this->getSoapClient()->__soapCall('getReservedSkybillWithType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShippingInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostShipping\StructType\GetShippingInformation $parameters
     * @return \ChronopostShipping\StructType\GetShippingInformationResponse|bool
     */
    public function getShippingInformation(\ChronopostShipping\StructType\GetShippingInformation $parameters)
    {
        try {
            $this->setResult($resultGetShippingInformation = $this->getSoapClient()->__soapCall('getShippingInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShippingInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostShipping\StructType\GetReservedSkybillResponse|\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\ChronopostShipping\StructType\GetReservedSkybillWithTypeAndModeResponse|\ChronopostShipping\StructType\GetReservedSkybillWithTypeResponse|\ChronopostShipping\StructType\GetRoutingResponse|\ChronopostShipping\StructType\GetShippingInformationResponse|\ChronopostShipping\StructType\GetSkybillResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
