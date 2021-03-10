<?php

/**
 * Migration language strings.
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
	// Migration Runner
	'missingTable'    => 'Tabel migrasi harus diatur.',
//	'invalidType'     => 'Jenis penomoran migrasi tidak valid telah ditentukan: {0}',
	'disabled'        => 'Migrasi telah dimuat tetapi dinonaktifkan atau pengaturan salah.',
	'notFound'        => 'Berkas migrasi tidak ditemukan: ',
	'batchNotFound'     => 'Sejumlah target tidak ditemukan: ',
	'empty'           => 'Tidak ditemukan berkas Migrasi',
	'gap'             => 'Ada sebuah celah dalam urutan migrasi dekat nomor versi: ',
	'classNotFound'   => 'Kelas migrasi "%s" tidak dapat ditemukan.',
	'missingMethod'   => 'Kelas migrasi kehilangan metode "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigrasi basis data ke migrasi terbaru yang tersedia.",
	'migHelpCurrent'  => "\t\tMigrasi basis data ke versi yang ditetapkan sebagai 'saat ini' dalam konfigurasi.",
	'migHelpVersion'  => "\tMigrasi basis data ke versi {v}.",
	'migHelpRollback' => "\tMenjalankan semua migrasi 'turun' ke versi 0.",
	'migHelpRefresh'  => "\t\tUninstal dan jalankan kembali semua migrasi untuk menyegarkan basis data.",
	'migHelpSeed'     => "\tMenjalankan seeder bernama [name].",
	'migCreate'       => "\tMenciptakan sebuah nama migrasi baru bernama [name]",
	'nameMigration'   => 'Beri nama berkas migrasi',
	'badCreateName'   => 'Anda harus memberikan sebuah nama berkas migrasi.',
	'writeError'      => 'Kesalahan saat mencoba membuat berkas.',
	'migNumberError'    => 'Nomor migrasi harus tiga digit dan tidak boleh ada jarak pada urutan.',

	'latest'            => 'Menjalankan semua migrasi baru...',
	'generalFault'      => 'Migrasi gagal!',
//	'toLatest'          => 'Migrasi ke versi terbaru...',
	'migInvalidVersion' => 'Nomor versi tidak valid diberikan.',
	'toVersionPH'       => 'Migrasi ke versi %s...',
	'toVersion'         => 'Migrasi ke versi saat ini...',
	'rollingBack'       => 'Mengembalikan semua migrasi...',
	'noneFound'         => 'Tidak ada migrasi yang ditemukan.',
	'on'                => 'Dimigrasi Pada: ',
	'migSeeder'         => 'Nama seeder',
	'migMissingSeeder'  => 'Anda harus memberikan sebuah nama seeder.',
	'removed'           => 'Mengembalikan: ',
	'added'             => 'Berjalan: ',

	'version'           => 'Versi',
	'filename'          => 'Nama berkas',
];
