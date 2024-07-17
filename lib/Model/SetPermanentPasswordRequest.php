<?php
/**
 * SetPermanentPasswordRequest
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
 * SetPermanentPasswordRequest Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetPermanentPasswordRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'setPermanentPasswordRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'login' => 'string',
        'tmp_password' => 'string',
        'password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'login' => null,
        'tmp_password' => null,
        'password' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'login' => false,
        'tmp_password' => false,
        'password' => false
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
        'login' => 'login',
        'tmp_password' => 'tmpPassword',
        'password' => 'password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login' => 'setLogin',
        'tmp_password' => 'setTmpPassword',
        'password' => 'setPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login' => 'getLogin',
        'tmp_password' => 'getTmpPassword',
        'password' => 'getPassword'
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
        $this->setIfExists('login', $data ?? [], null);
        $this->setIfExists('tmp_password', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
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

        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
        }
        if ((mb_strlen($this->container['login']) > 30)) {
            $invalidProperties[] = "invalid value for 'login', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['login']) < 1)) {
            $invalidProperties[] = "invalid value for 'login', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[A-Za-z0-9-_ ]+$/", $this->container['login'])) {
            $invalidProperties[] = "invalid value for 'login', must be conform to the pattern /^[A-Za-z0-9-_ ]+$/.";
        }

        if ($this->container['tmp_password'] === null) {
            $invalidProperties[] = "'tmp_password' can't be null";
        }
        if ((mb_strlen($this->container['tmp_password']) > 30)) {
            $invalidProperties[] = "invalid value for 'tmp_password', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['tmp_password']) < 1)) {
            $invalidProperties[] = "invalid value for 'tmp_password', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[ -~]+$/", $this->container['tmp_password'])) {
            $invalidProperties[] = "invalid value for 'tmp_password', must be conform to the pattern /^[ -~]+$/.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 30)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 18)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['password']) && !preg_match("/^[ -~]+$/", $this->container['password'])) {
            $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^[ -~]+$/.";
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
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login Логин Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setLogin($login)
    {
        if (is_null($login)) {
            throw new \InvalidArgumentException('non-nullable login cannot be null');
        }
        if ((mb_strlen($login) > 30)) {
            throw new \InvalidArgumentException('invalid length for $login when calling SetPermanentPasswordRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($login) < 1)) {
            throw new \InvalidArgumentException('invalid length for $login when calling SetPermanentPasswordRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-_ ]+$/", ObjectSerializer::toString($login)))) {
            throw new \InvalidArgumentException("invalid value for \$login when calling SetPermanentPasswordRequest., must conform to the pattern /^[A-Za-z0-9-_ ]+$/.");
        }

        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets tmp_password
     *
     * @return string
     */
    public function getTmpPassword()
    {
        return $this->container['tmp_password'];
    }

    /**
     * Sets tmp_password
     *
     * @param string $tmp_password Пароль Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setTmpPassword($tmp_password)
    {
        if (is_null($tmp_password)) {
            throw new \InvalidArgumentException('non-nullable tmp_password cannot be null');
        }
        if ((mb_strlen($tmp_password) > 30)) {
            throw new \InvalidArgumentException('invalid length for $tmp_password when calling SetPermanentPasswordRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($tmp_password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tmp_password when calling SetPermanentPasswordRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]+$/", ObjectSerializer::toString($tmp_password)))) {
            throw new \InvalidArgumentException("invalid value for \$tmp_password when calling SetPermanentPasswordRequest., must conform to the pattern /^[ -~]+$/.");
        }

        $this->container['tmp_password'] = $tmp_password;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Постоянный пароль для Клиента. Если не передавать, то пароль будет сгенерирован автоматически. Требования к паролю: 1 цифра, 1 заглавная латинская буква, минимальная длина 18 символов
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        if ((mb_strlen($password) > 30)) {
            throw new \InvalidArgumentException('invalid length for $password when calling SetPermanentPasswordRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($password) < 18)) {
            throw new \InvalidArgumentException('invalid length for $password when calling SetPermanentPasswordRequest., must be bigger than or equal to 18.');
        }
        if ((!preg_match("/^[ -~]+$/", ObjectSerializer::toString($password)))) {
            throw new \InvalidArgumentException("invalid value for \$password when calling SetPermanentPasswordRequest., must conform to the pattern /^[ -~]+$/.");
        }

        $this->container['password'] = $password;

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


