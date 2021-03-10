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
	'missingTable'    => 'Göç tablosu belirtilmeli.',
//	'invalidType'     => 'Geçersiz göç numaralama türü: {0}',
	'disabled'        => 'Göçler yüklendi fakat etkinleştirilmedi veya yanlış kuruldu.',
	'notFound'        => 'Göç dosyası bulunamadı: ',
	'batchNotFound'     => 'Target batch not found: ',
	'empty'           => 'Herhangi bir göç dosyası bulunamadı.',
	'gap'             => 'Göç kuyruğunda şu sürüm numarası yakınında bir boşluk var: ',
	'classNotFound'   => 'Göç sınıfı "%s" bulunamadı.',
	'missingMethod'   => 'Göç sınıfının "%s" metodu eksik.',

	// Migration Command
	'migHelpLatest'   => "\t\tVeri tabanını son göç sürümüne taşır.",
	'migHelpCurrent'  => "\t\tVeri tabınını ayarlarda 'current' (mevcut) olarak belirtilen sürüme taşır.",
	'migHelpVersion'  => "\tVeri tabanını {v} şu sürümüne taşır.",
	'migHelpRollback' => "\tTüm göçleri 0 sürümüne indirir.",
	'migHelpRefresh'  => "\t\tVeri tabanını yenilemek için tüm göçleri kaldırır ve yeniden çalıştırır.",
	'migHelpSeed'     => "\t[name] isimli tohumlayıcıyı çalıştırır.",
	'migCreate'       => "\t[name] isimli yeni bir göç oluşturur.",
	'nameMigration'   => 'Göç dosyasına bir isim verin.',
	'badCreateName'   => 'Bir göç dosyası adı belirtmelisiniz.',
	'writeError'      => 'Yazma hatası nedeniyle dosya oluşturulamadı.',

//	'toLatest'          => 'Son sürüme göçülüyor...',
	'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',
	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
	'migInvalidVersion' => 'Geçersiz sürüm numarası belirtildi.',
	'toVersionPH'       => '%s sürümüne göçülüyor...',
	'toVersion'         => 'Mevcut sürüme göçülüyor....',
	'rollingBack'       => 'Tüm göçler geri alınıyor...',
	'noneFound'         => 'Herhangi bir göç bulunamadı.',
	'on'                => 'Göçüldü: ',
	'migSeeder'         => 'Tohumlayıcı adı',
	'migMissingSeeder'  => 'Tohumlayıcı adı belirtmelisiniz.',
	'removed'           => 'Geri alınıyor: ',
	'added'             => 'Çalıştırılıyor: ',

	'version'           => 'Sürüm',
	'filename'          => 'Dosya adı',
];
