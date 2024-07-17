<?php
/**
 * CartItemsItemsInnerAgentInfoMoneyTransferOperator
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
 * CartItemsItemsInnerAgentInfoMoneyTransferOperator Class Doc Comment
 *
 * @category Class
 * @description Данные оператора перевода. Обязательно для банковского платежного (суб)агента.
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartItemsItemsInnerAgentInfoMoneyTransferOperator implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cartItems_items_inner_agentInfo_moneyTransferOperator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phones' => 'string[]',
        'name' => 'string',
        'address' => 'string',
        'inn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phones' => null,
        'name' => null,
        'address' => null,
        'inn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phones' => false,
        'name' => false,
        'address' => false,
        'inn' => false
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
        'phones' => 'phones',
        'name' => 'name',
        'address' => 'address',
        'inn' => 'inn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phones' => 'setPhones',
        'name' => 'setName',
        'address' => 'setAddress',
        'inn' => 'setInn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phones' => 'getPhones',
        'name' => 'getName',
        'address' => 'getAddress',
        'inn' => 'getInn'
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
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('inn', $data ?? [], null);
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

        if (!is_null($this->container['phones']) && (count($this->container['phones']) > 5)) {
            $invalidProperties[] = "invalid value for 'phones', number of items must be less than or equal to 5.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['name']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 256)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['address']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['address'])) {
            $invalidProperties[] = "invalid value for 'address', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['inn']) && (mb_strlen($this->container['inn']) > 12)) {
            $invalidProperties[] = "invalid value for 'inn', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['inn']) && (mb_strlen($this->container['inn']) < 12)) {
            $invalidProperties[] = "invalid value for 'inn', the character length must be bigger than or equal to 12.";
        }

        if (!is_null($this->container['inn']) && !preg_match("/^[0-9]/", $this->container['inn'])) {
            $invalidProperties[] = "invalid value for 'inn', must be conform to the pattern /^[0-9]/.";
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
     * Gets phones
     *
     * @return string[]|null
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string[]|null $phones __Тег ФФД 1075.__ Номер телефона оператора по переводу средств. Указывается в формате +{код страны}{номер телефона}. Пример заполнения: \"phones\": [\"+74957444401\",\"+79998887766\"]
     *
     * @return self
     */
    public function setPhones($phones)
    {
        if (is_null($phones)) {
            throw new \InvalidArgumentException('non-nullable phones cannot be null');
        }

        if ((count($phones) > 5)) {
            throw new \InvalidArgumentException('invalid value for $phones when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., number of items must be less than or equal to 5.');
        }
        $this->container['phones'] = $phones;

        return $this;
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
     * @param string|null $name __Тег ФФД 1026.__ Наименование оператора перевода.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must be smaller than or equal to 64.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($name)))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address __Тег ФФД 1005.__ Местонахождение оператора перевода.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        if ((mb_strlen($address) > 256)) {
            throw new \InvalidArgumentException('invalid length for $address when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must be smaller than or equal to 256.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($address)))) {
            throw new \InvalidArgumentException("invalid value for \$address when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets inn
     *
     * @return string|null
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string|null $inn __Тег ФФД 1016.__ ИНН оператора перевода. Если имеет рамер менее 12 цифр - дополняется пробелами справа.
     *
     * @return self
     */
    public function setInn($inn)
    {
        if (is_null($inn)) {
            throw new \InvalidArgumentException('non-nullable inn cannot be null');
        }
        if ((mb_strlen($inn) > 12)) {
            throw new \InvalidArgumentException('invalid length for $inn when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($inn) < 12)) {
            throw new \InvalidArgumentException('invalid length for $inn when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must be bigger than or equal to 12.');
        }
        if ((!preg_match("/^[0-9]/", ObjectSerializer::toString($inn)))) {
            throw new \InvalidArgumentException("invalid value for \$inn when calling CartItemsItemsInnerAgentInfoMoneyTransferOperator., must conform to the pattern /^[0-9]/.");
        }

        $this->container['inn'] = $inn;

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


