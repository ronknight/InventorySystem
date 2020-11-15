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
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => '환경 설정에서 반드시 원본 이미지가 지정되어야 합니다.', // 'You must specify a source image in your preferences.',
   'gdRequired'             => '이 기능을 사용하려면 GD image 라이브러리가 필요합니다.', // 'The GD image library is required to use this feature.',
   'gdRequiredForProps'     => '이미지의 속성을 확인하려면 서버에서 GD image 라이브러리가 지원되어야 합니다.', // 'Your server must support the GD image library in order to determine the image properties.',
   'gifNotSupported'        => 'GIF 이미지들은 라이선스 제한으로 지원되지 않는 경우가 많습니다. GIF 이미지 대신에 JPG 또는 PNG 형식의 이미지를 사용할 수도 있을 것입니다.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
   'jpgNotSupported'        => 'JPG 이미지들은 지원되지 않습니다.', // 'JPG images are not supported.',
   'pngNotSupported'        => 'PNG 이미지들은 지원되지 않습니다.', // 'PNG images are not supported.',
   'fileNotSupported'       => '제공된 파일은 지원하지 않는 이미지 타입입니다.', // 'The supplied file is not a supported image type.',
   'unsupportedImageCreate' => '이 형식의 이미지를 처리하기 위해서 필요한 GD 함수가 서버에서 지원되지 않습니다.', // 'Your server does not support the GD function required to process this type of image.',
   'jpgOrPngRequired'       => '환경 설정에 명시된 이미지 크기 조절 프로토콜은 JPEG 또는 PNG 타입의 이미지만 조절할 수 있습니다.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
   'rotateUnsupported'      => '서버에서 이미지 회원을 지원하지 않는 것 같습니다.', // 'Image rotation does not appear to be supported by your server.',
   'libPathInvalid'         => '이미지 라이브러리 경로가 올바르지 않습니다. 올바른 경로를 이미지 환경설정에서 설정하여 주십시오. {0, string)', // 'The path to your image library is not correct. Please set the correct path in your image preferences. {0, string)',
   'imageProcessFailed'     => '이미지 처리 실패. 이미지 라이브러리의 경로가 올바르게 설정되어있는, 선택한 프로토콜이 서버에서 지원하도록 확인하여 주십시오.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
   'rotationAngleRequired'  => '이미지를 회전시키기 위해서 회전 각도가 필요합니다.', // 'An angle of rotation is required to rotate the image.',
   'invalidPath'            => '이미지 경로가 올바르지 않습니다.', // 'The path to the image is not correct.',
   'copyFailed'             => '해당 이미지의 복사 루틴이 실패했습니다.', // 'The image copy routine failed.',
   'missingFont'            => '이미지 처리에서 사용되는 폰트를 찾을 수 없습니다.', // 'Unable to find a font to use.',
   'saveFailed'             => '파일을 저장할 수 없습니다. 해당 이미지 및 파일 디렉터리에 쓸 수 있도록 해주십시오.', // 'Unable to save the image. Please make sure the image and file directory are writable.',
   'invalidDirection'       => '젖힌 방향은 가로 또는 세로 방향만 가능합니다. 제공: {0}', // 'Flip direction can be only `vertical` or `horizontal`. Given: {0}',
   'exifNotSupported'       => '해당 PHP 설치에서는 EXIF 데이터를 읽을 수 있도록 지원되지 않습니다.', //'Reading EXIF data is not supported by this PHP installation.',
];
