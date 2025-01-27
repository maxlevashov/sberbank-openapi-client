<?php
/**
 * ReceiptsInnerError
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
 * ReceiptsInnerError Class Doc Comment
 *
 * @category Class
 * @description Блок информации об ошибке (если ошибки нет, то передается NULL)
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceiptsInnerError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'receipts_inner_error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_id' => 'string',
        'code' => 'int',
        'text' => 'string',
        'type' => 'string',
        'recommendation' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_id' => null,
        'code' => null,
        'text' => null,
        'type' => null,
        'recommendation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_id' => false,
        'code' => false,
        'text' => false,
        'type' => false,
        'recommendation' => false
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
        'error_id' => 'errorId',
        'code' => 'code',
        'text' => 'text',
        'type' => 'type',
        'recommendation' => 'recommendation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_id' => 'setErrorId',
        'code' => 'setCode',
        'text' => 'setText',
        'type' => 'setType',
        'recommendation' => 'setRecommendation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_id' => 'getErrorId',
        'code' => 'getCode',
        'text' => 'getText',
        'type' => 'getType',
        'recommendation' => 'getRecommendation'
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
        $this->setIfExists('error_id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('recommendation', $data ?? [], null);
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

        if (!is_null($this->container['error_id']) && (mb_strlen($this->container['error_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'error_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['error_id']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['error_id'])) {
            $invalidProperties[] = "invalid value for 'error_id', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['code']) && ($this->container['code'] > 99999)) {
            $invalidProperties[] = "invalid value for 'code', must be smaller than or equal to 99999.";
        }

        if (!is_null($this->container['code']) && ($this->container['code'] < 0)) {
            $invalidProperties[] = "invalid value for 'code', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['text']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['text'])) {
            $invalidProperties[] = "invalid value for 'text', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 7)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['type']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['recommendation']) && ($this->container['recommendation'] > 3)) {
            $invalidProperties[] = "invalid value for 'recommendation', must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['recommendation']) && ($this->container['recommendation'] < 1)) {
            $invalidProperties[] = "invalid value for 'recommendation', must be bigger than or equal to 1.";
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
     * Gets error_id
     *
     * @return string|null
     */
    public function getErrorId()
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param string|null $error_id Уникальный идентификатор ошибки
     *
     * @return self
     */
    public function setErrorId($error_id)
    {
        if (is_null($error_id)) {
            throw new \InvalidArgumentException('non-nullable error_id cannot be null');
        }
        if ((mb_strlen($error_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $error_id when calling ReceiptsInnerError., must be smaller than or equal to 36.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($error_id)))) {
            throw new \InvalidArgumentException("invalid value for \$error_id when calling ReceiptsInnerError., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return int|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int|null $code Код ошибки. Отображается только при ошибке
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        if (($code > 99999)) {
            throw new \InvalidArgumentException('invalid value for $code when calling ReceiptsInnerError., must be smaller than or equal to 99999.');
        }
        if (($code < 0)) {
            throw new \InvalidArgumentException('invalid value for $code when calling ReceiptsInnerError., must be bigger than or equal to 0.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Текст ошибки (кодировка utf–8)
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        if ((mb_strlen($text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $text when calling ReceiptsInnerError., must be smaller than or equal to 1000.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($text)))) {
            throw new \InvalidArgumentException("invalid value for \$text when calling ReceiptsInnerError., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['text'] = $text;

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
     * @param string|null $type Тип источника ошибки в кассовом сервисе
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        if ((mb_strlen($type) > 7)) {
            throw new \InvalidArgumentException('invalid length for $type when calling ReceiptsInnerError., must be smaller than or equal to 7.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($type)))) {
            throw new \InvalidArgumentException("invalid value for \$type when calling ReceiptsInnerError., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets recommendation
     *
     * @return float|null
     */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
     * Sets recommendation
     *
     * @param float|null $recommendation Рекомендация по исправлению: * `1` - Попытки отправки чека исчерпаны, возможна повторная отправка через сервис retryReceipt. * `2` - Повторная отправка возможна только после корректировки чека. Используйте сервис doReceipt. * `3` - Повторная отправка в существующем формате возможна только после устранения проблемы в работе ККТ. После устранения проблемы используйте сервисы retryReceipt или doReceipt.
     *
     * @return self
     */
    public function setRecommendation($recommendation)
    {
        if (is_null($recommendation)) {
            throw new \InvalidArgumentException('non-nullable recommendation cannot be null');
        }

        if (($recommendation > 3)) {
            throw new \InvalidArgumentException('invalid value for $recommendation when calling ReceiptsInnerError., must be smaller than or equal to 3.');
        }
        if (($recommendation < 1)) {
            throw new \InvalidArgumentException('invalid value for $recommendation when calling ReceiptsInnerError., must be bigger than or equal to 1.');
        }

        $this->container['recommendation'] = $recommendation;

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


