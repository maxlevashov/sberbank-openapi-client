<?php
/**
 * RegisterResponse
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
 * RegisterResponse Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RegisterResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'registerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_code' => 'string',
        'error_message' => 'string',
        'order_id' => 'string',
        'form_url' => 'string',
        'external_params' => '\Sberbank\Model\ExternalParams'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_code' => null,
        'error_message' => null,
        'order_id' => null,
        'form_url' => null,
        'external_params' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_code' => false,
        'error_message' => false,
        'order_id' => false,
        'form_url' => false,
        'external_params' => false
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
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage',
        'order_id' => 'orderId',
        'form_url' => 'formUrl',
        'external_params' => 'externalParams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'order_id' => 'setOrderId',
        'form_url' => 'setFormUrl',
        'external_params' => 'setExternalParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'order_id' => 'getOrderId',
        'form_url' => 'getFormUrl',
        'external_params' => 'getExternalParams'
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
        $this->setIfExists('error_code', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('form_url', $data ?? [], null);
        $this->setIfExists('external_params', $data ?? [], null);
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

        if ($this->container['error_code'] === null) {
            $invalidProperties[] = "'error_code' can't be null";
        }
        if ((mb_strlen($this->container['error_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'error_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['error_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'error_code', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^\\d{1,3}$/", $this->container['error_code'])) {
            $invalidProperties[] = "invalid value for 'error_code', must be conform to the pattern /^\\d{1,3}$/.";
        }

        if (!is_null($this->container['error_message']) && (mb_strlen($this->container['error_message']) > 512)) {
            $invalidProperties[] = "invalid value for 'error_message', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['error_message']) && (mb_strlen($this->container['error_message']) < 0)) {
            $invalidProperties[] = "invalid value for 'error_message', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['error_message']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['error_message'])) {
            $invalidProperties[] = "invalid value for 'error_message', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['order_id']) && !preg_match("/^[a-f0-9\\-]+$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[a-f0-9\\-]+$/.";
        }

        if (!is_null($this->container['form_url']) && (mb_strlen($this->container['form_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'form_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['form_url']) && (mb_strlen($this->container['form_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'form_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['form_url']) && !preg_match("/^[ -~]*$/", $this->container['form_url'])) {
            $invalidProperties[] = "invalid value for 'form_url', must be conform to the pattern /^[ -~]*$/.";
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
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code Код ошибки
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            throw new \InvalidArgumentException('non-nullable error_code cannot be null');
        }
        if ((mb_strlen($error_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $error_code when calling RegisterResponse., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($error_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $error_code when calling RegisterResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\\d{1,3}$/", ObjectSerializer::toString($error_code)))) {
            throw new \InvalidArgumentException("invalid value for \$error_code when calling RegisterResponse., must conform to the pattern /^\\d{1,3}$/.");
        }

        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Описание ошибки на языке, переданном в параметре language в запросе
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            throw new \InvalidArgumentException('non-nullable error_message cannot be null');
        }
        if ((mb_strlen($error_message) > 512)) {
            throw new \InvalidArgumentException('invalid length for $error_message when calling RegisterResponse., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($error_message) < 0)) {
            throw new \InvalidArgumentException('invalid length for $error_message when calling RegisterResponse., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($error_message)))) {
            throw new \InvalidArgumentException("invalid value for \$error_message when calling RegisterResponse., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Уникальный номер заказа в Платёжном шлюзе.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        if ((mb_strlen($order_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling RegisterResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($order_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling RegisterResponse., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/^[a-f0-9\\-]+$/", ObjectSerializer::toString($order_id)))) {
            throw new \InvalidArgumentException("invalid value for \$order_id when calling RegisterResponse., must conform to the pattern /^[a-f0-9\\-]+$/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets form_url
     *
     * @return string|null
     */
    public function getFormUrl()
    {
        return $this->container['form_url'];
    }

    /**
     * Sets form_url
     *
     * @param string|null $form_url URL-адрес страницы, на который должен быть перенаправлен браузер Плательщика для дальнейшего проведения операции
     *
     * @return self
     */
    public function setFormUrl($form_url)
    {
        if (is_null($form_url)) {
            throw new \InvalidArgumentException('non-nullable form_url cannot be null');
        }
        if ((mb_strlen($form_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $form_url when calling RegisterResponse., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($form_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $form_url when calling RegisterResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($form_url)))) {
            throw new \InvalidArgumentException("invalid value for \$form_url when calling RegisterResponse., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['form_url'] = $form_url;

        return $this;
    }

    /**
     * Gets external_params
     *
     * @return \Sberbank\Model\ExternalParams|null
     */
    public function getExternalParams()
    {
        return $this->container['external_params'];
    }

    /**
     * Sets external_params
     *
     * @param \Sberbank\Model\ExternalParams|null $external_params external_params
     *
     * @return self
     */
    public function setExternalParams($external_params)
    {
        if (is_null($external_params)) {
            throw new \InvalidArgumentException('non-nullable external_params cannot be null');
        }
        $this->container['external_params'] = $external_params;

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

