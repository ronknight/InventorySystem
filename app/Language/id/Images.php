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
	'sourceImageRequired'    => 'Anda harus menentukan sebuah sumber gambar dalam preferensi Anda.',
	'gdRequired'             => 'Pustaka gambar GD diperlukan untuk menggunakan fitur ini....',
	'gdRequiredForProps'     => 'Server Anda harus mendukung pustaka gambar GD untuk menentukan properti gambar.',
	'gifNotSupported'        => 'Gambar GIF sering tidak didukung karena pembatasan perizinan. Anda mungkin harus menggunakan gambar JPG atau PNG sebagai gantinya.',
	'jpgNotSupported'        => 'Gambar JPG tidak didukung.',
	'pngNotSupported'        => 'Gambar PNG tidak didukung.',
	'unsupportedImageCreate' => 'Server Anda tidak mendukung fungsi GD yang diperlukan untuk memproses jenis gambar ini.',
	'jpgOrPngRequired'       => 'Protokol pengubahan ukuran gambar yang ditentukan dalam preferensi Anda hanya berfungsi dengan jenis gambar JPEG atau PNG.',
	'rotateUnsupported'      => 'Rotasi gambar sepertinya tidak didukung oleh server Anda.',
	'libPathInvalid'         => 'Jalur ke pustaka gambar Anda tidak benar. Silakan mengatur jalur yang benar dalam preferensi gambar Anda. {0, string)',
	'imageProcessFailed'     => 'Pemrosesan gambar gagal. Harap verifikasi bahwa server Anda mendukung protokol yang dipilih dan jalur ke pustaka gambar Anda sudah benar.',
	'rotationAngleRequired'  => 'Sudut rotasi diperlukan untuk memutar gambar.',
	'invalidPath'            => 'Jalur menuju gambar tidak benar.',
	'copyFailed'             => 'Salinan gambar gagal.',
	'missingFont'            => 'Tidak dapat menemukan sebuah huruf untuk digunakan.',
	'saveFailed'             => 'Tidak dapat menyimpan gambar. Pastikan gambar dan direktori berkas dapat ditulis.',
	'invalidDirection'       => 'Arah balik hanya bisa `vertical` atau `horizontal`. Diberikan: {0}',
	'exifNotSupported'       => 'Membaca data EXIF tidak didukung oleh instalasi PHP ini.',
];
