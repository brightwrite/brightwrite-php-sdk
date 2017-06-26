<?php
/**
 * PricingResponse
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
 * PricingResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BrightWrite
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PricingResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PricingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partnerId' => 'string',
        'pricingRequestId' => 'string',
        'price' => 'double',
        'currency' => 'string',
        'segment' => 'string',
        'pricingRule' => 'string',
        'group' => 'string',
        'modifier' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'partnerId' => 'partnerId',
        'pricingRequestId' => 'pricingRequestId',
        'price' => 'price',
        'currency' => 'currency',
        'segment' => 'segment',
        'pricingRule' => 'pricingRule',
        'group' => 'group',
        'modifier' => 'modifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'partnerId' => 'setPartnerId',
        'pricingRequestId' => 'setPricingRequestId',
        'price' => 'setPrice',
        'currency' => 'setCurrency',
        'segment' => 'setSegment',
        'pricingRule' => 'setPricingRule',
        'group' => 'setGroup',
        'modifier' => 'setModifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'partnerId' => 'getPartnerId',
        'pricingRequestId' => 'getPricingRequestId',
        'price' => 'getPrice',
        'currency' => 'getCurrency',
        'segment' => 'getSegment',
        'pricingRule' => 'getPricingRule',
        'group' => 'getGroup',
        'modifier' => 'getModifier'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
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
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
        $this->container['pricingRequestId'] = isset($data['pricingRequestId']) ? $data['pricingRequestId'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['segment'] = isset($data['segment']) ? $data['segment'] : null;
        $this->container['pricingRule'] = isset($data['pricingRule']) ? $data['pricingRule'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['partnerId'] === null) {
            $invalid_properties[] = "'partnerId' can't be null";
        }
        if ($this->container['pricingRequestId'] === null) {
            $invalid_properties[] = "'pricingRequestId' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
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
        if ($this->container['partnerId'] === null) {
            return false;
        }
        if ($this->container['pricingRequestId'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        return true;
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
     * @param string $partnerId
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets pricingRequestId
     * @return string
     */
    public function getPricingRequestId()
    {
        return $this->container['pricingRequestId'];
    }

    /**
     * Sets pricingRequestId
     * @param string $pricingRequestId
     * @return $this
     */
    public function setPricingRequestId($pricingRequestId)
    {
        $this->container['pricingRequestId'] = $pricingRequestId;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets segment
     * @return string
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     * @param string $segment
     * @return $this
     */
    public function setSegment($segment)
    {
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets pricingRule
     * @return string
     */
    public function getPricingRule()
    {
        return $this->container['pricingRule'];
    }

    /**
     * Sets pricingRule
     * @param string $pricingRule
     * @return $this
     */
    public function setPricingRule($pricingRule)
    {
        $this->container['pricingRule'] = $pricingRule;

        return $this;
    }

    /**
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param string $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets modifier
     * @return float
     */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
     * Sets modifier
     * @param float $modifier
     * @return $this
     */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;

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
