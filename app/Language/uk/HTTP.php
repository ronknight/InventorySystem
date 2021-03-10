<?php

/**
 * HTTP language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'Маєте включити бібліотеку CURL для використання класу CURLRequest.',
   'invalidSSLKey'              => 'Не вдається встановити ключ SSL. {0} не є дійсним файлом.',
   'sslCertNotFound'            => 'SSL-сертифікат не знайдено в {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} не є дійсним типом погодження. Має бути один із: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Некорректна версія протоколу HTTP. Має бути одне з: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Слід надати масив підтримуваних значень для всіх перемовин.',

	// RedirectResponse
   'invalidRoute'               => '{0} маршрут не буде знайдено при зворотній маршрутизації.',

	// DownloadResponse
   'cannotSetBinary'            => 'Двійковий файл не може бути шляхом до файлу.',
   'cannotSetFilepath'          => 'При встановленні двійкового файлу не не вдається встановити шлях: {0}.',
   'notFoundDownloadSource'     => 'Не знайдено основне джерело завантаження.',
   'cannotSetCache'             => 'При завантаженні кешування не підтримується.',
   'cannotSetStatusCode'        => 'Не можливо змінити код стану завантаження. Код: {0}, Причина: {1}.',

	// Response
   'missingResponseStatus'      => 'У відповіді HTTP відсутній код стану.',
   'invalidStatusCode'          => '{0} не є допустимим кодом стану.',
   'unknownStatusCode'          => 'Невідомий HTTP код стану, наданий без повідомлення: {0}.',

	// URI
   'cannotParseURI'             => 'Неможливо розібрати URI: {0}',
   'segmentOutOfRange'          => 'Сегмент URI запиту поза діапазоном: {0}',
   'invalidPort'                => 'Вказаний порт мусить бути між 0 та 65535. Вказано: {0}',
   'malformedQueryString'       => 'Рядки запиту можуть бути без фрагментів URI.',

	// Page Not Found
   'pageNotFound'               => 'Сторінку не знайдено.',
   'emptyController'            => 'Не вказано контролер.',
   'controllerNotFound'         => 'Контролер чи його метод не знайдено: {0}::{1}',
   'methodNotFound'             => 'Метод контролеру не знайдено: {0}',

	// CSRF
   'disallowedAction'           => 'Дія, яку ви вимагали, заборонена.',

	// Uploaded file moving
   'alreadyMoved'               => 'Завантажений файл вже перенесено.',
   'invalidFile'                => 'Початковий файл не є допустимим файлом.',
   'moveFailed'                 => 'Не вдалось переместити файл з {0} в {1}. ({2})',

   'uploadErrOk'                => 'Файл успішно завантажено!',
   'uploadErrIniSize'           => 'Ваш файл "%s" перевищує розмір, вказаний в директиві upload_max_filesize.',
   'uploadErrFormSize'          => 'Файл "%s" перевищує ліміт завантаження, встановлений у Вашій формі.',
   'uploadErrPartial'           => 'Файл "%s" було завантажено частково.',
   'uploadErrNoFile'            => 'Файл не завантажився.',
   'uploadErrCantWrite'         => 'Не вдалося записати на диск файл "%s".',
   'uploadErrNoTmpDir'          => 'Не вдалося завантажити файл: Відсутній тимчасовий каталог.',
   'uploadErrExtension'         => 'Завантаження файлу було зупинено розширенням PHP.',
   'uploadErrUnknown'           => 'Файл "%s" не завантажився через невідому помилку.',
];
