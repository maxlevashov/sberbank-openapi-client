<?php
/**
 * CartItemsItemsInnerMarkQuantity
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API платёжного шлюза Сбербанка
 *
 * Настоящий документ описывает программные интерфейсы платёжного шлюза Сбербанка, который позволяет проводить платежи в интернет-эквайринге.
 *
 * The version of the OpenAPI document: 1.0.7
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Sberbank\Model;

use \ArrayAccess;
use \Sberbank\ObjectSerializer;

/**
 * CartItemsItemsInnerMarkQuantity Class Doc Comment
 *
 * @category Class
 * @description __Тег ФФД 1291.__ Используется только при продаже маркированных товаров. Дробное количество маркированного товара. Включается в предмет расчета только при продаже маркированного товара и единицах измерения предмета расчета \&quot;штуки\&quot; (значение \&quot;0\&quot;)
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartItemsItemsInnerMarkQuantity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartItems_items_inner_markQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mark_quantity_numerator' => 'string',
        'mark_quantity_denominator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mark_quantity_numerator' => null,
        'mark_quantity_denominator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mark_quantity_numerator' => false,
        'mark_quantity_denominator' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'mark_quantity_numerator' => 'markQuantityNumerator',
        'mark_quantity_denominator' => 'markQuantityDenominator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mark_quantity_numerator' => 'setMarkQuantityNumerator',
        'mark_quantity_denominator' => 'setMarkQuantityDenominator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mark_quantity_numerator' => 'getMarkQuantityNumerator',
        'mark_quantity_denominator' => 'getMarkQuantityDenominator'
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
        $this->setIfExists('mark_quantity_numerator', $data ?? [], null);
        $this->setIfExists('mark_quantity_denominator', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mark_quantity_numerator'] === null) {
            $invalidProperties[] = "'mark_quantity_numerator' can't be null";
        }
        if (!preg_match("/^\\d+$/", $this->container['mark_quantity_numerator'])) {
            $invalidProperties[] = "invalid value for 'mark_quantity_numerator', must be conform to the pattern /^\\d+$/.";
        }

        if ($this->container['mark_quantity_denominator'] === null) {
            $invalidProperties[] = "'mark_quantity_denominator' can't be null";
        }
        if (!preg_match("/^\\d+$/", $this->container['mark_quantity_denominator'])) {
            $invalidProperties[] = "invalid value for 'mark_quantity_denominator', must be conform to the pattern /^\\d+$/.";
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
     * Gets mark_quantity_numerator
     *
     * @return string
     */
    public function getMarkQuantityNumerator()
    {
        return $this->container['mark_quantity_numerator'];
    }

    /**
     * Sets mark_quantity_numerator
     *
     * @param string $mark_quantity_numerator __Тег ФФД 1293.__ Числитель. Должен быть строго меньше значения \"Знаменатель\".
     *
     * @return self
     */
    public function setMarkQuantityNumerator($mark_quantity_numerator)
    {
        if (is_null($mark_quantity_numerator)) {
            throw new \InvalidArgumentException('non-nullable mark_quantity_numerator cannot be null');
        }

        if ((!preg_match("/^\\d+$/", ObjectSerializer::toString($mark_quantity_numerator)))) {
            throw new \InvalidArgumentException("invalid value for \$mark_quantity_numerator when calling CartItemsItemsInnerMarkQuantity., must conform to the pattern /^\\d+$/.");
        }

        $this->container['mark_quantity_numerator'] = $mark_quantity_numerator;

        return $this;
    }

    /**
     * Gets mark_quantity_denominator
     *
     * @return string
     */
    public function getMarkQuantityDenominator()
    {
        return $this->container['mark_quantity_denominator'];
    }

    /**
     * Sets mark_quantity_denominator
     *
     * @param string $mark_quantity_denominator __Тег ФФД 1294.__ Знаменатель. Равен количеству товара в партии (упаковке), имеющий общий код маркировки товара.
     *
     * @return self
     */
    public function setMarkQuantityDenominator($mark_quantity_denominator)
    {
        if (is_null($mark_quantity_denominator)) {
            throw new \InvalidArgumentException('non-nullable mark_quantity_denominator cannot be null');
        }

        if ((!preg_match("/^\\d+$/", ObjectSerializer::toString($mark_quantity_denominator)))) {
            throw new \InvalidArgumentException("invalid value for \$mark_quantity_denominator when calling CartItemsItemsInnerMarkQuantity., must conform to the pattern /^\\d+$/.");
        }

        $this->container['mark_quantity_denominator'] = $mark_quantity_denominator;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


