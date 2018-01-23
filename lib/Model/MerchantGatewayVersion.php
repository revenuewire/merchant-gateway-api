<?php
/**
 * MerchantGatewayVersion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant Gateway API
 *
 * Merchant Gateway API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * MerchantGatewayVersion Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantGatewayVersion implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'merchantGatewayVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'clientId' => 'string',
        'gatewayPolicy' => '\Swagger\Client\Model\GatewayPolicy',
        'gateways' => '\Swagger\Client\Model\GatewayConfiguration[]',
        'currencyPolicy' => 'string',
        'currencyOverride' => 'string[]',
        'created' => 'int',
        'modified' => 'int'
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
        'id' => 'id',
        'clientId' => 'clientId',
        'gatewayPolicy' => 'gatewayPolicy',
        'gateways' => 'gateways',
        'currencyPolicy' => 'currencyPolicy',
        'currencyOverride' => 'currencyOverride',
        'created' => 'created',
        'modified' => 'modified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'clientId' => 'setClientId',
        'gatewayPolicy' => 'setGatewayPolicy',
        'gateways' => 'setGateways',
        'currencyPolicy' => 'setCurrencyPolicy',
        'currencyOverride' => 'setCurrencyOverride',
        'created' => 'setCreated',
        'modified' => 'setModified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'clientId' => 'getClientId',
        'gatewayPolicy' => 'getGatewayPolicy',
        'gateways' => 'getGateways',
        'currencyPolicy' => 'getCurrencyPolicy',
        'currencyOverride' => 'getCurrencyOverride',
        'created' => 'getCreated',
        'modified' => 'getModified'
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

    const CURRENCY_POLICY_ALL_CURRENCIES = 'ALL_CURRENCIES';
    const CURRENCY_POLICY_PAYPAL_EXPRESS = 'PAYPAL_EXPRESS';
    const CURRENCY_POLICY_CUSTOM = 'CUSTOM';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCurrencyPolicyAllowableValues()
    {
        return [
            self::CURRENCY_POLICY_ALL_CURRENCIES,
            self::CURRENCY_POLICY_PAYPAL_EXPRESS,
            self::CURRENCY_POLICY_CUSTOM,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['gatewayPolicy'] = isset($data['gatewayPolicy']) ? $data['gatewayPolicy'] : null;
        $this->container['gateways'] = isset($data['gateways']) ? $data['gateways'] : null;
        $this->container['currencyPolicy'] = isset($data['currencyPolicy']) ? $data['currencyPolicy'] : null;
        $this->container['currencyOverride'] = isset($data['currencyOverride']) ? $data['currencyOverride'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["ALL_CURRENCIES", "PAYPAL_EXPRESS", "CUSTOM"];
        if (!in_array($this->container['currencyPolicy'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'currencyPolicy', must be one of 'ALL_CURRENCIES', 'PAYPAL_EXPRESS', 'CUSTOM'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["ALL_CURRENCIES", "PAYPAL_EXPRESS", "CUSTOM"];
        if (!in_array($this->container['currencyPolicy'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets gatewayPolicy
     * @return \Swagger\Client\Model\GatewayPolicy
     */
    public function getGatewayPolicy()
    {
        return $this->container['gatewayPolicy'];
    }

    /**
     * Sets gatewayPolicy
     * @param \Swagger\Client\Model\GatewayPolicy $gatewayPolicy
     * @return $this
     */
    public function setGatewayPolicy($gatewayPolicy)
    {
        $this->container['gatewayPolicy'] = $gatewayPolicy;

        return $this;
    }

    /**
     * Gets gateways
     * @return \Swagger\Client\Model\GatewayConfiguration[]
     */
    public function getGateways()
    {
        return $this->container['gateways'];
    }

    /**
     * Sets gateways
     * @param \Swagger\Client\Model\GatewayConfiguration[] $gateways
     * @return $this
     */
    public function setGateways($gateways)
    {
        $this->container['gateways'] = $gateways;

        return $this;
    }

    /**
     * Gets currencyPolicy
     * @return string
     */
    public function getCurrencyPolicy()
    {
        return $this->container['currencyPolicy'];
    }

    /**
     * Sets currencyPolicy
     * @param string $currencyPolicy
     * @return $this
     */
    public function setCurrencyPolicy($currencyPolicy)
    {
        $allowed_values = array('ALL_CURRENCIES', 'PAYPAL_EXPRESS', 'CUSTOM');
        if (!is_null($currencyPolicy) && (!in_array($currencyPolicy, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'currencyPolicy', must be one of 'ALL_CURRENCIES', 'PAYPAL_EXPRESS', 'CUSTOM'");
        }
        $this->container['currencyPolicy'] = $currencyPolicy;

        return $this;
    }

    /**
     * Gets currencyOverride
     * @return string[]
     */
    public function getCurrencyOverride()
    {
        return $this->container['currencyOverride'];
    }

    /**
     * Sets currencyOverride
     * @param string[] $currencyOverride
     * @return $this
     */
    public function setCurrencyOverride($currencyOverride)
    {
        $this->container['currencyOverride'] = $currencyOverride;

        return $this;
    }

    /**
     * Gets created
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param int $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return int
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param int $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


