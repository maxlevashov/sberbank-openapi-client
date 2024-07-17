<?php
/**
 * ThreeDSCompInd
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
use \Sberbank\ObjectSerializer;

/**
 * ThreeDSCompInd Class Doc Comment
 *
 * @category Class
 * @description Статус завершения вызова 3DS Method:   * &#x60;Y&#x60; &#x3D; завершен успешно (получен 3DS Method Notification)   * &#x60;N&#x60; &#x3D; не завершен успешно (3DS Method Notification не получен в течение таймаута 10 сек)
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ThreeDSCompInd
{
    /**
     * Possible values of this enum
     */
    public const Y = 'Y';

    public const N = 'N';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Y,
            self::N
        ];
    }
}


