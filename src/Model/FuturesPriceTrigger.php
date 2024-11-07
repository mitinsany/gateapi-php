<?php
/**
 * FuturesPriceTrigger
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * FuturesPriceTrigger Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class FuturesPriceTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FuturesPriceTrigger';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'strategy_type' => 'int',
        'price_type' => 'int',
        'price' => 'string',
        'rule' => 'int',
        'expiration' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'strategy_type' => null,
        'price_type' => 'int32',
        'price' => null,
        'rule' => 'int32',
        'expiration' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'strategy_type' => 'strategy_type',
        'price_type' => 'price_type',
        'price' => 'price',
        'rule' => 'rule',
        'expiration' => 'expiration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'strategy_type' => 'setStrategyType',
        'price_type' => 'setPriceType',
        'price' => 'setPrice',
        'rule' => 'setRule',
        'expiration' => 'setExpiration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'strategy_type' => 'getStrategyType',
        'price_type' => 'getPriceType',
        'price' => 'getPrice',
        'rule' => 'getRule',
        'expiration' => 'getExpiration'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const STRATEGY_TYPE_0 = 0;
    const STRATEGY_TYPE_1 = 1;
    const PRICE_TYPE_0 = 0;
    const PRICE_TYPE_1 = 1;
    const PRICE_TYPE_2 = 2;
    const RULE_1 = 1;
    const RULE_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrategyTypeAllowableValues()
    {
        return [
            self::STRATEGY_TYPE_0,
            self::STRATEGY_TYPE_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceTypeAllowableValues()
    {
        return [
            self::PRICE_TYPE_0,
            self::PRICE_TYPE_1,
            self::PRICE_TYPE_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRuleAllowableValues()
    {
        return [
            self::RULE_1,
            self::RULE_2,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['strategy_type'] = isset($data['strategy_type']) ? $data['strategy_type'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStrategyTypeAllowableValues();
        if (!is_null($this->container['strategy_type']) && !in_array($this->container['strategy_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'strategy_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!is_null($this->container['price_type']) && !in_array($this->container['price_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRuleAllowableValues();
        if (!is_null($this->container['rule']) && !in_array($this->container['rule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rule', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets strategy_type
     *
     * @return int|null
     */
    public function getStrategyType()
    {
        return $this->container['strategy_type'];
    }

    /**
     * Sets strategy_type
     *
     * @param int|null $strategy_type How the order will be triggered   - `0`: by price, which means the order will be triggered if price condition is satisfied  - `1`: by price gap, which means the order will be triggered if gap of recent two prices of specified `price_type` are satisfied.  Only `0` is supported currently
     *
     * @return $this
     */
    public function setStrategyType($strategy_type)
    {
        $allowedValues = $this->getStrategyTypeAllowableValues();
        if (!is_null($strategy_type) && !in_array($strategy_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'strategy_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['strategy_type'] = $strategy_type;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return int|null
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param int|null $price_type Price type. 0 - latest deal price, 1 - mark price, 2 - index price
     *
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!is_null($price_type) && !in_array($price_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price Value of price on price triggered, or price gap on price gap triggered
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return int|null
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param int|null $rule Trigger condition type  - `1`: calculated price based on `strategy_type` and `price_type` >= `price` - `2`: calculated price based on `strategy_type` and `price_type` <= `price`
     *
     * @return $this
     */
    public function setRule($rule)
    {
        $allowedValues = $this->getRuleAllowableValues();
        if (!is_null($rule) && !in_array($rule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rule', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rule'] = $rule;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return int|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param int|null $expiration How long (in seconds) to wait for the condition to be triggered before cancelling the order.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


