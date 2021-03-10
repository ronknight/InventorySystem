<?php

/**
 * surel language strings.
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
	'mustBeArray'          => 'Metode validasi surel harus melewati sebuah array.',
	'invalidAddress'       => 'Alamat surel tidak valid: {0}',
	'attachmentMissing'    => 'Tidak dapat menemukan lampiran surel berikut: {0}',
	'attachmentUnreadable' => 'Tidak dapat membuka lampiran ini: {0}',
	'noFrom'               => 'Tidak dapat mengirim surel tanpa kepala "Dari".',
	'noRecipients'         => 'Anda harus menyertakan penerima: Kepada, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Tidak dapat mengirim surel menggunakan PHP mail(). Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sendFailureSendmail'  => 'Tidak dapat mengirim surel menggunakan PHP Sendmail. Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sendFailureSmtp'      => 'Tidak dapat mengirim surel menggunakan PHP SMTP. Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sent'                 => 'Pesan Anda telah berhasil dikirim menggunakan protokol berikut: {0}',
	'noSocket'             => 'Tidak dapat membuka sebuah soket ke Sendmail. Silakan periksa pengaturan.',
	'noHostname'           => 'Anda tidak menentukan sebuah nama host SMTP.',
	'SMTPError'            => 'Kesalahan SMTP berikut ditemukan: {0}',
	'noSMTPAuth'           => 'Kesalahan: Anda harus menetapkan sebuah nama pengguna dan kata sandi SMTP.',
	'failedSMTPLogin'      => 'Gagal mengirim perintah AUTH LOGIN. Kesalahan: {0}',
	'SMTPAuthUsername'     => 'Gagal mengautentikasi nama pengguna. Kesalahan: {0}',
	'SMTPAuthPassword'     => 'Gagal mengautentikasi kata sandi. Kesalahan: {0}',
	'SMTPDataFailure'      => 'Tidak dapat mengirim data: {0}',
	'exitStatus'           => 'Kode status keluar: {0}',
];
