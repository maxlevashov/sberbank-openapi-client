<?php
/**
 * TdsDecoupledAttributes
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
 * TdsDecoupledAttributes Class Doc Comment
 *
 * @category Class
 * @description Дополнительные прамтеры для поддержки сценария Decoupled аутентификации в 3-D Secure
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TdsDecoupledAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tdsDecoupledAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'three_ds_requestor_dec_req_ind' => 'string',
        'three_ds_requestor_dec_max_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'three_ds_requestor_dec_req_ind' => null,
        'three_ds_requestor_dec_max_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'three_ds_requestor_dec_req_ind' => false,
        'three_ds_requestor_dec_max_time' => false
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
        'three_ds_requestor_dec_req_ind' => 'threeDSRequestorDecReqInd',
        'three_ds_requestor_dec_max_time' => 'threeDSRequestorDecMaxTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'three_ds_requestor_dec_req_ind' => 'setThreeDsRequestorDecReqInd',
        'three_ds_requestor_dec_max_time' => 'setThreeDsRequestorDecMaxTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'three_ds_requestor_dec_req_ind' => 'getThreeDsRequestorDecReqInd',
        'three_ds_requestor_dec_max_time' => 'getThreeDsRequestorDecMaxTime'
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

    public const THREE_DS_REQUESTOR_DEC_REQ_IND_Y = 'Y';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreeDsRequestorDecReqIndAllowableValues()
    {
        return [
            self::THREE_DS_REQUESTOR_DEC_REQ_IND_Y,
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
        $this->setIfExists('three_ds_requestor_dec_req_ind', $data ?? [], null);
        $this->setIfExists('three_ds_requestor_dec_max_time', $data ?? [], null);
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

        $allowedValues = $this->getThreeDsRequestorDecReqIndAllowableValues();
        if (!is_null($this->container['three_ds_requestor_dec_req_ind']) && !in_array($this->container['three_ds_requestor_dec_req_ind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'three_ds_requestor_dec_req_ind', must be one of '%s'",
                $this->container['three_ds_requestor_dec_req_ind'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['three_ds_requestor_dec_max_time']) && (mb_strlen($this->container['three_ds_requestor_dec_max_time']) > 5)) {
            $invalidProperties[] = "invalid value for 'three_ds_requestor_dec_max_time', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['three_ds_requestor_dec_max_time']) && (mb_strlen($this->container['three_ds_requestor_dec_max_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'three_ds_requestor_dec_max_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['three_ds_requestor_dec_max_time']) && !preg_match("/^\\d+$/", $this->container['three_ds_requestor_dec_max_time'])) {
            $invalidProperties[] = "invalid value for 'three_ds_requestor_dec_max_time', must be conform to the pattern /^\\d+$/.";
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
     * Gets three_ds_requestor_dec_req_ind
     *
     * @return string|null
     */
    public function getThreeDsRequestorDecReqInd()
    {
        return $this->container['three_ds_requestor_dec_req_ind'];
    }

    /**
     * Sets three_ds_requestor_dec_req_ind
     *
     * @param string|null $three_ds_requestor_dec_req_ind Признак поддержки сценария отложенной аутентификации. Допустимые значения: * `Y` = отложенная аутентификация поддерживается и предпочтительна
     *
     * @return self
     */
    public function setThreeDsRequestorDecReqInd($three_ds_requestor_dec_req_ind)
    {
        if (is_null($three_ds_requestor_dec_req_ind)) {
            throw new \InvalidArgumentException('non-nullable three_ds_requestor_dec_req_ind cannot be null');
        }
        $allowedValues = $this->getThreeDsRequestorDecReqIndAllowableValues();
        if (!in_array($three_ds_requestor_dec_req_ind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'three_ds_requestor_dec_req_ind', must be one of '%s'",
                    $three_ds_requestor_dec_req_ind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['three_ds_requestor_dec_req_ind'] = $three_ds_requestor_dec_req_ind;

        return $this;
    }

    /**
     * Gets three_ds_requestor_dec_max_time
     *
     * @return string|null
     */
    public function getThreeDsRequestorDecMaxTime()
    {
        return $this->container['three_ds_requestor_dec_max_time'];
    }

    /**
     * Sets three_ds_requestor_dec_max_time
     *
     * @param string|null $three_ds_requestor_dec_max_time Максимальное время ожидания завершения аутентификации в сценарии decoupled (в минутах). Должно быть в интервале от 1 до 10080.
     *
     * @return self
     */
    public function setThreeDsRequestorDecMaxTime($three_ds_requestor_dec_max_time)
    {
        if (is_null($three_ds_requestor_dec_max_time)) {
            throw new \InvalidArgumentException('non-nullable three_ds_requestor_dec_max_time cannot be null');
        }
        if ((mb_strlen($three_ds_requestor_dec_max_time) > 5)) {
            throw new \InvalidArgumentException('invalid length for $three_ds_requestor_dec_max_time when calling TdsDecoupledAttributes., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($three_ds_requestor_dec_max_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $three_ds_requestor_dec_max_time when calling TdsDecoupledAttributes., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\\d+$/", ObjectSerializer::toString($three_ds_requestor_dec_max_time)))) {
            throw new \InvalidArgumentException("invalid value for \$three_ds_requestor_dec_max_time when calling TdsDecoupledAttributes., must conform to the pattern /^\\d+$/.");
        }

        $this->container['three_ds_requestor_dec_max_time'] = $three_ds_requestor_dec_max_time;

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

