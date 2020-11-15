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
   'mustBeArray'          => 'لطفا یک «آرایه» به متد اعتبارسنجی ای‌میل ارسال کنید.',
   'invalidAddress'       => 'ای‌میل نامعتبر: {0}',
   'attachmentMissing'    => 'پیوست ای‌میل {0} یافت نشد.',
   'attachmentUnreadable' => 'باز کردن پیوست {0} امکان‌پذیر نیست.',
   'noFrom'               => 'ارسال ای‌میل بدون هِدِر "From" ممکن نیست.',
   'noRecipients'         => 'لطفا یک مخاطب به یکی از صورت‌های To، Cc یا Bcc وارد کنید',
   'sendFailurePHPMail'   => 'امکان ارسال ای‌میل با استفاده از تابع mail() وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
   'sendFailureSendmail'  => 'امکان ارسال ای‌میل به روش Sendmail وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
   'sendFailureSmtp'      => 'امکان ارسال ای‌میل به روش SMTP وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
   'sent'                 => 'پیام با استفاده از روش {0} با موفقیت ارسال شد.',
   'noSocket'             => 'امکان باز کردن سوکت برای استفاده از روش Sendmail وجود ندارد. لطفا تنظیمات سرور را بررسی کنید.',
   'noHostname'           => 'شما هیچ هاست SMTP انتخاب نکرده‌اید.',
   'SMTPError'            => 'خطای SMTP: {0}',
   'noSMTPAuth'           => 'شما هیچ نام کاربری و رمز SMTP ارائه نکرده‌اید.',
   'failedSMTPLogin'      => 'مشکل در ارسال دستور AUTH LOGIN. خطا: {0}',
   'SMTPAuthUsername'     => 'مشکل در احراز هویت نام کاربری. خطا: {0}',
   'SMTPAuthPassword'     => 'مشکل در احراز هویت رمز. خطا: {0}',
   'SMTPDataFailure'      => 'امکان ارسال داده وجود ندارد: {0}',
   'exitStatus'           => 'Exit status code: {0}',
];