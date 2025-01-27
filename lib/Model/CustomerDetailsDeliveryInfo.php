<?php
/**
 * CustomerDetailsDeliveryInfo
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
 * CustomerDetailsDeliveryInfo Class Doc Comment
 *
 * @category Class
 * @description Блок для передачи параметров адреса Покупателя для доставки
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerDetailsDeliveryInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerDetails_deliveryInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_type' => 'string',
        'country' => 'string',
        'city' => 'string',
        'post_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_type' => null,
        'country' => null,
        'city' => null,
        'post_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery_type' => false,
        'country' => false,
        'city' => false,
        'post_address' => false
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
        'delivery_type' => 'deliveryType',
        'country' => 'country',
        'city' => 'city',
        'post_address' => 'postAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_type' => 'setDeliveryType',
        'country' => 'setCountry',
        'city' => 'setCity',
        'post_address' => 'setPostAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_type' => 'getDeliveryType',
        'country' => 'getCountry',
        'city' => 'getCity',
        'post_address' => 'getPostAddress'
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
        $this->setIfExists('delivery_type', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('post_address', $data ?? [], null);
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

        if (!is_null($this->container['delivery_type']) && (mb_strlen($this->container['delivery_type']) > 20)) {
            $invalidProperties[] = "invalid value for 'delivery_type', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['delivery_type']) && (mb_strlen($this->container['delivery_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'delivery_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['delivery_type']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['delivery_type'])) {
            $invalidProperties[] = "invalid value for 'delivery_type', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 3)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 3)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['country']) && !preg_match("/^[A-Za-z]*$/", $this->container['country'])) {
            $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /^[A-Za-z]*$/.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 40)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['city']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['city'])) {
            $invalidProperties[] = "invalid value for 'city', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['post_address']) && (mb_strlen($this->container['post_address']) > 255)) {
            $invalidProperties[] = "invalid value for 'post_address', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['post_address']) && (mb_strlen($this->container['post_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'post_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['post_address']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['post_address'])) {
            $invalidProperties[] = "invalid value for 'post_address', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
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
     * Gets delivery_type
     *
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string|null $delivery_type Тип доставки
     *
     * @return self
     */
    public function setDeliveryType($delivery_type)
    {
        if (is_null($delivery_type)) {
            throw new \InvalidArgumentException('non-nullable delivery_type cannot be null');
        }
        if ((mb_strlen($delivery_type) > 20)) {
            throw new \InvalidArgumentException('invalid length for $delivery_type when calling CustomerDetailsDeliveryInfo., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($delivery_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delivery_type when calling CustomerDetailsDeliveryInfo., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($delivery_type)))) {
            throw new \InvalidArgumentException("invalid value for \$delivery_type when calling CustomerDetailsDeliveryInfo., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Страна доставки
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling CustomerDetailsDeliveryInfo., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($country) < 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling CustomerDetailsDeliveryInfo., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Za-z]*$/", ObjectSerializer::toString($country)))) {
            throw new \InvalidArgumentException("invalid value for \$country when calling CustomerDetailsDeliveryInfo., must conform to the pattern /^[A-Za-z]*$/.");
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Город доставки
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerDetailsDeliveryInfo., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerDetailsDeliveryInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($city)))) {
            throw new \InvalidArgumentException("invalid value for \$city when calling CustomerDetailsDeliveryInfo., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets post_address
     *
     * @return string|null
     */
    public function getPostAddress()
    {
        return $this->container['post_address'];
    }

    /**
     * Sets post_address
     *
     * @param string|null $post_address Адрес для доставки
     *
     * @return self
     */
    public function setPostAddress($post_address)
    {
        if (is_null($post_address)) {
            throw new \InvalidArgumentException('non-nullable post_address cannot be null');
        }
        if ((mb_strlen($post_address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $post_address when calling CustomerDetailsDeliveryInfo., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($post_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $post_address when calling CustomerDetailsDeliveryInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($post_address)))) {
            throw new \InvalidArgumentException("invalid value for \$post_address when calling CustomerDetailsDeliveryInfo., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['post_address'] = $post_address;

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


