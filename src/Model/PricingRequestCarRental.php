<?php
/**
 * PricingRequestCarRental
 *
 * PHP version 5
 *
 * @category Class
 * @package  BrightWrite
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BrightWrite\Model;

use \ArrayAccess;
/**
 * PricingRequestCarRental Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     BrightWrite
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PricingRequestCarRental extends PricingRequestGeneric implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'experimentGroup' => 'string',
        'policyDestinationCountryCode' => 'string',
        'policyType' => 'string',
        'requestedLiability' => 'double',
        'policyExcess' => 'double',
        'policyLiability' => 'double',
        'currencyForExcessAndLiability' => 'string',
        'rentalCarBooking' => '\BrightWrite\Model\BookingRentalCar'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'experimentGroup' => 'experimentGroup',
        'policyDestinationCountryCode' => 'policyDestinationCountryCode',
        'policyType' => 'policyType',
        'requestedLiability' => 'requestedLiability',
        'policyExcess' => 'policyExcess',
        'policyLiability' => 'policyLiability',
        'currencyForExcessAndLiability' => 'currencyForExcessAndLiability',
        'rentalCarBooking' => 'rentalCarBooking'
    );
  
    static function attributeMap() {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'experimentGroup' => 'setExperimentGroup',
        'policyDestinationCountryCode' => 'setPolicyDestinationCountryCode',
        'policyType' => 'setPolicyType',
        'requestedLiability' => 'setRequestedLiability',
        'policyExcess' => 'setPolicyExcess',
        'policyLiability' => 'setPolicyLiability',
        'currencyForExcessAndLiability' => 'setCurrencyForExcessAndLiability',
        'rentalCarBooking' => 'setRentalCarBooking'
    );
  
    static function setters() {
        return parent::setters() + self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'experimentGroup' => 'getExperimentGroup',
        'policyDestinationCountryCode' => 'getPolicyDestinationCountryCode',
        'policyType' => 'getPolicyType',
        'requestedLiability' => 'getRequestedLiability',
        'policyExcess' => 'getPolicyExcess',
        'policyLiability' => 'getPolicyLiability',
        'currencyForExcessAndLiability' => 'getCurrencyForExcessAndLiability',
        'rentalCarBooking' => 'getRentalCarBooking'
    );
  
    static function getters() {
        return parent::getters() + self::$getters;
    }

    
    /**
      * $experimentGroup The experimentGroup (only turned on for RentalCars)
      * @var string
      */
    protected $experimentGroup;
    
    /**
      * $policyDestinationCountryCode ISO 3166 Two Character standard
      * @var string
      */
    protected $policyDestinationCountryCode;
    
    /**
      * $policyType Requested policy type [ ExcessReduction, CDW, Comprehensive, RoadsideAssistance, FullProtection ]. This is the policy type code agreed with Partner in advance.
      * @var string
      */
    protected $policyType;
    
    /**
      * $requestedLiability This is the max payout for the policy requested by the partner (the Cover Amount in RC.com API)
      * @var double
      */
    protected $requestedLiability;
    
    /**
      * $policyExcess Excess that the underwriter has quoted
      * @var double
      */
    protected $policyExcess;
    
    /**
      * $policyLiability Liability that the underwriter has quoted
      * @var double
      */
    protected $policyLiability;
    
    /**
      * $currencyForExcessAndLiability Three character ISO 4217
      * @var string
      */
    protected $currencyForExcessAndLiability;
    
    /**
      * $rentalCarBooking 
      * @var \BrightWrite\Model\BookingRentalCar
      */
    protected $rentalCarBooking;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        if ($data != null) {
            $this->experimentGroup = $data["experimentGroup"];
            $this->policyDestinationCountryCode = $data["policyDestinationCountryCode"];
            $this->policyType = $data["policyType"];
            $this->requestedLiability = $data["requestedLiability"];
            $this->policyExcess = $data["policyExcess"];
            $this->policyLiability = $data["policyLiability"];
            $this->currencyForExcessAndLiability = $data["currencyForExcessAndLiability"];
            $this->rentalCarBooking = $data["rentalCarBooking"];
        }
    }
    
    /**
     * Gets experimentGroup
     * @return string
     */
    public function getExperimentGroup()
    {
        return $this->experimentGroup;
    }
  
    /**
     * Sets experimentGroup
     * @param string $experimentGroup The experimentGroup (only turned on for RentalCars)
     * @return $this
     */
    public function setExperimentGroup($experimentGroup)
    {
        
        $this->experimentGroup = $experimentGroup;
        return $this;
    }
    
    /**
     * Gets policyDestinationCountryCode
     * @return string
     */
    public function getPolicyDestinationCountryCode()
    {
        return $this->policyDestinationCountryCode;
    }
  
    /**
     * Sets policyDestinationCountryCode
     * @param string $policyDestinationCountryCode ISO 3166 Two Character standard
     * @return $this
     */
    public function setPolicyDestinationCountryCode($policyDestinationCountryCode)
    {
        
        $this->policyDestinationCountryCode = $policyDestinationCountryCode;
        return $this;
    }
    
    /**
     * Gets policyType
     * @return string
     */
    public function getPolicyType()
    {
        return $this->policyType;
    }
  
    /**
     * Sets policyType
     * @param string $policyType Requested policy type [ ExcessReduction, CDW, Comprehensive, RoadsideAssistance, FullProtection ]. This is the policy type code agreed with Partner in advance.
     * @return $this
     */
    public function setPolicyType($policyType)
    {
        
        $this->policyType = $policyType;
        return $this;
    }
    
    /**
     * Gets requestedLiability
     * @return double
     */
    public function getRequestedLiability()
    {
        return $this->requestedLiability;
    }
  
    /**
     * Sets requestedLiability
     * @param double $requestedLiability This is the max payout for the policy requested by the partner (the Cover Amount in RC.com API)
     * @return $this
     */
    public function setRequestedLiability($requestedLiability)
    {
        
        $this->requestedLiability = $requestedLiability;
        return $this;
    }
    
    /**
     * Gets policyExcess
     * @return double
     */
    public function getPolicyExcess()
    {
        return $this->policyExcess;
    }
  
    /**
     * Sets policyExcess
     * @param double $policyExcess Excess that the underwriter has quoted
     * @return $this
     */
    public function setPolicyExcess($policyExcess)
    {
        
        $this->policyExcess = $policyExcess;
        return $this;
    }
    
    /**
     * Gets policyLiability
     * @return double
     */
    public function getPolicyLiability()
    {
        return $this->policyLiability;
    }
  
    /**
     * Sets policyLiability
     * @param double $policyLiability Liability that the underwriter has quoted
     * @return $this
     */
    public function setPolicyLiability($policyLiability)
    {
        
        $this->policyLiability = $policyLiability;
        return $this;
    }
    
    /**
     * Gets currencyForExcessAndLiability
     * @return string
     */
    public function getCurrencyForExcessAndLiability()
    {
        return $this->currencyForExcessAndLiability;
    }
  
    /**
     * Sets currencyForExcessAndLiability
     * @param string $currencyForExcessAndLiability Three character ISO 4217
     * @return $this
     */
    public function setCurrencyForExcessAndLiability($currencyForExcessAndLiability)
    {
        
        $this->currencyForExcessAndLiability = $currencyForExcessAndLiability;
        return $this;
    }
    
    /**
     * Gets rentalCarBooking
     * @return \BrightWrite\Model\BookingRentalCar
     */
    public function getRentalCarBooking()
    {
        return $this->rentalCarBooking;
    }
  
    /**
     * Sets rentalCarBooking
     * @param \BrightWrite\Model\BookingRentalCar $rentalCarBooking 
     * @return $this
     */
    public function setRentalCarBooking($rentalCarBooking)
    {
        
        $this->rentalCarBooking = $rentalCarBooking;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\BrightWrite\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\BrightWrite\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
