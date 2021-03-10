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
   'sourceImageRequired'    => '您必須在偏好設定中（preferences）指定來源圖像。',
   'gdRequired'             => '使用這個功能需要 GD image 程式庫。',
   'gdRequiredForProps'     => '你的伺服器必須支援 GD image 程式庫才能獲取圖像屬性。',
   'gifNotSupported'        => '由於授權限制，GIF 圖像通常不支援，您可能得使用 JPG 與PNG 圖像。',
   'jpgNotSupported'        => '不支援 JPG 圖像。',
   'pngNotSupported'        => '不支援 PNG 圖像。',
   'unsupportedImageCreate' => '你的伺服器不支援處理此類圖像所需的GD功能。',
   'jpgOrPngRequired'       => '在偏好設定中（preferences）調整圖像大小的功能僅適用於 JPEG 與 PNG 圖像。',
   'rotateUnsupported'      => '伺服器似乎不支援圖像旋轉。',
   'libPathInvalid'         => 'image 程式庫的路徑不正確，請在圖像的偏好設定中（preferences）設定正確的路徑。 {0, string)',
   'imageProcessFailed'     => '圖像處理失敗，請確定您的伺服器支援您所選擇的協議，並且 image 程式庫所設定的路徑正確。',
   'rotationAngleRequired'  => '您必須設定旋轉角度才能執行旋轉圖像功能。',
   'invalidPath'            => '圖像的路徑不正確。',
   'copyFailed'             => '圖像複製失敗。',
   'missingFont'            => '找不到您所設定的字體。',
   'saveFailed'             => '儲存圖像失敗，請確定圖像和檔案目錄允許寫入。',
   'invalidDirection'       => '圖像翻轉方向只能是 `vertical` 或 `horizontal` 。 目前的值為： {0}',
   'exifNotSupported'       => 'PHP環境不支援讀取EXIF資料。',
];
