<?php

/**
 * Validation language strings.
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
	// Core Messages
	'noRuleSets'            => 'لم يتم تحديد مجموعة قواعد التحقق في الاعدادات.',
	'ruleNotFound'          => '{0} هذه القاعدة غير صالحة.',
	'groupNotFound'         => '{0} مجموعة التحقق هذه غير صالحة.',
	'groupNotArray'         => '{0} مجموعة التحقق يجب أن تكون مصفوفة.',
	'invalidTemplate'       => '{0} ليس قالب تحقق صالح.',

	// Rule Messages
	'alpha'                 => 'الحقل {field} يمكن أن يحتوى على أحرف.',
	'alpha_dash'            => 'الحقل {field} يمكن أن يحتوى على أحرف وأرقام أو شرطة أو شرطة سفلية.',
	'alpha_numeric'         => 'الحقل {field} يمكن أن يحتوى على أحرف وأرقام.',
	'alpha_numeric_space'   => 'الحقل {field} يمكن أن يحتوى على أحرف وأرقام و فراغات.',
	'alpha_space'  			=> 'الحقل {field} يمكن أن يحتوى على أحرف و فراغات.',
	'decimal'               => 'الحقل {field} يجب أن يحتوى على رقم عشري.',
	'differs'               => 'الحقل {field} يجب أن يكون مختلف عن الحقل {param}.',
	'equals'                => 'The {field} field must be exactly: {param}.',
	'exact_length'          => 'الحقل {field} يجب أن يكون بطول {param} حرف.',
	'greater_than'          => 'الحقل {field} يجب أن يحتوى على قيمة أكبر من {param}.',
	'greater_than_equal_to' => 'الحقل {field} يجب أن يحتوى على قيمة أكبر من او يساوي {param}.',
	'in_list'               => 'الحقل {field} يجب أن يحتوى على أحد القيم: {param}.',
	'integer'               => 'الحقل {field} يجب أن يحتوى على رقم صحيح.',
	'is_natural'            => 'الحقل {field} يجب أن يحتوى على عدد.',
	'is_natural_no_zero'    => 'الحقل {field} يجب أن يحتوى على عدد أكبر من الصفر.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
	'is_unique'             => 'الحقل {field} يجب أن يحتوى على قيمة غير موجودة مسبقا.',
	'less_than'             => 'الحقل {field} يجب أن يحتوى على رقم أقل من {param}.',
	'less_than_equal_to'    => 'الحقل {field} يجب أن يحتوى على رقم أقل أو يساوي {param}.',
	'matches'               => 'الحقل {field} لا يساوي الحقل {param}.',
	'max_length'            => 'الحقل {field} يجب أن لا يتجاوز أكثر من {param} حرف.',
	'min_length'            => 'الحقل {field} يجب أن لا يقل عن {param} حرف.',
	'not_equals'            => 'The {field} field cannot be: {param}.',
	'numeric'               => 'الحقل {field} يجب أن يحتوى على أرقام فقط.',
	'regex_match'           => 'الحقل {field} يجب أن يحتوى على الصيغة الصحيحة.',
	'required'              => 'الحقل {field} إجباري.',
	'required_with'         => 'الحقل {field} إجباري عندما تكون {param} موجود.',
	'required_without'      => 'الحقل {field} إجباري عندما تكون {param} غير موجود.',
	'timezone'              => 'الحقل {field} يجب أن يحتوى منطقة زمنية صحيح.',
	'valid_base64'          => 'الحقل {field} يجب أن يحتوى على نص بصيغة base64.',
	'valid_email'           => 'الحقل {field} يجب أن يحتوى عنوان بريد إلكتروني صحيح.',
	'valid_emails'          => 'الحقل {field} يجب أن يحتوى على عناوين بريد إلكتروني صحيحة.',
	'valid_ip'              => 'الحقل {field} يجب أن يحتوى على عنوان أي بي.',
	'valid_url'             => 'الحقل {field} يجب أن يحتوى على رابط.',
	'valid_date'            => 'الحقل {field} يجب أن يحتوى على تاريخ صحيح.',

	// Credit Cards
	'valid_cc_num'          => 'الحقل {field} يجب أن يحتوى على رقم بطاقة الائتمان صحيح.',

	// Files
	'uploaded'              => 'الملف {field} ليس ملف مرفوع صحيح.',
	'max_size'              => 'حجم الملف {field} كبير جدا.',
	'is_image'              => 'الملف {field} ليس ملف صورة.',
	'mime_in'               => 'نوع الملف {field} ليس نوع صحيح.',
	'ext_in'                => 'امتداد الملف {field} ليس امتداد صحيح.',
	'max_dims'              => 'الملف {field} اما انه ليس صورة او صورة ذات ارتفاع او عرض كبير جدا.',
];
