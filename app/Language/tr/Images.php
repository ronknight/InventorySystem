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
	'sourceImageRequired'    => 'Tercihlerinizde bir kaynak resim belirtmelisiniz.',
	'gdRequired'             => 'Bu özelliği kullanabilmek için GD resim kütüphanesi gerekli.',
	'gdRequiredForProps'     => 'Resmin özelliklerini belirleyebilmek için sunucunuzun GD resim kütüphanesini desteklemesi gerekir.',
	'gifNotSupported'        => 'GIF resimleri lisans sınırlamaları nedeniyle genellikle desteklenmez. Bunun yerine JPG veya PNG resimler kullanabilirsiniz.',
	'jpgNotSupported'        => 'JPG resimler desteklenmiyor.',
	'pngNotSupported'        => 'PNG resimler desteklenmiyor.',
	'unsupportedImageCreate' => 'Sunucunuz bu tür resmi işlemek için gerekli GD fonksiyonunu desteklemiyor.',
	'jpgOrPngRequired'       => 'Tercihlerinizde belirttiğiniz resim boyutlandırma protokolü yalnız JPEG veya PNG resim türleriyle çalışır.',
	'rotateUnsupported'      => 'Resim döndürme sunucunuz tarafından desteklenmiyor.',
	'libPathInvalid'         => 'Resim kütüphanesi yolu doğru değil. Lütfen resim tercihlerinizde doğru yolu belirtiniz. {0, string)',
	'imageProcessFailed'     => 'Resim işleme başarısız. Lütfen sunucunuzun seçilen protokolü desteklediğini resim kütüphanesi yolunun doğru olduğunu kontrol ediniz.',
	'rotationAngleRequired'  => 'Resmi döndürebilmek için bir döndürme açısı belirtilmeli.',
	'invalidPath'            => 'Resmin yolu doğru değil.',
	'copyFailed'             => 'Resim kopyalama işlemi başarısız.',
	'missingFont'            => 'Kullanılacak bir yazıtipi bulunamadı.',
	'saveFailed'             => 'Resim kaydedilemedi. Resim dosyasının ve klasörün yazılabilir olduğundan emin olunuz.',
	'invalidDirection'       => 'Çevirme yönü yalnızca `vertical` veya `horizontal` olabilir. Verilen: {0}',
	'exifNotSupported'       => 'Reading EXIF verisi okuma işlemi bu PHP kurulumunda desteklenmiyor.',
];
