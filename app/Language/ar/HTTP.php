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
	'missingCurl'                => 'يجب تفعيل مكتبة CURL حتى تستطيع إستخدام صنف CURLRequest.',
	'invalidSSLKey'              => 'لا يمكن استخدام مفتاح SSL. المسار {0} ليس ملف صالح.',
	'sslCertNotFound'            => 'شهادة SSL غير موجودة في المسار: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => 'القيمة {0} ليست نوع تفاوض صالح. يجب أن تكون أحد القيم التالية: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'نسخة بروتوكول HTTP غير صحيحة. يجب أن تكون أحد القيم التالية: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'يجب تحديد مصفوفة بجيمع أنواع التفاوض المدعومة لجميع عمليات التفاوض في الاتصال.',

	// RedirectResponse
	'invalidRoute'               => 'القيمة {0} ليست مسار توجيه صحيح.',

	// DownloadResponse
	'cannotSetBinary'            => 'عند تحديد مسار الملف لا يمكن تعيين ثنائي.',
	'cannotSetFilepath'          => 'عند ضبط ثنائي لا يمكن تعيين مسار الملف: {0}',
	'notFoundDownloadSource'     => 'لم يتم العثور على تنزيل مصدر النص.',
	'cannotSetCache'             => 'لا يدعم التخزين المؤقت للتنزيل.',
	'cannotSetStatusCode'        => 'لا يدعم تغيير رمز الحالة للتنزيل. الكود: {0} ، السبب: {1}',

	// Response
	'missingResponseStatus'      => 'استجابة HTTP لا تحتوي على كود الحالة',
	'invalidStatusCode'          => 'القيمة {0} ليست كود حالة صحيح لبروتوكول HTTP',
	'unknownStatusCode'          => 'كود الحالة لبروتوكول HTTP لا يحتوى على رسالة: {0}',

	// URI
	'cannotParseURI'             => 'لا يمكن معالجة الرابط: {0}',
	'segmentOutOfRange'          => 'أجزاء رابط الطلب خارج النطاق: {0}',
	'invalidPort'                => 'المنفذ يجب أن يكون بين 0 و 65535. المعطى: {0}',
	'malformedQueryString'       => 'معرفة الأجزاء التى تبدأ بعلامة # غير مسموح بها في الرابط.',

	// Page Not Found
	'pageNotFound'               => 'المتحكم غير موجودة',
	'emptyController'            => 'لايوجد متحكم محدد.',
	'controllerNotFound'         => 'المتحكم او الخاصة غير موجودة: {0}::{1}',
	'methodNotFound'             => 'الخاصية غير موجودة: {0}',

	// CSRF
	'disallowedAction'           => 'غير مسموح تكرار تنفيذ هذا الطلب.',

	// Uploaded file moving
	'alreadyMoved'				 => 'الملف المرفوع تم نقلة بالفعل.',
	'invalidFile'				 => 'الملف الأصل ليس ملفا صالح.',
	'moveFailed'				 => 'فشل في نقل الملف من {0} إلى {1} ({2})',

	'uploadErrOk'                => 'تم تحميل الملف بنجاح.',
	'uploadErrIniSize'           => 'يتجاوز الملف "٪ s" التوجيه الخاص بـ upload_max_filesize.',
	'uploadErrFormSize'          => 'يتجاوز الملف "٪ s" حد التحميل المحدد في النموذج.',
	'uploadErrPartial'           => 'تم تحميل الملف "٪ s" جزئيًا فقط.',
	'uploadErrNoFile'            => 'تم تحميله أي ملف.',
	'uploadErrCantWrite'         => 'لا يمكن كتابة الملف "٪ s" على القرص.',
	'uploadErrNoTmpDir'          => 'تعذر تحميل الملف: مفقود دليل مؤقت.',
	'uploadErrExtension'         => 'تم إيقاف تحميل الملف بواسطة امتداد PHP.',
	'uploadErrUnknown'           => 'لم يتم تحميل الملف "٪ s" بسبب خطأ غير معروف.',
];
