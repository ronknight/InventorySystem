<?php

/**
 * Image language strings.
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
	'sourceImageRequired'    => 'يجب تحديد مصدر الصوصة في الاعدادات.',
	'gdRequired'             => 'مكتبة الصور GD مطلوبة لتتمكن من استخدام هذه الميزة.',
	'gdRequiredForProps'     => 'مكتبة الصور GD مطلوبة لتتمكن من معرفة خصائص الصورة.',
	'gifNotSupported'        => 'الصورة من نوع GIF غير مدعومة بسبب قيود على رخصة الاستخدام. استخدم بدلا من ذلك الصور من نوع JPG أو PNG.',
	'jpgNotSupported'        => 'الصورة من نوع JPG غير مدعومة.',
	'pngNotSupported'        => 'الصورة من نوع PNG غير مدعومة.',
	'unsupportedImageCreate' => 'مكتبة الصور GD  لا تدعن معالجة هذا النوع من الصور.',
	'jpgOrPngRequired'       => 'نظام تغيير حجم الصور المحدد يدعم فقط الصور من نوع JPEG أو PNG.',
	'rotateUnsupported'      => 'تدوير الصور غير مدعوم في الخاد الخاص بك.',
	'libPathInvalid'         => 'مسار مكتبة الصور غير صحيح. الرجاء وضع المسار الصحيح في الاعدادات. {0, string)',
	'imageProcessFailed'     => 'فشل في معالجة الصورة. الرجاء التأكد من ان نظام الصور مدعوم ومسار مكتبة الصور صحيح.',
	'rotationAngleRequired'  => 'لاعادة تدوير الصورة يجب اعداء زاوية للذك.',
	'invalidPath'            => 'مسار الصوره غير صحيح.',
	'copyFailed'             => 'فشل في نسخ الصوره.',
	'missingFont'            => 'غير قادر على ايجاد الخط.',
	'saveFailed'             => 'غير قادر على حفظ الصورة. الرجاء التأكد من أن مسار الصورة او المجلد قابلة للكتابة.',
	'invalidDirection'       => 'لقلب إتجاه الصورة يجب أعطاء القيمة `vertical` أو `horizontal`. المعطى: {0}',
	'exifNotSupported'       => 'قراءة بيانات من الصورة EXIF غير مدعوم في نسخة PHP الحالية.',
];
