<?php
/**
 * SberbankOnlineAttributes
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
 * SberbankOnlineAttributes Class Doc Comment
 *
 * @category Class
 * @description Атрибуты для проведения платежей с использованием мобильного приложения \&quot;Сбербанк-Онлайн\&quot;
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SberbankOnlineAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sberbankOnlineAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app2app' => 'bool',
        'web2app' => 'bool',
        'app_deep_link' => 'string',
        'sberpay_backurl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app2app' => null,
        'web2app' => null,
        'app_deep_link' => null,
        'sberpay_backurl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app2app' => false,
        'web2app' => false,
        'app_deep_link' => false,
        'sberpay_backurl' => false
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
        'app2app' => 'app2app',
        'web2app' => 'web2app',
        'app_deep_link' => 'app.deepLink',
        'sberpay_backurl' => 'sberpay.backurl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app2app' => 'setApp2app',
        'web2app' => 'setWeb2app',
        'app_deep_link' => 'setAppDeepLink',
        'sberpay_backurl' => 'setSberpayBackurl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app2app' => 'getApp2app',
        'web2app' => 'getWeb2app',
        'app_deep_link' => 'getAppDeepLink',
        'sberpay_backurl' => 'getSberpayBackurl'
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
        $this->setIfExists('app2app', $data ?? [], null);
        $this->setIfExists('web2app', $data ?? [], null);
        $this->setIfExists('app_deep_link', $data ?? [], null);
        $this->setIfExists('sberpay_backurl', $data ?? [], null);
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

        if (!is_null($this->container['app_deep_link']) && (mb_strlen($this->container['app_deep_link']) > 255)) {
            $invalidProperties[] = "invalid value for 'app_deep_link', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['app_deep_link']) && (mb_strlen($this->container['app_deep_link']) < 1)) {
            $invalidProperties[] = "invalid value for 'app_deep_link', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['app_deep_link']) && !preg_match("/^[ -~]*$/", $this->container['app_deep_link'])) {
            $invalidProperties[] = "invalid value for 'app_deep_link', must be conform to the pattern /^[ -~]*$/.";
        }

        if (!is_null($this->container['sberpay_backurl']) && (mb_strlen($this->container['sberpay_backurl']) > 255)) {
            $invalidProperties[] = "invalid value for 'sberpay_backurl', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['sberpay_backurl']) && (mb_strlen($this->container['sberpay_backurl']) < 1)) {
            $invalidProperties[] = "invalid value for 'sberpay_backurl', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sberpay_backurl']) && !preg_match("/^[ -~]*$/", $this->container['sberpay_backurl'])) {
            $invalidProperties[] = "invalid value for 'sberpay_backurl', must be conform to the pattern /^[ -~]*$/.";
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
     * Gets app2app
     *
     * @return bool|null
     */
    public function getApp2app()
    {
        return $this->container['app2app'];
    }

    /**
     * Sets app2app
     *
     * @param bool|null $app2app Признак, указывающий на способ оплаты через мобильное приложение \"Сбербанк-Онлайн\" в случае, если Плательщик использует мобильное приложение Клиента.   * `true` = истина, передается в случае, если Плательщик будет перенаправлен в мобильное приложение \"Сбербанк-Онлайн\" из приложения Клиента;   * `false` = ложь.
     *
     * @return self
     */
    public function setApp2app($app2app)
    {
        if (is_null($app2app)) {
            throw new \InvalidArgumentException('non-nullable app2app cannot be null');
        }
        $this->container['app2app'] = $app2app;

        return $this;
    }

    /**
     * Gets web2app
     *
     * @return bool|null
     */
    public function getWeb2app()
    {
        return $this->container['web2app'];
    }

    /**
     * Sets web2app
     *
     * @param bool|null $web2app Признак, указывающий на способ оплаты через мобильное приложение \"Сбербанк-Онлайн\" в случае, если Плательщик использует desktop версию сервиса Партнера.   * `true` = истина, передается в случае:     * Необходимости создания виджета Умных советов в МП СБОЛ;     * Завершения сценария оплаты в МП СБОЛ.   * `false` = ложь.
     *
     * @return self
     */
    public function setWeb2app($web2app)
    {
        if (is_null($web2app)) {
            throw new \InvalidArgumentException('non-nullable web2app cannot be null');
        }
        $this->container['web2app'] = $web2app;

        return $this;
    }

    /**
     * Gets app_deep_link
     *
     * @return string|null
     */
    public function getAppDeepLink()
    {
        return $this->container['app_deep_link'];
    }

    /**
     * Sets app_deep_link
     *
     * @param string|null $app_deep_link Ссылка на мобильное приложение Клиента для возврата после оплаты в приложении \"Сбербанк-Онлайн\", обязательно если параметр app2app принимает значение \"Истина\"
     *
     * @return self
     */
    public function setAppDeepLink($app_deep_link)
    {
        if (is_null($app_deep_link)) {
            throw new \InvalidArgumentException('non-nullable app_deep_link cannot be null');
        }
        if ((mb_strlen($app_deep_link) > 255)) {
            throw new \InvalidArgumentException('invalid length for $app_deep_link when calling SberbankOnlineAttributes., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($app_deep_link) < 1)) {
            throw new \InvalidArgumentException('invalid length for $app_deep_link when calling SberbankOnlineAttributes., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($app_deep_link)))) {
            throw new \InvalidArgumentException("invalid value for \$app_deep_link when calling SberbankOnlineAttributes., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['app_deep_link'] = $app_deep_link;

        return $this;
    }

    /**
     * Gets sberpay_backurl
     *
     * @return string|null
     */
    public function getSberpayBackurl()
    {
        return $this->container['sberpay_backurl'];
    }

    /**
     * Sets sberpay_backurl
     *
     * @param string|null $sberpay_backurl Адрес для возврата Плательщика после оплаты в приложении \"Сбербанк-Онлайн\", обязательно в случае, если Плательщик будет перенаправлен в приложение \"Сбербанк-Онлайн\" из браузера, который находится на одном устройстве с приложением \"Сбербанк-Онлайн\".  Возможно получение статуса оплаты. Для этого в конце ссылки указывается параметр @{BankResultState}. При переходе по ссылке в нее будет добавлен параметр с результатом оплаты. Возможные значения параметра: значение    | расшифровка  ------------|------------------------------------------------------------- success     | оплата успешно прошла, требуется отправить на успешный экран return      | в сценарии оплаты произошла ошибка, требуется отправить на неуспешный экран cancel      | Клиент нажал отмену в СБОЛ (отказался оплачивать заказ), либо предлагаем перейти в Приложение СБОЛ и оплатить повторно, либо предлагаем вернуться в приложение Партнера. 0При переадресации пользователя из приложения Сбербанк Онлайн, он будет перенаправлен на одну из указанных страниц.
     *
     * @return self
     */
    public function setSberpayBackurl($sberpay_backurl)
    {
        if (is_null($sberpay_backurl)) {
            throw new \InvalidArgumentException('non-nullable sberpay_backurl cannot be null');
        }
        if ((mb_strlen($sberpay_backurl) > 255)) {
            throw new \InvalidArgumentException('invalid length for $sberpay_backurl when calling SberbankOnlineAttributes., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($sberpay_backurl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sberpay_backurl when calling SberbankOnlineAttributes., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($sberpay_backurl)))) {
            throw new \InvalidArgumentException("invalid value for \$sberpay_backurl when calling SberbankOnlineAttributes., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['sberpay_backurl'] = $sberpay_backurl;

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

