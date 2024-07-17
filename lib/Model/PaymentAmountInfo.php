<?php
/**
 * PaymentAmountInfo
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
 * PaymentAmountInfo Class Doc Comment
 *
 * @category Class
 * @description Блок информации о суммах, участвующих в цикле платежа
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentAmountInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentAmountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approved_amount' => 'int',
        'deposited_amount' => 'int',
        'refunded_amount' => 'int',
        'fee_amount' => 'int',
        'payment_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approved_amount' => null,
        'deposited_amount' => null,
        'refunded_amount' => null,
        'fee_amount' => null,
        'payment_state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'approved_amount' => false,
        'deposited_amount' => false,
        'refunded_amount' => false,
        'fee_amount' => false,
        'payment_state' => false
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
        'approved_amount' => 'approvedAmount',
        'deposited_amount' => 'depositedAmount',
        'refunded_amount' => 'refundedAmount',
        'fee_amount' => 'feeAmount',
        'payment_state' => 'paymentState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approved_amount' => 'setApprovedAmount',
        'deposited_amount' => 'setDepositedAmount',
        'refunded_amount' => 'setRefundedAmount',
        'fee_amount' => 'setFeeAmount',
        'payment_state' => 'setPaymentState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approved_amount' => 'getApprovedAmount',
        'deposited_amount' => 'getDepositedAmount',
        'refunded_amount' => 'getRefundedAmount',
        'fee_amount' => 'getFeeAmount',
        'payment_state' => 'getPaymentState'
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
        $this->setIfExists('approved_amount', $data ?? [], null);
        $this->setIfExists('deposited_amount', $data ?? [], null);
        $this->setIfExists('refunded_amount', $data ?? [], null);
        $this->setIfExists('fee_amount', $data ?? [], null);
        $this->setIfExists('payment_state', $data ?? [], null);
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

        if (!is_null($this->container['approved_amount']) && ($this->container['approved_amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'approved_amount', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['approved_amount']) && ($this->container['approved_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'approved_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['deposited_amount']) && ($this->container['deposited_amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'deposited_amount', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['deposited_amount']) && ($this->container['deposited_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'deposited_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refunded_amount']) && ($this->container['refunded_amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'refunded_amount', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['refunded_amount']) && ($this->container['refunded_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'refunded_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fee_amount']) && ($this->container['fee_amount'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'fee_amount', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['fee_amount']) && ($this->container['fee_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'fee_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['payment_state']) && (mb_strlen($this->container['payment_state']) > 10)) {
            $invalidProperties[] = "invalid value for 'payment_state', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['payment_state']) && (mb_strlen($this->container['payment_state']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_state', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payment_state']) && !preg_match("/^[A-Za-z]*$/", $this->container['payment_state'])) {
            $invalidProperties[] = "invalid value for 'payment_state', must be conform to the pattern /^[A-Za-z]*$/.";
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
     * Gets approved_amount
     *
     * @return int|null
     */
    public function getApprovedAmount()
    {
        return $this->container['approved_amount'];
    }

    /**
     * Sets approved_amount
     *
     * @param int|null $approved_amount Сумма холдирования для двухстадийного платежа или подтвержденная сумма списания для одностадийного платежа
     *
     * @return self
     */
    public function setApprovedAmount($approved_amount)
    {
        if (is_null($approved_amount)) {
            throw new \InvalidArgumentException('non-nullable approved_amount cannot be null');
        }

        if (($approved_amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $approved_amount when calling PaymentAmountInfo., must be smaller than or equal to 999999999999.');
        }
        if (($approved_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $approved_amount when calling PaymentAmountInfo., must be bigger than or equal to 0.');
        }

        $this->container['approved_amount'] = $approved_amount;

        return $this;
    }

    /**
     * Gets deposited_amount
     *
     * @return int|null
     */
    public function getDepositedAmount()
    {
        return $this->container['deposited_amount'];
    }

    /**
     * Sets deposited_amount
     *
     * @param int|null $deposited_amount Сумма завершения оплаты для двухстадийного сценария платежа
     *
     * @return self
     */
    public function setDepositedAmount($deposited_amount)
    {
        if (is_null($deposited_amount)) {
            throw new \InvalidArgumentException('non-nullable deposited_amount cannot be null');
        }

        if (($deposited_amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $deposited_amount when calling PaymentAmountInfo., must be smaller than or equal to 999999999999.');
        }
        if (($deposited_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $deposited_amount when calling PaymentAmountInfo., must be bigger than or equal to 0.');
        }

        $this->container['deposited_amount'] = $deposited_amount;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int|null $refunded_amount Сумма возвращенных средств
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        if (is_null($refunded_amount)) {
            throw new \InvalidArgumentException('non-nullable refunded_amount cannot be null');
        }

        if (($refunded_amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $refunded_amount when calling PaymentAmountInfo., must be smaller than or equal to 999999999999.');
        }
        if (($refunded_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $refunded_amount when calling PaymentAmountInfo., must be bigger than or equal to 0.');
        }

        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return int|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param int|null $fee_amount Сумма комиссии в минимальных единицах валюты
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        if (is_null($fee_amount)) {
            throw new \InvalidArgumentException('non-nullable fee_amount cannot be null');
        }

        if (($fee_amount > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $fee_amount when calling PaymentAmountInfo., must be smaller than or equal to 999999999999.');
        }
        if (($fee_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $fee_amount when calling PaymentAmountInfo., must be bigger than or equal to 0.');
        }

        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets payment_state
     *
     * @return string|null
     */
    public function getPaymentState()
    {
        return $this->container['payment_state'];
    }

    /**
     * Sets payment_state
     *
     * @param string|null $payment_state Состояние платежа. Возможны следующие варианты:   * `CREATED`   * `APPROVED`   * `DEPOSITED`   * `REVERSED`   * `REFUNDED`   * `DECLINED`
     *
     * @return self
     */
    public function setPaymentState($payment_state)
    {
        if (is_null($payment_state)) {
            throw new \InvalidArgumentException('non-nullable payment_state cannot be null');
        }
        if ((mb_strlen($payment_state) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_state when calling PaymentAmountInfo., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_state when calling PaymentAmountInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z]*$/", ObjectSerializer::toString($payment_state)))) {
            throw new \InvalidArgumentException("invalid value for \$payment_state when calling PaymentAmountInfo., must conform to the pattern /^[A-Za-z]*$/.");
        }

        $this->container['payment_state'] = $payment_state;

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


