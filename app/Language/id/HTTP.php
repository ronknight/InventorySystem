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
	'missingCurl'                => 'CURL harus diaktifkan untuk menggunakan kelas CURLRequest.',
	'invalidSSLKey'              => 'Tidak dapat mengatur Kunci SSL. {0} bukan sebuah berkas yang valid.',
	'sslCertNotFound'            => 'Sertifikat SSL tidak ditemukan di: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} bukan sebuah jenis negosiasi yang valid. Harus salah satu: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'Versi Protokol HTTP Tidak Valid. Harus salah satu: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Anda harus memberikan sebuah array dari nilai yang didukung untuk semua Negosiasi.',

	// RedirectResponse
	'invalidRoute'               => '{0} bukan sebuah rute yang valid.',

	// DownloadResponse
	'cannotSetBinary'            => 'Saat mengatur filepath, tidak dapat mengatur binary.',
	'cannotSetFilepath'          => 'Saat mengatur binary, tidak dapat mengatur filepath: {0}',
	'notFoundDownloadSource'     => 'Tidak ditemukan badan sumber unduhan.',
	'cannotSetCache'             => 'Itu tidak mendukung cache untuk mengunduh.',
	'cannotSetStatusCode'        => 'Itu tidak mendukung perubahan kode status untuk mengunduh. kode: {0}, alasan: {1}',

	// Response
	'missingResponseStatus'      => 'Tanggapan HTTP kehilangan sebuah kode status',
	'invalidStatusCode'          => '{0} bukan sebuah kode status pengembalian HTTP yang valid',
	'unknownStatusCode'          => 'Kode status HTTP tidak dikenal diberikan tanpa pesan: {0}',

	// URI
	'cannotParseURI'             => 'Tidak dapat mengurai URI: {0}',
	'segmentOutOfRange'          => 'Permintaan segmen URI berada di luar jangkauan: {0}',
	'invalidPort'                => 'Port harus antara 0 dan 65535. Diberikan: {0}',
	'malformedQueryString'       => 'String kueri tidak boleh menyertakan fragmen URI.',

	// Page Not Found
	'pageNotFound'               => 'Halaman Tidak Ditemukan',
	'emptyController'            => 'Tidak ada Controller yang ditentukan.',
	'controllerNotFound'         => 'Controller atau metodenya tidak ditemukan: {0}::{1}',
	'methodNotFound'             => 'Metode controller tidak ditemukan: {0}',

	// CSRF
	'disallowedAction'           => 'Tindakan yang Anda minta tidak diizinkan.',

	// Uploaded file moving
	'alreadyMoved'				 => 'Berkas yang diunggah telah dipindahkan.',
	'invalidFile'				 => 'Berkas asli tersebut bukan berkas yang valid.',
	'moveFailed'				 => 'Tidak dapat memindahkan berkas {0} ke {1} ({2})',

	'uploadErrOk'                => 'Berkas berhasil diunggah.',
	'uploadErrIniSize'           => 'Berkas "%s" melampaui pengaturan upload_max_filesize Anda.',
	'uploadErrFormSize'          => 'Berkas "%s" melampaui batas unggahan yang ditentukan pada formulir Anda.',
	'uploadErrPartial'           => 'Berkas "%s" hanya sebagian yang terunggah.',
	'uploadErrNoFile'            => 'Tidak ada berkas yang terunggah.',
	'uploadErrCantWrite'         => 'Berkas "%s" tidak dapat ditulis pada diska.',
	'uploadErrNoTmpDir'          => 'Berkas tidak dapat diunggah: direktori sementara tidak ditemukan.',
	'uploadErrExtension'         => 'Unggahan berkas dihentikan oleh ekstensi PHP.',
	'uploadErrUnknown'           => 'Berkas "%s" tidak terunggah karena kesalahan yang tidak diketahui.',
];
