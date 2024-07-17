<?php
/**
 * OperationsInner
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
 * OperationsInner Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OperationsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'operations_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'float',
        'type' => 'string',
        'amount' => 'int',
        'reference_number' => 'string',
        'external_refund_id' => 'string',
        'approval_code' => 'string',
        'action_code' => 'int',
        'amount_bonus' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'type' => null,
        'amount' => null,
        'reference_number' => null,
        'external_refund_id' => null,
        'approval_code' => null,
        'action_code' => null,
        'amount_bonus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
        'type' => false,
        'amount' => false,
        'reference_number' => false,
        'external_refund_id' => false,
        'approval_code' => false,
        'action_code' => false,
        'amount_bonus' => false
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
        'date' => 'date',
        'type' => 'type',
        'amount' => 'amount',
        'reference_number' => 'referenceNumber',
        'external_refund_id' => 'externalRefundId',
        'approval_code' => 'approvalCode',
        'action_code' => 'actionCode',
        'amount_bonus' => 'amountBonus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'type' => 'setType',
        'amount' => 'setAmount',
        'reference_number' => 'setReferenceNumber',
        'external_refund_id' => 'setExternalRefundId',
        'approval_code' => 'setApprovalCode',
        'action_code' => 'setActionCode',
        'amount_bonus' => 'setAmountBonus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'type' => 'getType',
        'amount' => 'getAmount',
        'reference_number' => 'getReferenceNumber',
        'external_refund_id' => 'getExternalRefundId',
        'approval_code' => 'getApprovalCode',
        'action_code' => 'getActionCode',
        'amount_bonus' => 'getAmountBonus'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('external_refund_id', $data ?? [], null);
        $this->setIfExists('approval_code', $data ?? [], null);
        $this->setIfExists('action_code', $data ?? [], null);
        $this->setIfExists('amount_bonus', $data ?? [], null);
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

        if (!is_null($this->container['date']) && ($this->container['date'] > 999999999999999)) {
            $invalidProperties[] = "invalid value for 'date', must be smaller than or equal to 999999999999999.";
        }

        if (!is_null($this->container['date']) && ($this->container['date'] < 0)) {
            $invalidProperties[] = "invalid value for 'date', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 20)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['type']) && !preg_match("/^[ -~]*$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^[ -~]*$/.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) > 24)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reference_number']) && !preg_match("/^[A-Za-z0-9]+$/", $this->container['reference_number'])) {
            $invalidProperties[] = "invalid value for 'reference_number', must be conform to the pattern /^[A-Za-z0-9]+$/.";
        }

        if (!is_null($this->container['external_refund_id']) && (mb_strlen($this->container['external_refund_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'external_refund_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['external_refund_id']) && (mb_strlen($this->container['external_refund_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_refund_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approval_code']) && (mb_strlen($this->container['approval_code']) > 6)) {
            $invalidProperties[] = "invalid value for 'approval_code', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['approval_code']) && (mb_strlen($this->container['approval_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'approval_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approval_code']) && !preg_match("/^\\w+$/", $this->container['approval_code'])) {
            $invalidProperties[] = "invalid value for 'approval_code', must be conform to the pattern /^\\w+$/.";
        }

        if (!is_null($this->container['action_code']) && ($this->container['action_code'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'action_code', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['action_code']) && ($this->container['action_code'] < -9999999)) {
            $invalidProperties[] = "invalid value for 'action_code', must be bigger than or equal to -9999999.";
        }

        if (!is_null($this->container['amount_bonus']) && ($this->container['amount_bonus'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'amount_bonus', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['amount_bonus']) && ($this->container['amount_bonus'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount_bonus', must be bigger than or equal to 0.";
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
     * @param float|null $date Дата и время регистрации заказа в формате UNIX-времени (POSIX-времени)
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        if (($date > 999999999999999)) {
            throw new \InvalidArgumentException('invalid value for $date when calling OperationsInner., must be smaller than or equal to 999999999999999.');
        }
        if (($date < 0)) {
            throw new \InvalidArgumentException('invalid value for $date when calling OperationsInner., must be bigger than or equal to 0.');
        }

        $this->container['date'] = $date;

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
     * @param string|null $type Тип платёжной операции. Возможные значения:   * `AUTHORIZATION`   * `PREAUTHORIZATION`   * `COMPLETION`   * `REVERSAL`   * `REFUND`
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        if ((mb_strlen($type) > 20)) {
            throw new \InvalidArgumentException('invalid length for $type when calling OperationsInner., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $type when calling OperationsInner., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($type)))) {
            throw new \InvalidArgumentException("invalid value for \$type when calling OperationsInner., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Сумма операции в минимальных единицах валюты
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling OperationsInner., must be smaller than or equal to 999999999999.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling OperationsInner., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Ссылочный номер авторизации платежа, который присваивается при регистрации платежа на стороне платёжной системы
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        if ((mb_strlen($reference_number) > 24)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling OperationsInner., must be smaller than or equal to 24.');
        }
        if ((mb_strlen($reference_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling OperationsInner., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[A-Za-z0-9]+$/", ObjectSerializer::toString($reference_number)))) {
            throw new \InvalidArgumentException("invalid value for \$reference_number when calling OperationsInner., must conform to the pattern /^[A-Za-z0-9]+$/.");
        }

        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets external_refund_id
     *
     * @return string|null
     */
    public function getExternalRefundId()
    {
        return $this->container['external_refund_id'];
    }

    /**
     * Sets external_refund_id
     *
     * @param string|null $external_refund_id Ключ идемпотентности возврата, присвоенный Клиентом. Учитывается в рамках одного заказа (orderId) и не имеет временных ограничений. При отправке повторного запроса с теми же данными и тем же ключом идемпотентности, ПШ обрабатывает запрос как повторный (с дублированием ответа на первоначальный запрос). Если в повторном запросе ключ идемпотентности тот же, а данные (хэш) запроса отличаются, то ПШ возвращает ошибку. При отправке запроса с уникальным ключом идемпотентности (либо при его отсутствии), ПШ обрабатывает запрос как новый.
     *
     * @return self
     */
    public function setExternalRefundId($external_refund_id)
    {
        if (is_null($external_refund_id)) {
            throw new \InvalidArgumentException('non-nullable external_refund_id cannot be null');
        }
        if ((mb_strlen($external_refund_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $external_refund_id when calling OperationsInner., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($external_refund_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_refund_id when calling OperationsInner., must be bigger than or equal to 1.');
        }

        $this->container['external_refund_id'] = $external_refund_id;

        return $this;
    }

    /**
     * Gets approval_code
     *
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->container['approval_code'];
    }

    /**
     * Sets approval_code
     *
     * @param string|null $approval_code Код авторизации платежа
     *
     * @return self
     */
    public function setApprovalCode($approval_code)
    {
        if (is_null($approval_code)) {
            throw new \InvalidArgumentException('non-nullable approval_code cannot be null');
        }
        if ((mb_strlen($approval_code) > 6)) {
            throw new \InvalidArgumentException('invalid length for $approval_code when calling OperationsInner., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($approval_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $approval_code when calling OperationsInner., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\\w+$/", ObjectSerializer::toString($approval_code)))) {
            throw new \InvalidArgumentException("invalid value for \$approval_code when calling OperationsInner., must conform to the pattern /^\\w+$/.");
        }

        $this->container['approval_code'] = $approval_code;

        return $this;
    }

    /**
     * Gets action_code
     *
     * @return int|null
     */
    public function getActionCode()
    {
        return $this->container['action_code'];
    }

    /**
     * Sets action_code
     *
     * @param int|null $action_code Код ответа платёжного шлюза - цифровое обозначение результата, к которому привело обращение со стороны Клиента
     *
     * @return self
     */
    public function setActionCode($action_code)
    {
        if (is_null($action_code)) {
            throw new \InvalidArgumentException('non-nullable action_code cannot be null');
        }

        if (($action_code > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $action_code when calling OperationsInner., must be smaller than or equal to 9999999.');
        }
        if (($action_code < -9999999)) {
            throw new \InvalidArgumentException('invalid value for $action_code when calling OperationsInner., must be bigger than or equal to -9999999.');
        }

        $this->container['action_code'] = $action_code;

        return $this;
    }

    /**
     * Gets amount_bonus
     *
     * @return int|null
     */
    public function getAmountBonus()
    {
        return $this->container['amount_bonus'];
    }

    /**
     * Sets amount_bonus
     *
     * @param int|null $amount_bonus Сумма операции в минорных единицах бонусов Спасибо (бонусных копейках). Возвращается в случае проведения операции с участием бонусов Спасибо.
     *
     * @return self
     */
    public function setAmountBonus($amount_bonus)
    {
        if (is_null($amount_bonus)) {
            throw new \InvalidArgumentException('non-nullable amount_bonus cannot be null');
        }

        if (($amount_bonus > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $amount_bonus when calling OperationsInner., must be smaller than or equal to 999999999999.');
        }
        if (($amount_bonus < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount_bonus when calling OperationsInner., must be bigger than or equal to 0.');
        }

        $this->container['amount_bonus'] = $amount_bonus;

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

