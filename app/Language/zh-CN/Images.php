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
   'sourceImageRequired'    => '必须制定原始图片。',
   'gdRequired'             => 'GD 图像类需要使用此功能。',
   'gdRequiredForProps'     => '服务器必须支持 GD 图像类才能获取图片信息。',
   'gifNotSupported'        => '因为授权限制，通常不支持 GIF 图像。需要使用 JPG 或 PNG 图片。',
   'jpgNotSupported'        => '不支持 JPG 图片。',
   'pngNotSupported'        => '不支持 PNG 图片。',
   'unsupportedImageCreate' => '服务器不支持处理此图片所需的 GD 库。',
   'jpgOrPngRequired'       => '调整图片大小仅适用于 PNG 或 JPG 图片。',
   'rotateUnsupported'      => '服务器似乎不支持图片旋转。',
   'libPathInvalid'         => '图片库路径不正确，请设置正确的路径。{0, string)',
   'imageProcessFailed'     => '图片处理失败，请确定服务器是否支持已选的协议，以及图片处理库的路径是否正确。',
   'rotationAngleRequired'  => '宣传图片操作需要设置旋转角度。',
   'invalidPath'            => '图片路径不正确。',
   'copyFailed'             => '图片复制失败。',
   'missingFont'            => '无法找到要使用的字体。',
   'saveFailed'             => '无法保存图片，请确认图片和文件目录是可写的。',
   'invalidDirection'       => '图片旋转方向只能是 `vertical` 或 `horizontal`，现在是: {0}',
   'exifNotSupported'       => 'PHP 环境不支持读取图片的 EXIF 数据。',
];
