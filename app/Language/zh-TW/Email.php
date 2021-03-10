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
   'mustBeArray'          => '電子郵件驗證方法（email validation method）必須傳入一個陣列。',
   'invalidAddress'       => '無效的電子郵件地址: {0}',
   'attachmentMissing'    => '找不到以下附件: {0}',
   'attachmentUnreadable' => '無法開啟此附件: {0}',
   'noFrom'               => '請設定發件人（From），否則將無法傳送。',
   'noRecipients'         => '請設定收件人（Recipients），收件人可以是: 發送給（To）、副本（CC），或密件副本（BCC）',
   'sendFailurePHPMail'   => '無法使用 PHP mail() 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
   'sendFailureSendmail'  => '無法使用 PHP Sendmail 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
   'sendFailureSmtp'      => '無法使用 PHP SMTP 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
   'sent'                 => '您的郵件已使用下列協議成功寄出: {0}',
   'noSocket'             => '無法打開基座（Socket）傳送電子郵件，請確定您的設定是否正確。',
   'noHostname'           => '尚未指定SMTP的主機名稱。',
   'SMTPError'            => '發生以下SMTP錯誤: {0}',
   'noSMTPAuth'           => '錯誤: 您必須指定一組SMTP的使用者名稱與密碼。',
   'failedSMTPLogin'      => '無法傳送 AUTH LOGIN 指令。 錯誤: {0}',
   'SMTPAuthUsername'     => '驗證使用者名稱失敗。 錯誤: {0}',
   'SMTPAuthPassword'     => '驗證密碼失敗。 錯誤: {0}',
   'SMTPDataFailure'      => '無法傳送資料： {0}',
   'exitStatus'           => '結束（Exit）的狀態碼: {0}',
];
