# # TdsBrowserAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**challenge_window_size** | **string** | Разрешение страниц ACS, в случае проведения Challenge с Плательщиком по протоколу 3-D Secure на базе EMV 2.x.x   * &#x60;01&#x60; &#x3D; 250x400   * &#x60;02&#x60; &#x3D; 390x400 (по умолчанию)   * &#x60;03&#x60; &#x3D; 500x600   * &#x60;04&#x60; &#x3D; 600x400   * &#x60;05&#x60; &#x3D; Full screen | [optional]
**browser_accept_header** | **string** | Содержимое HTTP accept headers браузера Плательщика. Обязательно для Browser-based операций |
**browser_ip** | **string** | IP адрес Плательщика, полученный из HTTP заголовков браузера. Обязательно для Browser-based операций |
**browser_java_enabled** | **bool** | Возможность браузера выполнять Java, значение свойства navigator.javaEnabled. Обязательно, если browserJavascriptEnabled &#x3D; true | [optional]
**browser_javascript_enabled** | **bool** | Возможность браузера выполнять JavaScript. Обязательно для Browser-based операций. |
**browser_language** | **string** | Язык браузера согласно ETF BCP47, значение свойства navigator.language. Обязательно, если browserJavascriptEnabled &#x3D; true | [optional]
**browser_color_depth** | **string** | Битовая глубина цветовой палитры экрана, значение свойства screen.colorDepth. Обязательно, если browserJavascriptEnabled &#x3D; true   * &#x60;1&#x60; &#x3D; 1 bit   * &#x60;4&#x60; &#x3D; 4 bits   * &#x60;8&#x60; &#x3D; 8 bits   * &#x60;15&#x60; &#x3D; 15 bits   * &#x60;16&#x60; &#x3D; 16 bits   * &#x60;24&#x60; &#x3D; 24 bits   * &#x60;32&#x60; &#x3D; 32 bits   * &#x60;48&#x60; &#x3D; 48 bits | [optional]
**browser_screen_height** | **string** | Высота экрана в пикселях, значение свойства screen.height. Обязательно, если browserJavascriptEnabled &#x3D; true | [optional]
**browser_screen_width** | **string** | Ширина экрана в пикселях, значение свойства screen.width. Обязательно, если browserJavascriptEnabled &#x3D; true | [optional]
**browser_tz** | **string** | Смещение в минутах между часовым поясом UTC и местным временем браузера. Обязательно, если browserJavascriptEnabled &#x3D; true | [optional]
**browser_user_agent** | **string** | Содержимое заголовка HTTP user-agent. Обязательно для Browser-based операций |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
