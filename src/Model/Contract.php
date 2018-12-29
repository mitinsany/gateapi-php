<?php
/**
 * Contract
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 futures provides all sorts of futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * Contract Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Contract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => 'string',
        'quanto_multiplier' => 'string',
        'leverage_min' => 'string',
        'leverage_max' => 'string',
        'mark_type' => 'string',
        'mark_price' => 'string',
        'index_price' => 'string',
        'maintenance_rate' => 'string',
        'funding_rate' => 'string',
        'funding_interval' => 'int',
        'funding_next_apply' => 'float',
        'risk_limit_base' => 'string',
        'risk_limit_step' => 'string',
        'risk_limit_max' => 'string',
        'order_size_min' => 'int',
        'order_size_max' => 'int',
        'order_price_deviate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'quanto_multiplier' => null,
        'leverage_min' => null,
        'leverage_max' => null,
        'mark_type' => null,
        'mark_price' => null,
        'index_price' => null,
        'maintenance_rate' => null,
        'funding_rate' => null,
        'funding_interval' => null,
        'funding_next_apply' => null,
        'risk_limit_base' => null,
        'risk_limit_step' => null,
        'risk_limit_max' => null,
        'order_size_min' => 'int64',
        'order_size_max' => 'int64',
        'order_price_deviate' => null
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
        'name' => 'name',
        'type' => 'type',
        'quanto_multiplier' => 'quanto_multiplier',
        'leverage_min' => 'leverage_min',
        'leverage_max' => 'leverage_max',
        'mark_type' => 'mark_type',
        'mark_price' => 'mark_price',
        'index_price' => 'index_price',
        'maintenance_rate' => 'maintenance_rate',
        'funding_rate' => 'funding_rate',
        'funding_interval' => 'funding_interval',
        'funding_next_apply' => 'funding_next_apply',
        'risk_limit_base' => 'risk_limit_base',
        'risk_limit_step' => 'risk_limit_step',
        'risk_limit_max' => 'risk_limit_max',
        'order_size_min' => 'order_size_min',
        'order_size_max' => 'order_size_max',
        'order_price_deviate' => 'order_price_deviate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'quanto_multiplier' => 'setQuantoMultiplier',
        'leverage_min' => 'setLeverageMin',
        'leverage_max' => 'setLeverageMax',
        'mark_type' => 'setMarkType',
        'mark_price' => 'setMarkPrice',
        'index_price' => 'setIndexPrice',
        'maintenance_rate' => 'setMaintenanceRate',
        'funding_rate' => 'setFundingRate',
        'funding_interval' => 'setFundingInterval',
        'funding_next_apply' => 'setFundingNextApply',
        'risk_limit_base' => 'setRiskLimitBase',
        'risk_limit_step' => 'setRiskLimitStep',
        'risk_limit_max' => 'setRiskLimitMax',
        'order_size_min' => 'setOrderSizeMin',
        'order_size_max' => 'setOrderSizeMax',
        'order_price_deviate' => 'setOrderPriceDeviate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'quanto_multiplier' => 'getQuantoMultiplier',
        'leverage_min' => 'getLeverageMin',
        'leverage_max' => 'getLeverageMax',
        'mark_type' => 'getMarkType',
        'mark_price' => 'getMarkPrice',
        'index_price' => 'getIndexPrice',
        'maintenance_rate' => 'getMaintenanceRate',
        'funding_rate' => 'getFundingRate',
        'funding_interval' => 'getFundingInterval',
        'funding_next_apply' => 'getFundingNextApply',
        'risk_limit_base' => 'getRiskLimitBase',
        'risk_limit_step' => 'getRiskLimitStep',
        'risk_limit_max' => 'getRiskLimitMax',
        'order_size_min' => 'getOrderSizeMin',
        'order_size_max' => 'getOrderSizeMax',
        'order_price_deviate' => 'getOrderPriceDeviate'
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

    const TYPE_INVERSE = 'inverse';
    const TYPE_QUANTO = 'quanto';
    const TYPE_DIRECT = 'direct';
    const MARK_TYPE_INTERNAL = 'internal';
    const MARK_TYPE_INDEX = 'index';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INVERSE,
            self::TYPE_QUANTO,
            self::TYPE_DIRECT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarkTypeAllowableValues()
    {
        return [
            self::MARK_TYPE_INTERNAL,
            self::MARK_TYPE_INDEX,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['quanto_multiplier'] = isset($data['quanto_multiplier']) ? $data['quanto_multiplier'] : null;
        $this->container['leverage_min'] = isset($data['leverage_min']) ? $data['leverage_min'] : null;
        $this->container['leverage_max'] = isset($data['leverage_max']) ? $data['leverage_max'] : null;
        $this->container['mark_type'] = isset($data['mark_type']) ? $data['mark_type'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['index_price'] = isset($data['index_price']) ? $data['index_price'] : null;
        $this->container['maintenance_rate'] = isset($data['maintenance_rate']) ? $data['maintenance_rate'] : null;
        $this->container['funding_rate'] = isset($data['funding_rate']) ? $data['funding_rate'] : null;
        $this->container['funding_interval'] = isset($data['funding_interval']) ? $data['funding_interval'] : null;
        $this->container['funding_next_apply'] = isset($data['funding_next_apply']) ? $data['funding_next_apply'] : null;
        $this->container['risk_limit_base'] = isset($data['risk_limit_base']) ? $data['risk_limit_base'] : null;
        $this->container['risk_limit_step'] = isset($data['risk_limit_step']) ? $data['risk_limit_step'] : null;
        $this->container['risk_limit_max'] = isset($data['risk_limit_max']) ? $data['risk_limit_max'] : null;
        $this->container['order_size_min'] = isset($data['order_size_min']) ? $data['order_size_min'] : null;
        $this->container['order_size_max'] = isset($data['order_size_max']) ? $data['order_size_max'] : null;
        $this->container['order_price_deviate'] = isset($data['order_price_deviate']) ? $data['order_price_deviate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMarkTypeAllowableValues();
        if (!is_null($this->container['mark_type']) && !in_array($this->container['mark_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mark_type', must be one of '%s'",
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Futures name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Futures type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets quanto_multiplier
     *
     * @return string|null
     */
    public function getQuantoMultiplier()
    {
        return $this->container['quanto_multiplier'];
    }

    /**
     * Sets quanto_multiplier
     *
     * @param string|null $quanto_multiplier Multiplier used in converting from invoicing to settlement currency in quanto futures
     *
     * @return $this
     */
    public function setQuantoMultiplier($quanto_multiplier)
    {
        $this->container['quanto_multiplier'] = $quanto_multiplier;

        return $this;
    }

    /**
     * Gets leverage_min
     *
     * @return string|null
     */
    public function getLeverageMin()
    {
        return $this->container['leverage_min'];
    }

    /**
     * Sets leverage_min
     *
     * @param string|null $leverage_min minimum leverage
     *
     * @return $this
     */
    public function setLeverageMin($leverage_min)
    {
        $this->container['leverage_min'] = $leverage_min;

        return $this;
    }

    /**
     * Gets leverage_max
     *
     * @return string|null
     */
    public function getLeverageMax()
    {
        return $this->container['leverage_max'];
    }

    /**
     * Sets leverage_max
     *
     * @param string|null $leverage_max maximum leverage
     *
     * @return $this
     */
    public function setLeverageMax($leverage_max)
    {
        $this->container['leverage_max'] = $leverage_max;

        return $this;
    }

    /**
     * Gets mark_type
     *
     * @return string|null
     */
    public function getMarkType()
    {
        return $this->container['mark_type'];
    }

    /**
     * Sets mark_type
     *
     * @param string|null $mark_type mark price type, internal - based on internal trading, index - based on external index price
     *
     * @return $this
     */
    public function setMarkType($mark_type)
    {
        $allowedValues = $this->getMarkTypeAllowableValues();
        if (!is_null($mark_type) && !in_array($mark_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mark_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mark_type'] = $mark_type;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price latest mark price
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets index_price
     *
     * @return string|null
     */
    public function getIndexPrice()
    {
        return $this->container['index_price'];
    }

    /**
     * Sets index_price
     *
     * @param string|null $index_price latest index price
     *
     * @return $this
     */
    public function setIndexPrice($index_price)
    {
        $this->container['index_price'] = $index_price;

        return $this;
    }

    /**
     * Gets maintenance_rate
     *
     * @return string|null
     */
    public function getMaintenanceRate()
    {
        return $this->container['maintenance_rate'];
    }

    /**
     * Sets maintenance_rate
     *
     * @param string|null $maintenance_rate maintenance rate of margin
     *
     * @return $this
     */
    public function setMaintenanceRate($maintenance_rate)
    {
        $this->container['maintenance_rate'] = $maintenance_rate;

        return $this;
    }

    /**
     * Gets funding_rate
     *
     * @return string|null
     */
    public function getFundingRate()
    {
        return $this->container['funding_rate'];
    }

    /**
     * Sets funding_rate
     *
     * @param string|null $funding_rate funding rate
     *
     * @return $this
     */
    public function setFundingRate($funding_rate)
    {
        $this->container['funding_rate'] = $funding_rate;

        return $this;
    }

    /**
     * Gets funding_interval
     *
     * @return int|null
     */
    public function getFundingInterval()
    {
        return $this->container['funding_interval'];
    }

    /**
     * Sets funding_interval
     *
     * @param int|null $funding_interval funding application interval, unit in seconds
     *
     * @return $this
     */
    public function setFundingInterval($funding_interval)
    {
        $this->container['funding_interval'] = $funding_interval;

        return $this;
    }

    /**
     * Gets funding_next_apply
     *
     * @return float|null
     */
    public function getFundingNextApply()
    {
        return $this->container['funding_next_apply'];
    }

    /**
     * Sets funding_next_apply
     *
     * @param float|null $funding_next_apply next funding time
     *
     * @return $this
     */
    public function setFundingNextApply($funding_next_apply)
    {
        $this->container['funding_next_apply'] = $funding_next_apply;

        return $this;
    }

    /**
     * Gets risk_limit_base
     *
     * @return string|null
     */
    public function getRiskLimitBase()
    {
        return $this->container['risk_limit_base'];
    }

    /**
     * Sets risk_limit_base
     *
     * @param string|null $risk_limit_base risk limit base
     *
     * @return $this
     */
    public function setRiskLimitBase($risk_limit_base)
    {
        $this->container['risk_limit_base'] = $risk_limit_base;

        return $this;
    }

    /**
     * Gets risk_limit_step
     *
     * @return string|null
     */
    public function getRiskLimitStep()
    {
        return $this->container['risk_limit_step'];
    }

    /**
     * Sets risk_limit_step
     *
     * @param string|null $risk_limit_step step of adjusting risk limit
     *
     * @return $this
     */
    public function setRiskLimitStep($risk_limit_step)
    {
        $this->container['risk_limit_step'] = $risk_limit_step;

        return $this;
    }

    /**
     * Gets risk_limit_max
     *
     * @return string|null
     */
    public function getRiskLimitMax()
    {
        return $this->container['risk_limit_max'];
    }

    /**
     * Sets risk_limit_max
     *
     * @param string|null $risk_limit_max maximum risk limit the contract allowed
     *
     * @return $this
     */
    public function setRiskLimitMax($risk_limit_max)
    {
        $this->container['risk_limit_max'] = $risk_limit_max;

        return $this;
    }

    /**
     * Gets order_size_min
     *
     * @return int|null
     */
    public function getOrderSizeMin()
    {
        return $this->container['order_size_min'];
    }

    /**
     * Sets order_size_min
     *
     * @param int|null $order_size_min minimum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMin($order_size_min)
    {
        $this->container['order_size_min'] = $order_size_min;

        return $this;
    }

    /**
     * Gets order_size_max
     *
     * @return int|null
     */
    public function getOrderSizeMax()
    {
        return $this->container['order_size_max'];
    }

    /**
     * Sets order_size_max
     *
     * @param int|null $order_size_max maximum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMax($order_size_max)
    {
        $this->container['order_size_max'] = $order_size_max;

        return $this;
    }

    /**
     * Gets order_price_deviate
     *
     * @return string|null
     */
    public function getOrderPriceDeviate()
    {
        return $this->container['order_price_deviate'];
    }

    /**
     * Sets order_price_deviate
     *
     * @param string|null $order_price_deviate deviation between order price and current index price. If price of an order is denoted as `order_price`, it must meet the following condition:      abs(order_price - mark_price) <= mark_price * order_price_deviate
     *
     * @return $this
     */
    public function setOrderPriceDeviate($order_price_deviate)
    {
        $this->container['order_price_deviate'] = $order_price_deviate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
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
}


