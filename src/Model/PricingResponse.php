<?php
/**
 * PricingResponse
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
 * PricingResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     BrightWrite
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PricingResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'partnerId' => 'string',
        'pricingRequestId' => 'string',
        'price' => 'double',
        'currency' => 'string',
        'segment' => 'string',
        'pricingRule' => 'string',
        'group' => 'string',
        'modifier' => 'float'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'partnerId' => 'partnerId',
        'pricingRequestId' => 'pricingRequestId',
        'price' => 'price',
        'currency' => 'currency',
        'segment' => 'segment',
        'pricingRule' => 'pricingRule',
        'group' => 'group',
        'modifier' => 'modifier'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'partnerId' => 'setPartnerId',
        'pricingRequestId' => 'setPricingRequestId',
        'price' => 'setPrice',
        'currency' => 'setCurrency',
        'segment' => 'setSegment',
        'pricingRule' => 'setPricingRule',
        'group' => 'setGroup',
        'modifier' => 'setModifier'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'partnerId' => 'getPartnerId',
        'pricingRequestId' => 'getPricingRequestId',
        'price' => 'getPrice',
        'currency' => 'getCurrency',
        'segment' => 'getSegment',
        'pricingRule' => 'getPricingRule',
        'group' => 'getGroup',
        'modifier' => 'getModifier'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $partnerId 
      * @var string
      */
    protected $partnerId;
    
    /**
      * $pricingRequestId 
      * @var string
      */
    protected $pricingRequestId;
    
    /**
      * $price 
      * @var double
      */
    protected $price;
    
    /**
      * $currency 
      * @var string
      */
    protected $currency;
    
    /**
      * $segment 
      * @var string
      */
    protected $segment;
    
    /**
      * $pricingRule 
      * @var string
      */
    protected $pricingRule;
    
    /**
      * $group 
      * @var string
      */
    protected $group;
    
    /**
      * $modifier 
      * @var float
      */
    protected $modifier;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->partnerId = $data["partnerId"];
            $this->pricingRequestId = $data["pricingRequestId"];
            $this->price = $data["price"];
            $this->currency = $data["currency"];
            $this->segment = $data["segment"];
            $this->pricingRule = $data["pricingRule"];
            $this->group = $data["group"];
            $this->modifier = $data["modifier"];
        }
    }
    
    /**
     * Gets partnerId
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }
  
    /**
     * Sets partnerId
     * @param string $partnerId 
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        
        $this->partnerId = $partnerId;
        return $this;
    }
    
    /**
     * Gets pricingRequestId
     * @return string
     */
    public function getPricingRequestId()
    {
        return $this->pricingRequestId;
    }
  
    /**
     * Sets pricingRequestId
     * @param string $pricingRequestId 
     * @return $this
     */
    public function setPricingRequestId($pricingRequestId)
    {
        
        $this->pricingRequestId = $pricingRequestId;
        return $this;
    }
    
    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }
  
    /**
     * Sets price
     * @param double $price 
     * @return $this
     */
    public function setPrice($price)
    {
        
        $this->price = $price;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency 
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets segment
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }
  
    /**
     * Sets segment
     * @param string $segment 
     * @return $this
     */
    public function setSegment($segment)
    {
        
        $this->segment = $segment;
        return $this;
    }
    
    /**
     * Gets pricingRule
     * @return string
     */
    public function getPricingRule()
    {
        return $this->pricingRule;
    }
  
    /**
     * Sets pricingRule
     * @param string $pricingRule 
     * @return $this
     */
    public function setPricingRule($pricingRule)
    {
        
        $this->pricingRule = $pricingRule;
        return $this;
    }
    
    /**
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }
  
    /**
     * Sets group
     * @param string $group 
     * @return $this
     */
    public function setGroup($group)
    {
        
        $this->group = $group;
        return $this;
    }
    
    /**
     * Gets modifier
     * @return float
     */
    public function getModifier()
    {
        return $this->modifier;
    }
  
    /**
     * Sets modifier
     * @param float $modifier 
     * @return $this
     */
    public function setModifier($modifier)
    {
        
        $this->modifier = $modifier;
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
