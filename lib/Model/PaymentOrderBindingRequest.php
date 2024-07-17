<?php
/**
 * PaymentOrderBindingRequest
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
 * PaymentOrderBindingRequest Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentOrderBindingRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentOrderBindingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_name' => 'string',
        'password' => 'string',
        'md_order' => 'string',
        'binding_id' => 'string',
        'cvc' => 'string',
        'language' => 'string',
        'ip' => 'string',
        'email' => 'string',
        'json_params' => '\Sberbank\Model\PaymentOrderBindingRequestJsonParams',
        'three_ds_method_notification_url' => 'string',
        'term_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_name' => null,
        'password' => null,
        'md_order' => null,
        'binding_id' => null,
        'cvc' => null,
        'language' => null,
        'ip' => null,
        'email' => null,
        'json_params' => null,
        'three_ds_method_notification_url' => null,
        'term_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_name' => false,
        'password' => false,
        'md_order' => false,
        'binding_id' => false,
        'cvc' => false,
        'language' => false,
        'ip' => false,
        'email' => false,
        'json_params' => false,
        'three_ds_method_notification_url' => false,
        'term_url' => false
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
        'user_name' => 'userName',
        'password' => 'password',
        'md_order' => 'mdOrder',
        'binding_id' => 'bindingId',
        'cvc' => 'cvc',
        'language' => 'language',
        'ip' => 'ip',
        'email' => 'email',
        'json_params' => 'jsonParams',
        'three_ds_method_notification_url' => 'threeDSMethodNotificationUrl',
        'term_url' => 'termUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'md_order' => 'setMdOrder',
        'binding_id' => 'setBindingId',
        'cvc' => 'setCvc',
        'language' => 'setLanguage',
        'ip' => 'setIp',
        'email' => 'setEmail',
        'json_params' => 'setJsonParams',
        'three_ds_method_notification_url' => 'setThreeDsMethodNotificationUrl',
        'term_url' => 'setTermUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'md_order' => 'getMdOrder',
        'binding_id' => 'getBindingId',
        'cvc' => 'getCvc',
        'language' => 'getLanguage',
        'ip' => 'getIp',
        'email' => 'getEmail',
        'json_params' => 'getJsonParams',
        'three_ds_method_notification_url' => 'getThreeDsMethodNotificationUrl',
        'term_url' => 'getTermUrl'
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
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('md_order', $data ?? [], null);
        $this->setIfExists('binding_id', $data ?? [], null);
        $this->setIfExists('cvc', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('json_params', $data ?? [], null);
        $this->setIfExists('three_ds_method_notification_url', $data ?? [], null);
        $this->setIfExists('term_url', $data ?? [], null);
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

        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ((mb_strlen($this->container['user_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['user_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[A-Za-z0-9-_ ]+$/", $this->container['user_name'])) {
            $invalidProperties[] = "invalid value for 'user_name', must be conform to the pattern /^[A-Za-z0-9-_ ]+$/.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) > 30)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['password']) < 1)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[ -~]+$/", $this->container['password'])) {
            $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^[ -~]+$/.";
        }

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

        if ($this->container['binding_id'] === null) {
            $invalidProperties[] = "'binding_id' can't be null";
        }
        if ((mb_strlen($this->container['binding_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'binding_id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['binding_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'binding_id', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match("/^[a-f0-9\\-]+$/", $this->container['binding_id'])) {
            $invalidProperties[] = "invalid value for 'binding_id', must be conform to the pattern /^[a-f0-9\\-]+$/.";
        }

        if (!is_null($this->container['cvc']) && (mb_strlen($this->container['cvc']) > 3)) {
            $invalidProperties[] = "invalid value for 'cvc', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['cvc']) && (mb_strlen($this->container['cvc']) < 3)) {
            $invalidProperties[] = "invalid value for 'cvc', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['cvc']) && !preg_match("/^\\d+$/", $this->container['cvc'])) {
            $invalidProperties[] = "invalid value for 'cvc', must be conform to the pattern /^\\d+$/.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['language']) && !preg_match("/^[a-z]+$/", $this->container['language'])) {
            $invalidProperties[] = "invalid value for 'language', must be conform to the pattern /^[a-z]+$/.";
        }

        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ((mb_strlen($this->container['ip']) > 39)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 39.";
        }

        if ((mb_strlen($this->container['ip']) < 1)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[ -~]*$/", $this->container['ip'])) {
            $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /^[ -~]*$/.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email']) && !preg_match("/^[ -~]+$/", $this->container['email'])) {
            $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[ -~]+$/.";
        }

        if (!is_null($this->container['three_ds_method_notification_url']) && (mb_strlen($this->container['three_ds_method_notification_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'three_ds_method_notification_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['three_ds_method_notification_url']) && (mb_strlen($this->container['three_ds_method_notification_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'three_ds_method_notification_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['three_ds_method_notification_url']) && !preg_match("/^https?:\/\/(.*)$/", $this->container['three_ds_method_notification_url'])) {
            $invalidProperties[] = "invalid value for 'three_ds_method_notification_url', must be conform to the pattern /^https?:\/\/(.*)$/.";
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
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name Логин Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        if ((mb_strlen($user_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling PaymentOrderBindingRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($user_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling PaymentOrderBindingRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-_ ]+$/", ObjectSerializer::toString($user_name)))) {
            throw new \InvalidArgumentException("invalid value for \$user_name when calling PaymentOrderBindingRequest., must conform to the pattern /^[A-Za-z0-9-_ ]+$/.");
        }

        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Пароль Клиента, полученный при подключении к ПШ
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        if ((mb_strlen($password) > 30)) {
            throw new \InvalidArgumentException('invalid length for $password when calling PaymentOrderBindingRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password when calling PaymentOrderBindingRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]+$/", ObjectSerializer::toString($password)))) {
            throw new \InvalidArgumentException("invalid value for \$password when calling PaymentOrderBindingRequest., must conform to the pattern /^[ -~]+$/.");
        }

        $this->container['password'] = $password;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $md_order when calling PaymentOrderBindingRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($md_order) < 36)) {
            throw new \InvalidArgumentException('invalid length for $md_order when calling PaymentOrderBindingRequest., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/^[a-f0-9\\-]+$/", ObjectSerializer::toString($md_order)))) {
            throw new \InvalidArgumentException("invalid value for \$md_order when calling PaymentOrderBindingRequest., must conform to the pattern /^[a-f0-9\\-]+$/.");
        }

        $this->container['md_order'] = $md_order;

        return $this;
    }

    /**
     * Gets binding_id
     *
     * @return string
     */
    public function getBindingId()
    {
        return $this->container['binding_id'];
    }

    /**
     * Sets binding_id
     *
     * @param string $binding_id Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками
     *
     * @return self
     */
    public function setBindingId($binding_id)
    {
        if (is_null($binding_id)) {
            throw new \InvalidArgumentException('non-nullable binding_id cannot be null');
        }
        if ((mb_strlen($binding_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $binding_id when calling PaymentOrderBindingRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($binding_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $binding_id when calling PaymentOrderBindingRequest., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/^[a-f0-9\\-]+$/", ObjectSerializer::toString($binding_id)))) {
            throw new \InvalidArgumentException("invalid value for \$binding_id when calling PaymentOrderBindingRequest., must conform to the pattern /^[a-f0-9\\-]+$/.");
        }

        $this->container['binding_id'] = $binding_id;

        return $this;
    }

    /**
     * Gets cvc
     *
     * @return string|null
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     *
     * @param string|null $cvc Проверочный код Карты Плательщика (обычно с обратной стороны Карты)
     *
     * @return self
     */
    public function setCvc($cvc)
    {
        if (is_null($cvc)) {
            throw new \InvalidArgumentException('non-nullable cvc cannot be null');
        }
        if ((mb_strlen($cvc) > 3)) {
            throw new \InvalidArgumentException('invalid length for $cvc when calling PaymentOrderBindingRequest., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($cvc) < 3)) {
            throw new \InvalidArgumentException('invalid length for $cvc when calling PaymentOrderBindingRequest., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^\\d+$/", ObjectSerializer::toString($cvc)))) {
            throw new \InvalidArgumentException("invalid value for \$cvc when calling PaymentOrderBindingRequest., must conform to the pattern /^\\d+$/.");
        }

        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        if ((mb_strlen($language) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling PaymentOrderBindingRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($language) < 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling PaymentOrderBindingRequest., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[a-z]+$/", ObjectSerializer::toString($language)))) {
            throw new \InvalidArgumentException("invalid value for \$language when calling PaymentOrderBindingRequest., must conform to the pattern /^[a-z]+$/.");
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip IP-адрес Плательщика
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (is_null($ip)) {
            throw new \InvalidArgumentException('non-nullable ip cannot be null');
        }
        if ((mb_strlen($ip) > 39)) {
            throw new \InvalidArgumentException('invalid length for $ip when calling PaymentOrderBindingRequest., must be smaller than or equal to 39.');
        }
        if ((mb_strlen($ip) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ip when calling PaymentOrderBindingRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[ -~]*$/", ObjectSerializer::toString($ip)))) {
            throw new \InvalidArgumentException("invalid value for \$ip when calling PaymentOrderBindingRequest., must conform to the pattern /^[ -~]*$/.");
        }

        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Адрес электронной почты Плательщика. В случае использования фискализации обязателен, при отсутствии phone.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PaymentOrderBindingRequest., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PaymentOrderBindingRequest., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[ -~]+$/", ObjectSerializer::toString($email)))) {
            throw new \InvalidArgumentException("invalid value for \$email when calling PaymentOrderBindingRequest., must conform to the pattern /^[ -~]+$/.");
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets json_params
     *
     * @return \Sberbank\Model\PaymentOrderBindingRequestJsonParams|null
     */
    public function getJsonParams()
    {
        return $this->container['json_params'];
    }

    /**
     * Sets json_params
     *
     * @param \Sberbank\Model\PaymentOrderBindingRequestJsonParams|null $json_params json_params
     *
     * @return self
     */
    public function setJsonParams($json_params)
    {
        if (is_null($json_params)) {
            throw new \InvalidArgumentException('non-nullable json_params cannot be null');
        }
        $this->container['json_params'] = $json_params;

        return $this;
    }

    /**
     * Gets three_ds_method_notification_url
     *
     * @return string|null
     */
    public function getThreeDsMethodNotificationUrl()
    {
        return $this->container['three_ds_method_notification_url'];
    }

    /**
     * Sets three_ds_method_notification_url
     *
     * @param string|null $three_ds_method_notification_url URL адрес Клиента для получения уведомления о завершении вызова 3DS Method (3DS Method Notification URL)
     *
     * @return self
     */
    public function setThreeDsMethodNotificationUrl($three_ds_method_notification_url)
    {
        if (is_null($three_ds_method_notification_url)) {
            throw new \InvalidArgumentException('non-nullable three_ds_method_notification_url cannot be null');
        }
        if ((mb_strlen($three_ds_method_notification_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $three_ds_method_notification_url when calling PaymentOrderBindingRequest., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($three_ds_method_notification_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $three_ds_method_notification_url when calling PaymentOrderBindingRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^https?:\/\/(.*)$/", ObjectSerializer::toString($three_ds_method_notification_url)))) {
            throw new \InvalidArgumentException("invalid value for \$three_ds_method_notification_url when calling PaymentOrderBindingRequest., must conform to the pattern /^https?:\/\/(.*)$/.");
        }

        $this->container['three_ds_method_notification_url'] = $three_ds_method_notification_url;

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
            throw new \InvalidArgumentException('invalid length for $term_url when calling PaymentOrderBindingRequest., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($term_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $term_url when calling PaymentOrderBindingRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^https?:\/\/(.*)$/", ObjectSerializer::toString($term_url)))) {
            throw new \InvalidArgumentException("invalid value for \$term_url when calling PaymentOrderBindingRequest., must conform to the pattern /^https?:\/\/(.*)$/.");
        }

        $this->container['term_url'] = $term_url;

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

