<?php

/**
 * Email language strings.
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
	'mustBeArray'          => 'يجب ارسال متغير $email الى دالة validateEmail على شكل مصفوفة.',
	'invalidAddress'       => 'عنوان بريد الكتروني غير صحيح: {0}',
	'attachmentMissing'    => 'لا يمكن ايجاد مرفق البريد الكتروني التالي: {0}',
	'attachmentUnreadable' => 'لا يمكن فتح المرفق: {0}',
	'noFrom'               => 'لا يمكن ارسال بريد الكتروني بدون تعليمة "From".',
	'noRecipients'         => 'يجب تحديد مرسل لهم من خلال تعليمة: To, Cc, or Bcc',
	'sendFailurePHPMail'   => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP mail(). لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sendFailureSendmail'  => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP Sendmail. لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sendFailureSmtp'      => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP SMTP. لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sent'                 => 'تم إرسال رسالتك بنجاح باستخدام البروتوكول التالي: {0}',
	'noSocket'             => 'غير قادر على فتح اتصال من نوع socket مع Sendmail. الرجاء مراجعة الاعدادات.',
	'noHostname'           => 'لم تحدد اسم مضيف SMTP.',
	'SMTPError'            => 'حدث خطأ SMTP التالي: {0}',
	'noSMTPAuth'           => 'خطأ SMTP: يجب استخدام اسم مستخدم وكلمة مرور.',
	'failedSMTPLogin'      => 'فشل في ارسال أمر AUTH LOGIN. الخطأ: {0}',
	'SMTPAuthUsername'     => 'فشل في مصادقة اسم المستخدم. الخطأ: {0}',
	'SMTPAuthPassword'     => 'فشل في مصادقة اسم كلمة المرور. الخطأ: {0}',
	'SMTPDataFailure'      => 'غير قادر على ارسال البيانات: {0}',
	'exitStatus'           => 'رمز حالة الخروج: {0}',
];
