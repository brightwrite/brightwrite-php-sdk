<?php
/**
 * Purchaser
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
 * OpenAPI spec version: 0.1.6
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
 * Purchaser Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BrightWrite
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Purchaser implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Purchaser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customerId' => 'string',
        'partnerInsuredPersonId' => 'string',
        'countryOfResidence' => 'string',
        'billingPostalCode' => 'string',
        'firstName' => 'string',
        'primaryLastName' => 'string',
        'secondaryLastName' => 'string',
        'name' => 'string'
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
        'customerId' => 'customerId',
        'partnerInsuredPersonId' => 'partnerInsuredPersonId',
        'countryOfResidence' => 'countryOfResidence',
        'billingPostalCode' => 'billingPostalCode',
        'firstName' => 'firstName',
        'primaryLastName' => 'primaryLastName',
        'secondaryLastName' => 'secondaryLastName',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customerId' => 'setCustomerId',
        'partnerInsuredPersonId' => 'setPartnerInsuredPersonId',
        'countryOfResidence' => 'setCountryOfResidence',
        'billingPostalCode' => 'setBillingPostalCode',
        'firstName' => 'setFirstName',
        'primaryLastName' => 'setPrimaryLastName',
        'secondaryLastName' => 'setSecondaryLastName',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customerId' => 'getCustomerId',
        'partnerInsuredPersonId' => 'getPartnerInsuredPersonId',
        'countryOfResidence' => 'getCountryOfResidence',
        'billingPostalCode' => 'getBillingPostalCode',
        'firstName' => 'getFirstName',
        'primaryLastName' => 'getPrimaryLastName',
        'secondaryLastName' => 'getSecondaryLastName',
        'name' => 'getName'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['partnerInsuredPersonId'] = isset($data['partnerInsuredPersonId']) ? $data['partnerInsuredPersonId'] : null;
        $this->container['countryOfResidence'] = isset($data['countryOfResidence']) ? $data['countryOfResidence'] : null;
        $this->container['billingPostalCode'] = isset($data['billingPostalCode']) ? $data['billingPostalCode'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['primaryLastName'] = isset($data['primaryLastName']) ? $data['primaryLastName'] : null;
        $this->container['secondaryLastName'] = isset($data['secondaryLastName']) ? $data['secondaryLastName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['customerId']) && (strlen($this->container['customerId']) > 128)) {
            $invalid_properties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['partnerInsuredPersonId']) && (strlen($this->container['partnerInsuredPersonId']) > 128)) {
            $invalid_properties[] = "invalid value for 'partnerInsuredPersonId', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['countryOfResidence'] === null) {
            $invalid_properties[] = "'countryOfResidence' can't be null";
        }
        if ((strlen($this->container['countryOfResidence']) > 2)) {
            $invalid_properties[] = "invalid value for 'countryOfResidence', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['countryOfResidence']) < 2)) {
            $invalid_properties[] = "invalid value for 'countryOfResidence', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['billingPostalCode']) && (strlen($this->container['billingPostalCode']) > 8)) {
            $invalid_properties[] = "invalid value for 'billingPostalCode', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 128)) {
            $invalid_properties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['primaryLastName']) && (strlen($this->container['primaryLastName']) > 128)) {
            $invalid_properties[] = "invalid value for 'primaryLastName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['secondaryLastName']) && (strlen($this->container['secondaryLastName']) > 128)) {
            $invalid_properties[] = "invalid value for 'secondaryLastName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 512)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
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
        if (strlen($this->container['customerId']) > 128) {
            return false;
        }
        if (strlen($this->container['partnerInsuredPersonId']) > 128) {
            return false;
        }
        if ($this->container['countryOfResidence'] === null) {
            return false;
        }
        if (strlen($this->container['countryOfResidence']) > 2) {
            return false;
        }
        if (strlen($this->container['countryOfResidence']) < 2) {
            return false;
        }
        if (strlen($this->container['billingPostalCode']) > 8) {
            return false;
        }
        if (strlen($this->container['firstName']) > 128) {
            return false;
        }
        if (strlen($this->container['primaryLastName']) > 128) {
            return false;
        }
        if (strlen($this->container['secondaryLastName']) > 128) {
            return false;
        }
        if (strlen($this->container['name']) > 512) {
            return false;
        }
        return true;
    }


    /**
     * Gets customerId
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     * @param string $customerId Customer identifier as it appears in partner platform
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        if (!is_null($customerId) && (strlen($customerId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling Purchaser., must be smaller than or equal to 128.');
        }

        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets partnerInsuredPersonId
     * @return string
     */
    public function getPartnerInsuredPersonId()
    {
        return $this->container['partnerInsuredPersonId'];
    }

    /**
     * Sets partnerInsuredPersonId
     * @param string $partnerInsuredPersonId If the purchaser is also an Insured person, i.e. buying policy for his/herself
     * @return $this
     */
    public function setPartnerInsuredPersonId($partnerInsuredPersonId)
    {
        if (!is_null($partnerInsuredPersonId) && (strlen($partnerInsuredPersonId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $partnerInsuredPersonId when calling Purchaser., must be smaller than or equal to 128.');
        }

        $this->container['partnerInsuredPersonId'] = $partnerInsuredPersonId;

        return $this;
    }

    /**
     * Gets countryOfResidence
     * @return string
     */
    public function getCountryOfResidence()
    {
        return $this->container['countryOfResidence'];
    }

    /**
     * Sets countryOfResidence
     * @param string $countryOfResidence Two character standard (ISO 3166). It's only required if the purchaser is not an Insured Person
     * @return $this
     */
    public function setCountryOfResidence($countryOfResidence)
    {
        if ((strlen($countryOfResidence) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryOfResidence when calling Purchaser., must be smaller than or equal to 2.');
        }
        if ((strlen($countryOfResidence) < 2)) {
            throw new \InvalidArgumentException('invalid length for $countryOfResidence when calling Purchaser., must be bigger than or equal to 2.');
        }

        $this->container['countryOfResidence'] = $countryOfResidence;

        return $this;
    }

    /**
     * Gets billingPostalCode
     * @return string
     */
    public function getBillingPostalCode()
    {
        return $this->container['billingPostalCode'];
    }

    /**
     * Sets billingPostalCode
     * @param string $billingPostalCode Collect this regardless of whether the purchaser is also an insured person
     * @return $this
     */
    public function setBillingPostalCode($billingPostalCode)
    {
        if (!is_null($billingPostalCode) && (strlen($billingPostalCode) > 8)) {
            throw new \InvalidArgumentException('invalid length for $billingPostalCode when calling Purchaser., must be smaller than or equal to 8.');
        }

        $this->container['billingPostalCode'] = $billingPostalCode;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName Given name, e.g. first name of a person in US. This can be used along with familyName instead of the name property. Only required if the purchaser is not an Insured Person
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Purchaser., must be smaller than or equal to 128.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets primaryLastName
     * @return string
     */
    public function getPrimaryLastName()
    {
        return $this->container['primaryLastName'];
    }

    /**
     * Sets primaryLastName
     * @param string $primaryLastName Family name. Only required if the purchaser is not an Insured Person
     * @return $this
     */
    public function setPrimaryLastName($primaryLastName)
    {
        if (!is_null($primaryLastName) && (strlen($primaryLastName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primaryLastName when calling Purchaser., must be smaller than or equal to 128.');
        }

        $this->container['primaryLastName'] = $primaryLastName;

        return $this;
    }

    /**
     * Gets secondaryLastName
     * @return string
     */
    public function getSecondaryLastName()
    {
        return $this->container['secondaryLastName'];
    }

    /**
     * Sets secondaryLastName
     * @param string $secondaryLastName An additional last name for a person e.g. Spanish names have two last names. Only required if the purchaser is not an Insured Person
     * @return $this
     */
    public function setSecondaryLastName($secondaryLastName)
    {
        if (!is_null($secondaryLastName) && (strlen($secondaryLastName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $secondaryLastName when calling Purchaser., must be smaller than or equal to 128.');
        }

        $this->container['secondaryLastName'] = $secondaryLastName;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Full name of a person. Can be send instead of combination of firstName, lastName
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Purchaser., must be smaller than or equal to 512.');
        }

        $this->container['name'] = $name;

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
