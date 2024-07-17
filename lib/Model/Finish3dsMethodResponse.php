<?php
/**
 * Finish3dsMethodResponse
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
 * Finish3dsMethodResponse Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Finish3dsMethodResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'finish3dsMethodResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_code' => 'string',
        'error_message' => 'string',
        'info' => 'string',
        'redirect' => 'string',
        'term_url' => 'string',
        'acs_url' => 'string',
        'c_req' => 'string',
        'acs_decouple_indicator' => '\Sberbank\Model\AcsDecoupleIndicator'
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
        'info' => null,
        'redirect' => null,
        'term_url' => null,
        'acs_url' => null,
        'c_req' => null,
        'acs_decouple_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_code' => false,
        'error_message' => false,
        'info' => false,
        'redirect' => false,
        'term_url' => false,
        'acs_url' => false,
        'c_req' => false,
        'acs_decouple_indicator' => false
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
        'info' => 'info',
        'redirect' => 'redirect',
        'term_url' => 'termUrl',
        'acs_url' => 'acsUrl',
        'c_req' => 'cReq',
        'acs_decouple_indicator' => 'acsDecoupleIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'info' => 'setInfo',
        'redirect' => 'setRedirect',
        'term_url' => 'setTermUrl',
        'acs_url' => 'setAcsUrl',
        'c_req' => 'setCReq',
        'acs_decouple_indicator' => 'setAcsDecoupleIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'info' => 'getInfo',
        'redirect' => 'getRedirect',
        'term_url' => 'getTermUrl',
        'acs_url' => 'getAcsUrl',
        'c_req' => 'getCReq',
        'acs_decouple_indicator' => 'getAcsDecoupleIndicator'
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
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('redirect', $data ?? [], null);
        $this->setIfExists('term_url', $data ?? [], null);
        $this->setIfExists('acs_url', $data ?? [], null);
        $this->setIfExists('c_req', $data ?? [], null);
        $this->setIfExists('acs_decouple_indicator', $data ?? [], null);
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

        if (!is_null($this->container['info']) && (mb_strlen($this->container['info']) > 512)) {
            $invalidProperties[] = "invalid value for 'info', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['info']) && (mb_strlen($this->container['info']) < 0)) {
            $invalidProperties[] = "invalid value for 'info', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['info']) && !preg_match("/^[ -~А-Яа-яЁё№]*$/", $this->container['info'])) {
            $invalidProperties[] = "invalid value for 'info', must be conform to the pattern /^[ -~А-Яа-яЁё№]*$/.";
        }

        if (!is_null($this->container['redirect']) && (mb_strlen($this->container['redirect']) > 2048)) {
            $invalidProperties[] = "invalid value for 'redirect', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['redirect']) && (mb_strlen($this->container['redirect']) < 1)) {
            $invalidProperties[] = "invalid value for 'redirect', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['redirect']) && !preg_match("/^[ -~]*$/", $this->container['redirect'])) {
            $invalidProperties[] = "invalid value for 'redirect', must be conform to the pattern /^[ -~]*$/.";
        }

        if (!is_null($this->container['term_url']) && (mb_strlen($this->container['term_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'term_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['term_url']) && (mb_strlen($this->container['term_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'term_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['term_url']) && !preg_match("/^https?:\/\/(.*)$/", $this->container['term_url'])) {
            $invalidProperties[] = "invalid value for 'term_url', must be conform to the pattern /^https?:\/\/(.*)$/.";
        }

        if (!is_null($this->container['acs_url']) && (mb_strlen($this->container['acs_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'acs_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['acs_url']) && (mb_strlen($this->container['acs_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'acs_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['acs_url']) && !preg_match("/^[ -~]*$/", $this->container['acs_url'])) {
            $invalidProperties[] = "invalid value for 'acs_url', must be conform to the pattern /^[ -~]*$/.";
        }

        if (!is_null($this->container['c_req']) && (mb_strlen($this->container['c_req']) > 4096)) {
            $invalidProperties[] = "invalid value for 'c_req', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['c_req']) && (mb_strlen($this->container['c_req']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_req', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['c_req']) && !preg_match("/^[ -~]*$/", $this->container['c_req'])) {
            $invalidProperties[] = "invalid value for 'c_req', must be conform to the pattern /^[ -~]*$/.";
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
            throw new \InvalidArgumentException('invalid length for $error_code when calling Finish3dsMethodResponse., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($error_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $error_code when calling Finish3dsMethodResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\\d{1,3}$/", ObjectSerializer::toString($error_code)))) {
            throw new \InvalidArgumentException("invalid value for \$error_code when calling Finish3dsMethodResponse., must conform to the pattern /^\\d{1,3}$/.");
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
            throw new \InvalidArgumentException('invalid length for $error_message when calling Finish3dsMethodResponse., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($error_message) < 0)) {
            throw new \InvalidArgumentException('invalid length for $error_message when calling Finish3dsMethodResponse., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($error_message)))) {
            throw new \InvalidArgumentException("invalid value for \$error_message when calling Finish3dsMethodResponse., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info Сообщение для отображения Плательщику
     *
     * @return self
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }
        if ((mb_strlen($info) > 512)) {
            throw new \InvalidArgumentException('invalid length for $info when calling Finish3dsMethodResponse., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($info) < 0)) {
            throw new \InvalidArgumentException('invalid length for $info when calling Finish3dsMethodResponse., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[ -~А-Яа-яЁё№]*$/", ObjectSerializer::toString($info)))) {
            throw new \InvalidArgumentException("invalid value for \$info when calling Finish3dsMethodResponse., must conform to the pattern /^[ -~А-Яа-яЁё№]*$/.");
        }

        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets redirect
     *
     * @return string|null
     */
    public function getRedirect()
    {
        return $this->container['redirect'];
    }

    /**
     * Sets redirect
     *
     * @param string|null $redirect Адрес возврата после совершения оплаты - returnUrl или failUrl (в зависиомсти от результата)
     *
     * @return self
     */
    public function setRedirect($redirect)
    {
        if (is_null($redirect)) {
            throw new \InvalidArgumentException('non-nullable redirect cannot be null');
        }
        if ((mb_strlen($redirect) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $redirect when calling Finish3dsMethodResponse., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($redirect) < 1)) {
            throw new \InvalidArgumentException('invalid length for $redirect when calling Finish3dsMethodResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($redirect)))) {
            throw new \InvalidArgumentException("invalid value for \$redirect when calling Finish3dsMethodResponse., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['redirect'] = $redirect;

        return $this;
    }

    /**
     * Gets term_url
     *
     * @return string|null
     */
    public function getTermUrl()
    {
        return $this->container['term_url'];
    }

    /**
     * Sets term_url
     *
     * @param string|null $term_url URL адрес Клиента для возврата после проведения 3-D Secure аутентификации Плательщика. Обязателен, если используется платёжная страница на стороне Клиента и 3DS Server Банка
     *
     * @return self
     */
    public function setTermUrl($term_url)
    {
        if (is_null($term_url)) {
            throw new \InvalidArgumentException('non-nullable term_url cannot be null');
        }
        if ((mb_strlen($term_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $term_url when calling Finish3dsMethodResponse., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($term_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $term_url when calling Finish3dsMethodResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^https?:\/\/(.*)$/", ObjectSerializer::toString($term_url)))) {
            throw new \InvalidArgumentException("invalid value for \$term_url when calling Finish3dsMethodResponse., must conform to the pattern /^https?:\/\/(.*)$/.");
        }

        $this->container['term_url'] = $term_url;

        return $this;
    }

    /**
     * Gets acs_url
     *
     * @return string|null
     */
    public function getAcsUrl()
    {
        return $this->container['acs_url'];
    }

    /**
     * Sets acs_url
     *
     * @param string|null $acs_url Адрес ACS Банка-эмитента для проведения 3-D Secure аутентификации Карты Плательщика. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента.
     *
     * @return self
     */
    public function setAcsUrl($acs_url)
    {
        if (is_null($acs_url)) {
            throw new \InvalidArgumentException('non-nullable acs_url cannot be null');
        }
        if ((mb_strlen($acs_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $acs_url when calling Finish3dsMethodResponse., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($acs_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $acs_url when calling Finish3dsMethodResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($acs_url)))) {
            throw new \InvalidArgumentException("invalid value for \$acs_url when calling Finish3dsMethodResponse., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['acs_url'] = $acs_url;

        return $this;
    }

    /**
     * Gets c_req
     *
     * @return string|null
     */
    public function getCReq()
    {
        return $this->container['c_req'];
    }

    /**
     * Sets c_req
     *
     * @param string|null $c_req Сообщение Challenge Request для проведения 3-D Secure аутентификации Карты Плательщика по протоколу 3-D Secure 2.x.x. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента.
     *
     * @return self
     */
    public function setCReq($c_req)
    {
        if (is_null($c_req)) {
            throw new \InvalidArgumentException('non-nullable c_req cannot be null');
        }
        if ((mb_strlen($c_req) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $c_req when calling Finish3dsMethodResponse., must be smaller than or equal to 4096.');
        }
        if ((mb_strlen($c_req) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_req when calling Finish3dsMethodResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($c_req)))) {
            throw new \InvalidArgumentException("invalid value for \$c_req when calling Finish3dsMethodResponse., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['c_req'] = $c_req;

        return $this;
    }

    /**
     * Gets acs_decouple_indicator
     *
     * @return \Sberbank\Model\AcsDecoupleIndicator|null
     */
    public function getAcsDecoupleIndicator()
    {
        return $this->container['acs_decouple_indicator'];
    }

    /**
     * Sets acs_decouple_indicator
     *
     * @param \Sberbank\Model\AcsDecoupleIndicator|null $acs_decouple_indicator acs_decouple_indicator
     *
     * @return self
     */
    public function setAcsDecoupleIndicator($acs_decouple_indicator)
    {
        if (is_null($acs_decouple_indicator)) {
            throw new \InvalidArgumentException('non-nullable acs_decouple_indicator cannot be null');
        }
        $this->container['acs_decouple_indicator'] = $acs_decouple_indicator;

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


