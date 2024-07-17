<?php
/**
 * RefundRequest
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
 * RefundRequest Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RefundRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'refundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_name' => 'string',
        'password' => 'string',
        'order_id' => 'string',
        'amount' => 'int',
        'language' => 'string',
        'json_params' => '\Sberbank\Model\RefundRequestJsonParams',
        'order_bundle' => '\Sberbank\Model\OrderBundle'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_name' => null,
        'password' => null,
        'order_id' => null,
        'amount' => null,
        'language' => null,
        'json_params' => null,
        'order_bundle' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_name' => false,
        'password' => false,
        'order_id' => false,
        'amount' => false,
        'language' => false,
        'json_params' => false,
        'order_bundle' => false
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
        'user_name' => 'userName',
        'password' => 'password',
        'order_id' => 'orderId',
        'amount' => 'amount',
        'language' => 'language',
        'json_params' => 'jsonParams',
        'order_bundle' => 'orderBundle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'order_id' => 'setOrderId',
        'amount' => 'setAmount',
        'language' => 'setLanguage',
        'json_params' => 'setJsonParams',
        'order_bundle' => 'setOrderBundle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'order_id' => 'getOrderId',
        'amount' => 'getAmount',
        'language' => 'getLanguage',
        'json_params' => 'getJsonParams',
        'order_bundle' => 'getOrderBundle'
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
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('json_params', $data ?? [], null);
        $this->setIfExists('order_bundle', $data ?? [], null);
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

        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ((mb_strlen($this->container['user_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['user_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[A-Za-z0-9-_ ]+$/", $this->container['user_name'])) {
            $invalidProperties[] = "invalid value for 'user_name', must be conform to the pattern /^[A-Za-z0-9-_ ]+$/.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) > 30)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['password']) < 1)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[ -~]+$/", $this->container['password'])) {
            $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^[ -~]+$/.";
        }

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ((mb_strlen($this->container['order_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['order_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match("/^[a-f0-9\\-]+$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[a-f0-9\\-]+$/.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 999999999999.";
        }

        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['language']) && !preg_match("/^[a-z]+$/", $this->container['language'])) {
            $invalidProperties[] = "invalid value for 'language', must be conform to the pattern /^[a-z]+$/.";
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
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name Логин Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        if ((mb_strlen($user_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling RefundRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($user_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling RefundRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-_ ]+$/", ObjectSerializer::toString($user_name)))) {
            throw new \InvalidArgumentException("invalid value for \$user_name when calling RefundRequest., must conform to the pattern /^[A-Za-z0-9-_ ]+$/.");
        }

        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Пароль Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        if ((mb_strlen($password) > 30)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RefundRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RefundRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]+$/", ObjectSerializer::toString($password)))) {
            throw new \InvalidArgumentException("invalid value for \$password when calling RefundRequest., must conform to the pattern /^[ -~]+$/.");
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Уникальный номер заказа в Платёжном шлюзе.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        if ((mb_strlen($order_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling RefundRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($order_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling RefundRequest., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/^[a-f0-9\\-]+$/", ObjectSerializer::toString($order_id)))) {
            throw new \InvalidArgumentException("invalid value for \$order_id when calling RefundRequest., must conform to the pattern /^[a-f0-9\\-]+$/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Сумма операции в минимальных единицах валюты
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling RefundRequest., must be smaller than or equal to 999999999999.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling RefundRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        if ((mb_strlen($language) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling RefundRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($language) < 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling RefundRequest., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[a-z]+$/", ObjectSerializer::toString($language)))) {
            throw new \InvalidArgumentException("invalid value for \$language when calling RefundRequest., must conform to the pattern /^[a-z]+$/.");
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets json_params
     *
     * @return \Sberbank\Model\RefundRequestJsonParams|null
     */
    public function getJsonParams()
    {
        return $this->container['json_params'];
    }

    /**
     * Sets json_params
     *
     * @param \Sberbank\Model\RefundRequestJsonParams|null $json_params json_params
     *
     * @return self
     */
    public function setJsonParams($json_params)
    {
        if (is_null($json_params)) {
            throw new \InvalidArgumentException('non-nullable json_params cannot be null');
        }
        $this->container['json_params'] = $json_params;

        return $this;
    }

    /**
     * Gets order_bundle
     *
     * @return \Sberbank\Model\OrderBundle|null
     */
    public function getOrderBundle()
    {
        return $this->container['order_bundle'];
    }

    /**
     * Sets order_bundle
     *
     * @param \Sberbank\Model\OrderBundle|null $order_bundle order_bundle
     *
     * @return self
     */
    public function setOrderBundle($order_bundle)
    {
        if (is_null($order_bundle)) {
            throw new \InvalidArgumentException('non-nullable order_bundle cannot be null');
        }
        $this->container['order_bundle'] = $order_bundle;

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


