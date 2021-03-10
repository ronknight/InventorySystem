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
 * @author     Shoji Ogura
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => '環境設定でソース画像を指定する必要があります。', //You must specify a source image in your preferences.
   'gdRequired'             => 'この機能を利用するにはGDイメージライブラリが必要です。', //The GD image library is required to use this feature.
   'gdRequiredForProps'     => 'イメージのプロパティを決定するためには、サーバがGDイメージライブラリをサポートしている必要があります。', //Your server must support the GD image library in order to determine the image properties.
   'gifNotSupported'        => 'ライセンスの制限により、GIF画像はサポートされないことがよくあります。代わりに JPG または PNG 画像を使用する必要があるかもしれません。', //GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.
   'jpgNotSupported'        => 'JPG画像には対応していません。', //JPG images are not supported.
   'pngNotSupported'        => 'PNG画像には対応していません。', //PNG images are not supported.
   'fileNotSupported'       => '与えられたファイルはサポートされている画像の種類ではありません。', //The supplied file is not a supported image type.
   'unsupportedImageCreate' => 'お使いのサーバーは、このタイプの画像を処理するために必要なGDファンクションをサポートしていません。', //Your server does not support the GD function required to process this type of image.
   'jpgOrPngRequired'       => '環境設定で指定された画像サイズ変更プロトコルは、JPEGまたはPNG画像でのみ動作します。', //The image resize protocol specified in your preferences only works with JPEG or PNG image types.
   'rotateUnsupported'      => 'お使いのサーバーでは、画像の回転はサポートされていないようです。', //Image rotation does not appear to be supported by your server.
   'libPathInvalid'         => 'イメージライブラリのパスが正しくありません。画像環境設定で正しいパスを設定してください。 {0}', //The path to your image library is not correct. Please set the correct path in your image preferences. {0, string) ← {0, string) is typo?
   'imageProcessFailed'     => '画像処理に失敗しました。サーバーが選択したプロトコルをサポートしていること、およびイメージライブラリへのパスが正しいことを確認してください。', //Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.
   'rotationAngleRequired'  => '画像を回転させるには回転角度を指定してください。', //An angle of rotation is required to rotate the image.
   'invalidPath'            => '画像へのパスが正しくありません。', //The path to the image is not correct.
   'copyFailed'             => '画像コピールーチンが失敗しました。', //The image copy routine failed.
   'missingFont'            => '使用するフォントが見つかりません。', //Unable to find a font to use.
   'saveFailed'             => '画像を保存できません。画像とファイルディレクトリが書き込み可能であることを確認してください。', //Unable to save the image. Please make sure the image and file directory are writable.
   'invalidDirection'       => 'フリップの方向は `vertical` と `horizontal` のどちらか一方のみを指定することができます。値: {0}', //Flip direction can be only `vertical` or `horizontal`. Given: {0}
   'exifNotSupported'       => 'EXIFデータの読み込みは、このPHPのインストールではサポートされていません。', //Reading EXIF data is not supported by this PHP installation.
];
