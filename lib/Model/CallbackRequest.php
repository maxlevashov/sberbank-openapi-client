<?php
/**
 * CallbackRequest
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
 * CallbackRequest Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CallbackRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'callbackRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'md_order' => 'string',
        'order_number' => 'string',
        'operation' => 'string',
        'status' => 'int',
        'additional_params' => '\Sberbank\Model\AdditionalParams'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'md_order' => null,
        'order_number' => null,
        'operation' => null,
        'status' => null,
        'additional_params' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'md_order' => false,
        'order_number' => false,
        'operation' => false,
        'status' => false,
        'additional_params' => false
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
        'md_order' => 'mdOrder',
        'order_number' => 'orderNumber',
        'operation' => 'operation',
        'status' => 'status',
        'additional_params' => 'additionalParams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'md_order' => 'setMdOrder',
        'order_number' => 'setOrderNumber',
        'operation' => 'setOperation',
        'status' => 'setStatus',
        'additional_params' => 'setAdditionalParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'md_order' => 'getMdOrder',
        'order_number' => 'getOrderNumber',
        'operation' => 'getOperation',
        'status' => 'getStatus',
        'additional_params' => 'getAdditionalParams'
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
        $this->setIfExists('md_order', $data ?? [], null);
        $this->setIfExists('order_number', $data ?? [], null);
        $this->setIfExists('operation', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('additional_params', $data ?? [], null);
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

        if ($this->container['md_order'] === null) {
            $invalidProperties[] = "'md_order' can't be null";
        }
        if ((mb_strlen($this->container['md_order']) > 36)) {
            $invalidProperties[] = "invalid value for 'md_order', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['md_order']) < 36)) {
            $invalidProperties[] = "invalid value for 'md_order', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match("/^[a-f0-9\\-]+$/", $this->container['md_order'])) {
            $invalidProperties[] = "invalid value for 'md_order', must be conform to the pattern /^[a-f0-9\\-]+$/.";
        }

        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if ((mb_strlen($this->container['order_number']) > 36)) {
            $invalidProperties[] = "invalid value for 'order_number', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['order_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'order_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ((mb_strlen($this->container['operation']) > 20)) {
            $invalidProperties[] = "invalid value for 'operation', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['operation']) < 1)) {
            $invalidProperties[] = "invalid value for 'operation', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[A-Za-z0-9]*$/", $this->container['operation'])) {
            $invalidProperties[] = "invalid value for 'operation', must be conform to the pattern /^[A-Za-z0-9]*$/.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (($this->container['status'] > 1)) {
            $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 1.";
        }

        if (($this->container['status'] < 0)) {
            $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
     * Gets md_order
     *
     * @return string
     */
    public function getMdOrder()
    {
        return $this->container['md_order'];
    }

    /**
     * Sets md_order
     *
     * @param string $md_order Уникальный номер заказа в Платёжном шлюзе.
     *
     * @return self
     */
    public function setMdOrder($md_order)
    {
        if (is_null($md_order)) {
            throw new \InvalidArgumentException('non-nullable md_order cannot be null');
        }
        if ((mb_strlen($md_order) > 36)) {
            throw new \InvalidArgumentException('invalid length for $md_order when calling CallbackRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($md_order) < 36)) {
            throw new \InvalidArgumentException('invalid length for $md_order when calling CallbackRequest., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/^[a-f0-9\\-]+$/", ObjectSerializer::toString($md_order)))) {
            throw new \InvalidArgumentException("invalid value for \$md_order when calling CallbackRequest., must conform to the pattern /^[a-f0-9\\-]+$/.");
        }

        $this->container['md_order'] = $md_order;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId.
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {
        if (is_null($order_number)) {
            throw new \InvalidArgumentException('non-nullable order_number cannot be null');
        }
        if ((mb_strlen($order_number) > 36)) {
            throw new \InvalidArgumentException('invalid length for $order_number when calling CallbackRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($order_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $order_number when calling CallbackRequest., must be bigger than or equal to 1.');
        }

        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation Тип операции, о которой формируется уведомление. Возможны следующие значения:   * `created` = заказ создан;   * `approved` = операция удержания (холдирования) суммы;   * `deposited` = операция завершения;   * `reversed` = операция отмены;   * `refunded` = операция возврата;   * `declinedByTimeout` = истекло время, отведенное на оплату заказа;   * `subscriptionCreated` = подписка была создана Плательщиком.
     *
     * @return self
     */
    public function setOperation($operation)
    {
        if (is_null($operation)) {
            throw new \InvalidArgumentException('non-nullable operation cannot be null');
        }
        if ((mb_strlen($operation) > 20)) {
            throw new \InvalidArgumentException('invalid length for $operation when calling CallbackRequest., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($operation) < 1)) {
            throw new \InvalidArgumentException('invalid length for $operation when calling CallbackRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9]*$/", ObjectSerializer::toString($operation)))) {
            throw new \InvalidArgumentException("invalid value for \$operation when calling CallbackRequest., must conform to the pattern /^[A-Za-z0-9]*$/.");
        }

        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Индикатор успешности операции о которой формируется уведомление. Возможны следующие значения:   * `1` = операция прошла успешно;   * `0` = операция завершилась ошибкой;
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        if (($status > 1)) {
            throw new \InvalidArgumentException('invalid value for $status when calling CallbackRequest., must be smaller than or equal to 1.');
        }
        if (($status < 0)) {
            throw new \InvalidArgumentException('invalid value for $status when calling CallbackRequest., must be bigger than or equal to 0.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets additional_params
     *
     * @return \Sberbank\Model\AdditionalParams|null
     */
    public function getAdditionalParams()
    {
        return $this->container['additional_params'];
    }

    /**
     * Sets additional_params
     *
     * @param \Sberbank\Model\AdditionalParams|null $additional_params additional_params
     *
     * @return self
     */
    public function setAdditionalParams($additional_params)
    {
        if (is_null($additional_params)) {
            throw new \InvalidArgumentException('non-nullable additional_params cannot be null');
        }
        $this->container['additional_params'] = $additional_params;

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


