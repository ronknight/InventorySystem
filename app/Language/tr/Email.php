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
	'mustBeArray'          => 'Email doğrulama işlevine bir dizi verilmeli.',
	'invalidAddress'       => 'Geçersiz email adresi: {0}',
	'attachmentMissing'    => 'Email eklentisi bulunamadı: {0}',
	'attachmentUnreadable' => 'Email eklentisi açılamadı: {0}',
	'noFrom'               => '"From" başlığı olmadan email gönderilemez.',
	'noRecipients'         => 'Alıcıları belirtmelisiniz: To, Cc, veya Bcc',
	'sendFailurePHPMail'   => 'PHP mail() yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
	'sendFailureSendmail'  => 'PHP Sendmail yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
	'sendFailureSmtp'      => 'PHP SMTP yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
	'sent'                 => 'Mesajınız {0} protokolü kullanılarak başarıyla gönderildi.',
	'noSocket'             => 'Sendmail soketi açılamıyor. Lütfen ayarlarınızı kontrol edin.',
	'noHostname'           => 'SMTP sunucu adı belirtmeniz gerekiyor.',
	'SMTPError'            => 'SMTP hatası alındı: {0}',
	'noSMTPAuth'           => 'Hata: SMTP kullanıcı adı ve şifre belirtmelisiniz.',
	'failedSMTPLogin'      => 'AUTH LOGIN komutu gönderilemedi. Hata: {0}',
	'SMTPAuthUsername'     => 'Kullanıcı adı hatalı. Hata: {0}',
	'SMTPAuthPassword'     => 'Şifre hatalı Hata: {0}',
	'SMTPDataFailure'      => 'Veri gönderilemedi: {0}',
	'exitStatus'           => 'Çıkış kodu: {0}',
];
