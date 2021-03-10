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
 * @author     XuanDung38 (Fox)
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'Phương thức xác thực email phải được thông qua một mảng.',
   'invalidAddress'       => 'Địa chỉ email không hợp lệ: {0}',
   'attachmentMissing'    => 'Không thể định vị tệp đính kèm email sau: {0}',
   'attachmentUnreadable' => 'Không thể mở tệp đính kèm này: {0}',
   'noFrom'               => 'Không thể gửi thư mà không có "From" header.',
   'noRecipients'         => 'Bạn phải bao gồm người nhận: To, Cc, or Bcc',
   'sendFailurePHPMail'   => 'Không thể gửi email bằng PHP mail(). Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
   'sendFailureSendmail'  => 'Không thể gửi email bằng PHP Sendmail. Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
   'sendFailureSmtp'      => 'Không thể gửi email bằng PHP SMTP. Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
   'sent'                 => 'Tin nhắn của bạn đã được gửi thành công bằng giao thức sau: {0}',
   'noSocket'             => 'Không thể mở ổ cắm cho Sendmail. Vui lòng kiểm tra cài đặt.',
   'noHostname'           => 'Bạn đã không chỉ định tên máy chủ SMTP.',
   'SMTPError'            => 'Đã xảy ra lỗi SMTP sau đây: {0}',
   'noSMTPAuth'           => 'Lỗi: Bạn phải chỉ định tên người dùng và mật khẩu SMTP.',
   'failedSMTPLogin'      => 'Không thể gửi lệnh AUTH LOGIN. Lỗi: {0}',
   'SMTPAuthUsername'     => 'Không thể xác thực tên người dùng. Lỗi: {0}',
   'SMTPAuthPassword'     => 'Không thể xác thực mật khẩu. Lỗi: {0}',
   'SMTPDataFailure'      => 'Không thể gửi dữ liệu: {0}',
   'exitStatus'           => 'Exit status code: {0}',
];
