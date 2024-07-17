<?php
/**
 * CartItemsItemsInnerSectoralItemPropsInner
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
 * CartItemsItemsInnerSectoralItemPropsInner Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartItemsItemsInnerSectoralItemPropsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartItems_items_inner_sectoralItemProps_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'federal_id' => 'string',
        'date' => 'float',
        'number' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'federal_id' => null,
        'date' => 'date',
        'number' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'federal_id' => false,
        'date' => false,
        'number' => false,
        'value' => false
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
        'federal_id' => 'federalId',
        'date' => 'date',
        'number' => 'number',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'federal_id' => 'setFederalId',
        'date' => 'setDate',
        'number' => 'setNumber',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'federal_id' => 'getFederalId',
        'date' => 'getDate',
        'number' => 'getNumber',
        'value' => 'getValue'
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
        $this->setIfExists('federal_id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if (!is_null($this->container['federal_id']) && (mb_strlen($this->container['federal_id']) > 3)) {
            $invalidProperties[] = "invalid value for 'federal_id', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['federal_id']) && (mb_strlen($this->container['federal_id']) < 3)) {
            $invalidProperties[] = "invalid value for 'federal_id', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['federal_id']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['federal_id'])) {
            $invalidProperties[] = "invalid value for 'federal_id', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 10)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 10)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 32)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['number']) && !preg_match("/^[A-Za-z0-9]*$/", $this->container['number'])) {
            $invalidProperties[] = "invalid value for 'number', must be conform to the pattern /^[A-Za-z0-9]*$/.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 256)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['value']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['value'])) {
            $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
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
     * Gets federal_id
     *
     * @return string|null
     */
    public function getFederalId()
    {
        return $this->container['federal_id'];
    }

    /**
     * Sets federal_id
     *
     * @param string|null $federal_id __Тег ФФД 1262.__ Идентификатор ФОИВ. __Правила формирования реквизита указаны в Приложении №2 к приказу ФНС России от 14.09.2020 № ЕД-7-20/662 (Таблица 149)__
     *
     * @return self
     */
    public function setFederalId($federal_id)
    {
        if (is_null($federal_id)) {
            throw new \InvalidArgumentException('non-nullable federal_id cannot be null');
        }
        if ((mb_strlen($federal_id) > 3)) {
            throw new \InvalidArgumentException('invalid length for $federal_id when calling CartItemsItemsInnerSectoralItemPropsInner., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($federal_id) < 3)) {
            throw new \InvalidArgumentException('invalid length for $federal_id when calling CartItemsItemsInnerSectoralItemPropsInner., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($federal_id)))) {
            throw new \InvalidArgumentException("invalid value for \$federal_id when calling CartItemsItemsInnerSectoralItemPropsInner., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['federal_id'] = $federal_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return float|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param float|null $date __Тег ФФД 1263.__ Дата нормативного акта, регламентирующего заполнение реквизита. Заполняется в формате ДД.ММ.ГГГГ
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        if ((mb_strlen($date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date when calling CartItemsItemsInnerSectoralItemPropsInner., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $date when calling CartItemsItemsInnerSectoralItemPropsInner., must be bigger than or equal to 10.');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number __Тег ФФД 1264.__ Номер нормативного акта, регламентирующего заполнение реквизита.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        if ((mb_strlen($number) > 32)) {
            throw new \InvalidArgumentException('invalid length for $number when calling CartItemsItemsInnerSectoralItemPropsInner., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $number when calling CartItemsItemsInnerSectoralItemPropsInner., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9]*$/", ObjectSerializer::toString($number)))) {
            throw new \InvalidArgumentException("invalid value for \$number when calling CartItemsItemsInnerSectoralItemPropsInner., must conform to the pattern /^[A-Za-z0-9]*$/.");
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value __Тег ФФД 1265.__ Значение отраслевого реквизита.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        if ((mb_strlen($value) > 256)) {
            throw new \InvalidArgumentException('invalid length for $value when calling CartItemsItemsInnerSectoralItemPropsInner., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling CartItemsItemsInnerSectoralItemPropsInner., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($value)))) {
            throw new \InvalidArgumentException("invalid value for \$value when calling CartItemsItemsInnerSectoralItemPropsInner., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['value'] = $value;

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


