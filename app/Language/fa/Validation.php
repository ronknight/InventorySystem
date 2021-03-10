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
   'noRuleSets'            => 'در تنظیمات اعتبارسنجی هیچ سری قانونی تعریف نشده است.',
   'ruleNotFound'          => '{0} یک قانون معتبر نیست.',
   'groupNotFound'         => '{0} یک گروه اعتبار سنجی نیست.',
   'groupNotArray'         => 'گروه قانون {0} باید یک آرایه باشد.',
   'invalidTemplate'       => '{0} قالب اعتبارسنجی درستی نیست.',

	// Rule Messages
   'alpha'                 => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی و یا حروف باشد.',
   'alpha_dash'            => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی، حروف، خط تیره و آندرلاین باشد.',
   'alpha_numeric'         => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی و یا حروف باشد.',
   'alpha_numeric_space'   => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی، حروف و فاصله باشد.',
   'alpha_space'           => 'فیلد {field} فقط می‌تواند شامل حروف و فاصله باشد.',
   'decimal'               => 'فیلد {field} باید یک عدد اعشاری باشد.',
   'differs'               => 'فیلد {field} باید با فیلد {param} متفاوت باشد.',
   'exact_length'          => 'طول فیلد {field} باید دقیقا {param} کاراکتر باشد.',
   'greater_than'          => 'فیلد {field} باید عددی بزرگتر از {param} باشد.',
   'greater_than_equal_to' => 'فیلد {field} باید عددی بزرگتر یا مساوی {param} باشد.',
   'in_list'               => 'فیلد {field} باید یکی از این مقدارها باشد: {param}.',
   'equals'                => 'The {field} field must be exactly: {param}.',
   'integer'               => 'فیلد {field} باید یک عدد صحیح باشد.',
   'is_natural'            => 'فیلد {field} فقط می‌تواند شامل ارقام باشد.',
   'is_natural_no_zero'    => 'فیلد {field} باید عددی بزرگتر از صفر باشد.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'فیلد {field} باید مقداری یکتا داشته باشد.',
   'less_than'             => 'فیلد {field} باید عددی کوچکتر از {param} باشد.',
   'less_than_equal_to'    => 'فیلد {field} باید عددی کوکیتر یا مساوی {param} باشد.',
   'matches'               => 'فیلد {field} با فیلد {param} همخوانی ندارد.',
   'max_length'            => 'طول فیلد {field} نباید بیشتر از {param} کاراکتر باشد.',
   'min_length'            => 'طول فیلد {field} باید حداقل {param} کاراکتر باشد.',
   'not_equals'            => 'The {field} field cannot be: {param}.',
   'numeric'               => 'فیلد {field} باید یک عدد باشد.',
   'regex_match'           => 'فرمت فیلد {field} رعایت نشده است.',
   'required'              => 'فیلد {field} اجباری است.',
   'required_with'         => 'وقتی {param} پر باشد، فیلد {field} اجباری است.',
   'required_without'      => 'وقتی {param} پر نشده باشد، فیلد {field} اجباری است.',
   'timezone'              => 'فیلد {field} باید یک منطقه‌ی زمانی صحیح باشد.',
   'valid_base64'          => 'فیلد {field} باید یک رشته‌ی صحیح base64 باشد.',
   'valid_email'           => 'فیلد {field} باید یک آدرس ای‌میل معتبر باشد.',
   'valid_emails'          => 'تمام موارد {field} باید آدرس ای‌میل‌های معتبر باشند.',
   'valid_ip'              => 'فیلد {field} باید یک IP معتبر باشد.',
   'valid_url'             => 'فیلد {field} باید یک URL (آدرس اینترنتی) معتبر باشد.',
   'valid_date'            => 'فیلد {field} باید یک تاریخ معتبر باشد.',
	// Credit Cards
   'valid_cc_num'          => '{field} یک شماره‌ی کارت اعتباری معتبر نیست.',
	// Files
   'uploaded'              => '{field} یک فایل آپلود شده‌ی معتبر نیست.',
   'max_size'              => '{field} برای یک فایل، سایز خیلی بزرگ دارد.',
   'is_image'              => '{field} یک عکس آپلود شده‌ی معتبر نیست.',
   'mime_in'               => '{field} mime type معتبری ندارد.',
   'ext_in'                => '{field} پسوند فایل معتبری ندارد.',
   'max_dims'              => '{field} یا یک عکس صحیح نیست، یا عرض یا طول خیلی زیادی دارد.',
];