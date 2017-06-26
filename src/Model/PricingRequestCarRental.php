<?php
/**
 * PricingRequestCarRental
 *
 * PHP version 5
 *
 * @category Class
 * @package  BrightWrite
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BrightWrite™
 *
 * BrightWrite API
 *
 * OpenAPI spec version: 0.1.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
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
 * @category    Class */
/**
 * @package     BrightWrite
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PricingRequestCarRental extends PricingRequestGeneric implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PricingRequestCarRental';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'policyDestinationCountryCode' => 'string',
        'policyType' => 'string',
        'requestedLiability' => 'double',
        'requestedExcessRangeLow' => 'double',
        'requestedExcessRangeHigh' => 'double',
        'policyExcess' => 'double',
        'policyLiability' => 'double',
        'currencyForExcessAndLiability' => 'string',
        'rentalCarBooking' => '\BrightWrite\Model\BookingRentalCar',
        'partnerId' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'policyDestinationCountryCode' => 'policyDestinationCountryCode',
        'policyType' => 'policyType',
        'requestedLiability' => 'requestedLiability',
        'requestedExcessRangeLow' => 'requestedExcessRangeLow',
        'requestedExcessRangeHigh' => 'requestedExcessRangeHigh',
        'policyExcess' => 'policyExcess',
        'policyLiability' => 'policyLiability',
        'currencyForExcessAndLiability' => 'currencyForExcessAndLiability',
        'rentalCarBooking' => 'rentalCarBooking',
        'partnerId' => 'partnerId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'policyDestinationCountryCode' => 'setPolicyDestinationCountryCode',
        'policyType' => 'setPolicyType',
        'requestedLiability' => 'setRequestedLiability',
        'requestedExcessRangeLow' => 'setRequestedExcessRangeLow',
        'requestedExcessRangeHigh' => 'setRequestedExcessRangeHigh',
        'policyExcess' => 'setPolicyExcess',
        'policyLiability' => 'setPolicyLiability',
        'currencyForExcessAndLiability' => 'setCurrencyForExcessAndLiability',
        'rentalCarBooking' => 'setRentalCarBooking',
        'partnerId' => 'setPartnerId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'policyDestinationCountryCode' => 'getPolicyDestinationCountryCode',
        'policyType' => 'getPolicyType',
        'requestedLiability' => 'getRequestedLiability',
        'requestedExcessRangeLow' => 'getRequestedExcessRangeLow',
        'requestedExcessRangeHigh' => 'getRequestedExcessRangeHigh',
        'policyExcess' => 'getPolicyExcess',
        'policyLiability' => 'getPolicyLiability',
        'currencyForExcessAndLiability' => 'getCurrencyForExcessAndLiability',
        'rentalCarBooking' => 'getRentalCarBooking',
        'partnerId' => 'getPartnerId'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['policyDestinationCountryCode'] = isset($data['policyDestinationCountryCode']) ? $data['policyDestinationCountryCode'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['requestedLiability'] = isset($data['requestedLiability']) ? $data['requestedLiability'] : null;
        $this->container['requestedExcessRangeLow'] = isset($data['requestedExcessRangeLow']) ? $data['requestedExcessRangeLow'] : null;
        $this->container['requestedExcessRangeHigh'] = isset($data['requestedExcessRangeHigh']) ? $data['requestedExcessRangeHigh'] : null;
        $this->container['policyExcess'] = isset($data['policyExcess']) ? $data['policyExcess'] : null;
        $this->container['policyLiability'] = isset($data['policyLiability']) ? $data['policyLiability'] : null;
        $this->container['currencyForExcessAndLiability'] = isset($data['currencyForExcessAndLiability']) ? $data['currencyForExcessAndLiability'] : null;
        $this->container['rentalCarBooking'] = isset($data['rentalCarBooking']) ? $data['rentalCarBooking'] : null;
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['policyDestinationCountryCode'] === null) {
            $invalid_properties[] = "'policyDestinationCountryCode' can't be null";
        }
        if ((strlen($this->container['policyDestinationCountryCode']) > 2)) {
            $invalid_properties[] = "invalid value for 'policyDestinationCountryCode', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['policyDestinationCountryCode']) < 2)) {
            $invalid_properties[] = "invalid value for 'policyDestinationCountryCode', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['policyType'] === null) {
            $invalid_properties[] = "'policyType' can't be null";
        }
        if ((strlen($this->container['policyType']) > 64)) {
            $invalid_properties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 64.";
        }

        if ((strlen($this->container['policyType']) < 2)) {
            $invalid_properties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['requestedLiability']) && ($this->container['requestedLiability'] > 1000000.0)) {
            $invalid_properties[] = "invalid value for 'requestedLiability', must be smaller than or equal to 1000000.0.";
        }

        if (!is_null($this->container['requestedLiability']) && ($this->container['requestedLiability'] < 0.01)) {
            $invalid_properties[] = "invalid value for 'requestedLiability', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['requestedExcessRangeLow']) && ($this->container['requestedExcessRangeLow'] > 1000000.0)) {
            $invalid_properties[] = "invalid value for 'requestedExcessRangeLow', must be smaller than or equal to 1000000.0.";
        }

        if (!is_null($this->container['requestedExcessRangeLow']) && ($this->container['requestedExcessRangeLow'] < 0.01)) {
            $invalid_properties[] = "invalid value for 'requestedExcessRangeLow', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['requestedExcessRangeHigh']) && ($this->container['requestedExcessRangeHigh'] > 1000000.0)) {
            $invalid_properties[] = "invalid value for 'requestedExcessRangeHigh', must be smaller than or equal to 1000000.0.";
        }

        if (!is_null($this->container['requestedExcessRangeHigh']) && ($this->container['requestedExcessRangeHigh'] < 0.01)) {
            $invalid_properties[] = "invalid value for 'requestedExcessRangeHigh', must be bigger than or equal to 0.01.";
        }

        if ($this->container['policyExcess'] === null) {
            $invalid_properties[] = "'policyExcess' can't be null";
        }
        if (($this->container['policyExcess'] > 1000000.0)) {
            $invalid_properties[] = "invalid value for 'policyExcess', must be smaller than or equal to 1000000.0.";
        }

        if (($this->container['policyExcess'] < 0)) {
            $invalid_properties[] = "invalid value for 'policyExcess', must be bigger than or equal to 0.";
        }

        if ($this->container['policyLiability'] === null) {
            $invalid_properties[] = "'policyLiability' can't be null";
        }
        if (($this->container['policyLiability'] > 1000000.0)) {
            $invalid_properties[] = "invalid value for 'policyLiability', must be smaller than or equal to 1000000.0.";
        }

        if (($this->container['policyLiability'] < 0.01)) {
            $invalid_properties[] = "invalid value for 'policyLiability', must be bigger than or equal to 0.01.";
        }

        if ($this->container['currencyForExcessAndLiability'] === null) {
            $invalid_properties[] = "'currencyForExcessAndLiability' can't be null";
        }
        if ((strlen($this->container['currencyForExcessAndLiability']) > 3)) {
            $invalid_properties[] = "invalid value for 'currencyForExcessAndLiability', the character length must be smaller than or equal to 3.";
        }

        if ((strlen($this->container['currencyForExcessAndLiability']) < 3)) {
            $invalid_properties[] = "invalid value for 'currencyForExcessAndLiability', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['rentalCarBooking'] === null) {
            $invalid_properties[] = "'rentalCarBooking' can't be null";
        }
        if ($this->container['partnerId'] === null) {
            $invalid_properties[] = "'partnerId' can't be null";
        }
        if ((strlen($this->container['partnerId']) > 64)) {
            $invalid_properties[] = "invalid value for 'partnerId', the character length must be smaller than or equal to 64.";
        }

        if ((strlen($this->container['partnerId']) < 2)) {
            $invalid_properties[] = "invalid value for 'partnerId', the character length must be bigger than or equal to 2.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['policyDestinationCountryCode'] === null) {
            return false;
        }
        if (strlen($this->container['policyDestinationCountryCode']) > 2) {
            return false;
        }
        if (strlen($this->container['policyDestinationCountryCode']) < 2) {
            return false;
        }
        if ($this->container['policyType'] === null) {
            return false;
        }
        if (strlen($this->container['policyType']) > 64) {
            return false;
        }
        if (strlen($this->container['policyType']) < 2) {
            return false;
        }
        if ($this->container['requestedLiability'] > 1000000.0) {
            return false;
        }
        if ($this->container['requestedLiability'] < 0.01) {
            return false;
        }
        if ($this->container['requestedExcessRangeLow'] > 1000000.0) {
            return false;
        }
        if ($this->container['requestedExcessRangeLow'] < 0.01) {
            return false;
        }
        if ($this->container['requestedExcessRangeHigh'] > 1000000.0) {
            return false;
        }
        if ($this->container['requestedExcessRangeHigh'] < 0.01) {
            return false;
        }
        if ($this->container['policyExcess'] === null) {
            return false;
        }
        if ($this->container['policyExcess'] > 1000000.0) {
            return false;
        }
        if ($this->container['policyExcess'] < 0) {
            return false;
        }
        if ($this->container['policyLiability'] === null) {
            return false;
        }
        if ($this->container['policyLiability'] > 1000000.0) {
            return false;
        }
        if ($this->container['policyLiability'] < 0.01) {
            return false;
        }
        if ($this->container['currencyForExcessAndLiability'] === null) {
            return false;
        }
        if (strlen($this->container['currencyForExcessAndLiability']) > 3) {
            return false;
        }
        if (strlen($this->container['currencyForExcessAndLiability']) < 3) {
            return false;
        }
        if ($this->container['rentalCarBooking'] === null) {
            return false;
        }
        if ($this->container['partnerId'] === null) {
            return false;
        }
        if (strlen($this->container['partnerId']) > 64) {
            return false;
        }
        if (strlen($this->container['partnerId']) < 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets policyDestinationCountryCode
     * @return string
     */
    public function getPolicyDestinationCountryCode()
    {
        return $this->container['policyDestinationCountryCode'];
    }

    /**
     * Sets policyDestinationCountryCode
     * @param string $policyDestinationCountryCode ISO 3166 Two Character standard.
     * @return $this
     */
    public function setPolicyDestinationCountryCode($policyDestinationCountryCode)
    {
        if ((strlen($policyDestinationCountryCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $policyDestinationCountryCode when calling PricingRequestCarRental., must be smaller than or equal to 2.');
        }
        if ((strlen($policyDestinationCountryCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $policyDestinationCountryCode when calling PricingRequestCarRental., must be bigger than or equal to 2.');
        }

        $this->container['policyDestinationCountryCode'] = $policyDestinationCountryCode;

        return $this;
    }

    /**
     * Gets policyType
     * @return string
     */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
     * Sets policyType
     * @param string $policyType Requested policy type [ExcessReduction, CDW, Comprehensive, RoadsideAssistance, FullProtection]. This is the policy type code agreed with Partner in advance.
     * @return $this
     */
    public function setPolicyType($policyType)
    {
        if ((strlen($policyType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $policyType when calling PricingRequestCarRental., must be smaller than or equal to 64.');
        }
        if ((strlen($policyType) < 2)) {
            throw new \InvalidArgumentException('invalid length for $policyType when calling PricingRequestCarRental., must be bigger than or equal to 2.');
        }

        $this->container['policyType'] = $policyType;

        return $this;
    }

    /**
     * Gets requestedLiability
     * @return double
     */
    public function getRequestedLiability()
    {
        return $this->container['requestedLiability'];
    }

    /**
     * Sets requestedLiability
     * @param double $requestedLiability This is the max payout for the policy requested by the partner (the Cover Amount in RC.com API).
     * @return $this
     */
    public function setRequestedLiability($requestedLiability)
    {

        if (!is_null($requestedLiability) && ($requestedLiability > 1000000.0)) {
            throw new \InvalidArgumentException('invalid value for $requestedLiability when calling PricingRequestCarRental., must be smaller than or equal to 1000000.0.');
        }
        if (!is_null($requestedLiability) && ($requestedLiability < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $requestedLiability when calling PricingRequestCarRental., must be bigger than or equal to 0.01.');
        }

        $this->container['requestedLiability'] = $requestedLiability;

        return $this;
    }

    /**
     * Gets requestedExcessRangeLow
     * @return double
     */
    public function getRequestedExcessRangeLow()
    {
        return $this->container['requestedExcessRangeLow'];
    }

    /**
     * Sets requestedExcessRangeLow
     * @param double $requestedExcessRangeLow Low range that the distributor has requested for the excess for the vehicle (in the RC.com API this is called the std liability).
     * @return $this
     */
    public function setRequestedExcessRangeLow($requestedExcessRangeLow)
    {

        if (!is_null($requestedExcessRangeLow) && ($requestedExcessRangeLow > 1000000.0)) {
            throw new \InvalidArgumentException('invalid value for $requestedExcessRangeLow when calling PricingRequestCarRental., must be smaller than or equal to 1000000.0.');
        }
        if (!is_null($requestedExcessRangeLow) && ($requestedExcessRangeLow < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $requestedExcessRangeLow when calling PricingRequestCarRental., must be bigger than or equal to 0.01.');
        }

        $this->container['requestedExcessRangeLow'] = $requestedExcessRangeLow;

        return $this;
    }

    /**
     * Gets requestedExcessRangeHigh
     * @return double
     */
    public function getRequestedExcessRangeHigh()
    {
        return $this->container['requestedExcessRangeHigh'];
    }

    /**
     * Sets requestedExcessRangeHigh
     * @param double $requestedExcessRangeHigh High range that the distributor has requested for the excess for the vehicle (in the RC.com API this is called the std liability high).
     * @return $this
     */
    public function setRequestedExcessRangeHigh($requestedExcessRangeHigh)
    {

        if (!is_null($requestedExcessRangeHigh) && ($requestedExcessRangeHigh > 1000000.0)) {
            throw new \InvalidArgumentException('invalid value for $requestedExcessRangeHigh when calling PricingRequestCarRental., must be smaller than or equal to 1000000.0.');
        }
        if (!is_null($requestedExcessRangeHigh) && ($requestedExcessRangeHigh < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $requestedExcessRangeHigh when calling PricingRequestCarRental., must be bigger than or equal to 0.01.');
        }

        $this->container['requestedExcessRangeHigh'] = $requestedExcessRangeHigh;

        return $this;
    }

    /**
     * Gets policyExcess
     * @return double
     */
    public function getPolicyExcess()
    {
        return $this->container['policyExcess'];
    }

    /**
     * Sets policyExcess
     * @param double $policyExcess Excess that the underwriter has quoted.
     * @return $this
     */
    public function setPolicyExcess($policyExcess)
    {

        if (($policyExcess > 1000000.0)) {
            throw new \InvalidArgumentException('invalid value for $policyExcess when calling PricingRequestCarRental., must be smaller than or equal to 1000000.0.');
        }
        if (($policyExcess < 0)) {
            throw new \InvalidArgumentException('invalid value for $policyExcess when calling PricingRequestCarRental., must be bigger than or equal to 0.');
        }

        $this->container['policyExcess'] = $policyExcess;

        return $this;
    }

    /**
     * Gets policyLiability
     * @return double
     */
    public function getPolicyLiability()
    {
        return $this->container['policyLiability'];
    }

    /**
     * Sets policyLiability
     * @param double $policyLiability Liability that the underwriter has quoted.
     * @return $this
     */
    public function setPolicyLiability($policyLiability)
    {

        if (($policyLiability > 1000000.0)) {
            throw new \InvalidArgumentException('invalid value for $policyLiability when calling PricingRequestCarRental., must be smaller than or equal to 1000000.0.');
        }
        if (($policyLiability < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $policyLiability when calling PricingRequestCarRental., must be bigger than or equal to 0.01.');
        }

        $this->container['policyLiability'] = $policyLiability;

        return $this;
    }

    /**
     * Gets currencyForExcessAndLiability
     * @return string
     */
    public function getCurrencyForExcessAndLiability()
    {
        return $this->container['currencyForExcessAndLiability'];
    }

    /**
     * Sets currencyForExcessAndLiability
     * @param string $currencyForExcessAndLiability Three character ISO 4217.
     * @return $this
     */
    public function setCurrencyForExcessAndLiability($currencyForExcessAndLiability)
    {
        if ((strlen($currencyForExcessAndLiability) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currencyForExcessAndLiability when calling PricingRequestCarRental., must be smaller than or equal to 3.');
        }
        if ((strlen($currencyForExcessAndLiability) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currencyForExcessAndLiability when calling PricingRequestCarRental., must be bigger than or equal to 3.');
        }

        $this->container['currencyForExcessAndLiability'] = $currencyForExcessAndLiability;

        return $this;
    }

    /**
     * Gets rentalCarBooking
     * @return \BrightWrite\Model\BookingRentalCar
     */
    public function getRentalCarBooking()
    {
        return $this->container['rentalCarBooking'];
    }

    /**
     * Sets rentalCarBooking
     * @param \BrightWrite\Model\BookingRentalCar $rentalCarBooking
     * @return $this
     */
    public function setRentalCarBooking($rentalCarBooking)
    {
        $this->container['rentalCarBooking'] = $rentalCarBooking;

        return $this;
    }

    /**
     * Gets partnerId
     * @return string
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     * @param string $partnerId Identifies partner.
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        if ((strlen($partnerId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $partnerId when calling PricingRequestCarRental., must be smaller than or equal to 64.');
        }
        if ((strlen($partnerId) < 2)) {
            throw new \InvalidArgumentException('invalid length for $partnerId when calling PricingRequestCarRental., must be bigger than or equal to 2.');
        }

        $this->container['partnerId'] = $partnerId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BrightWrite\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BrightWrite\ObjectSerializer::sanitizeForSerialization($this));
    }
}