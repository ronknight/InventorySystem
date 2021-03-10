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
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	// CurlRequest
   'missingCurl'                => 'برای استفاده از کلاس CURLRequest باید CURL فعال باشد.',
   'invalidSSLKey'              => 'امکان تنظیم SSL Key وجود ندارد. {0} فایل معتبری نیست.',
   'sslCertNotFound'            => 'گواهینامه SSL در آدرس {0} پیدا نشد.',
   'curlError'                  => '{0} : {1}',
	// IncomingRequest
   'invalidNegotiationType'     => '{0} نوع ورودی معتبری نیست. باید یکی از media, charset, encoding, language باشد.',
	// Message
   'invalidHTTPProtocol'        => 'نسخه HTTP Protocol معتبر نیست. گزینه‌های معتبر: {0}',
	// Negotiate
   'emptySupportedNegotiations' => 'برای انجام Negotiations شما باید آرایه‌ای از مقادیر مجاز را وارد کنید.',
	// RedirectResponse
   'invalidRoute'               => 'مسیر {0} در هنگام مسیریابی وارونه (reverse-routing) پیدا نشد.',
	// DownloadResponse
   'cannotSetBinary'            => 'وقتی که مسیر فایل را تنظیم می‌کنید، نمی‌توانید یک کقدار باینری وارد کنید.',
   'cannotSetFilepath'          => 'وقتی که باینری را انتخاب می‌کید، نمی‌توانید مسیر فایل ارسال کنید: {0}',
   'notFoundDownloadSource'     => 'منبع دانلود پیدا نشد.',
   'cannotSetCache'             => 'سیستم Caching برای دانلود پشتیبانی نمی‌شود.',
   'cannotSetStatusCode'        => 'تغییر status code برای دانلود پشتیبانی نمی‌شود. کد: {0}, دلیل: {1}',
	// Response
   'missingResponseStatus'      => 'Status code در پاسخ HTTP وجود ندارد',
   'invalidStatusCode'          => '{0} یک Status Code صحیح نیست.',
   'unknownStatusCode'          => 'Status Code نامعلوم با هیچ پیامی مرتبط نیست: {0}',
	// URI
   'cannotParseURI'             => 'پارس کردن و فهمیدم URI ممکن نیست: {0}',
   'segmentOutOfRange'          => 'بخش Request URI خارج از محدوده است: {0}',
   'invalidPort'                => 'پورت باید بین 0 و 65535 باشد. مقدار ورودی: {0}',
   'malformedQueryString'       => 'Query string نمی‌تواند شامل قسمت‌های URI باشد.',
	// Page Not Found
   'pageNotFound'               => 'صفحه پیدا نشد',
   'emptyController'            => 'No Controller specified.',
   'controllerNotFound'         => 'Controller or its method is not found: {0}::{1}',
   'methodNotFound'             => 'Controller method is not found: {0}',
	// CSRF
   'disallowedAction'           => 'Action درخواستی شما مجاز نیست.',
	// Uploaded file moving
   'alreadyMoved'               => 'فایل آپلود شده در حال حاضر جابجا شده است.',
   'invalidFile'                => 'فایل اصلی معتبر نیست.',
   'moveFailed'                 => 'امکان انتقال فایل از {0} به {1} وجود ندارد. ({2})',

   'uploadErrOk'				=> 'فایل با موفقیت آپلود شد.',
   'uploadErrIniSize'			=> 'فایل "%s" از upload_max_filesize در فایل ini بیشتر است..',
   'uploadErrFormSize'			=> 'فایل "%s" از محدوده آپلود تعریف شده در فرم شما بیشتر است.',
   'uploadErrPartial'			=> 'فایل "%s" فقط به صورت ناقص آپلود شده است.',
   'uploadErrNoFile'			=> 'هیچ فایلی آپلود نشد.',
   'uploadErrCantWrite'			=> 'فایل "%s" نمی‌تواند در دیسک نوشته (ذخیره) شود.',
   'uploadErrNoTmpDir'			=> 'فایل آپلود نشد: دایرکتوری موقت پیدا نشد.',
   'uploadErrExtension' 		=> 'فایل توسط یک افزونه‌ی PHP متوقف شد.',
   'uploadErrUnknown'			=> 'فایل "%s" was not uploaded due to an unknown error.'
];