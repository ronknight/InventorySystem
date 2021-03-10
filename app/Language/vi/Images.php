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
 * @author     XuanDung38 (Fox)
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Hình ảnh gốc phải được chỉ định. ',
   'gdRequired'             => 'Thư viện hình ảnh GD được yêu cầu để sử dụng tính năng này.',
   'gdRequiredForProps'     => 'Máy chủ của bạn phải hỗ trợ thư viện hình ảnh GD để xác định các thuộc tính hình ảnh.',
   'gifNotSupported'        => 'Hình ảnh GIF thường không được hỗ trợ do hạn chế cấp phép. Bạn có thể phải sử dụng hình ảnh JPG hoặc PNG thay thế.',
   'jpgNotSupported'        => 'JPG hình ảnh không được hỗ trợ.',
   'pngNotSupported'        => 'PNG hình ảnh không được hỗ trợ.',
   'fileNotSupported'       => 'Tệp được cung cấp không phải là loại hình ảnh được hỗ trợ.',
   'unsupportedImageCreate' => 'Máy chủ của bạn không hỗ trợ chức năng GD cần thiết để xử lý loại hình ảnh này.',
   'jpgOrPngRequired'       => 'Giao thức thay đổi kích thước hình ảnh được chỉ định trong tùy chọn của bạn chỉ hoạt động với các loại hình ảnh JPEG hoặc PNG.',
   'rotateUnsupported'      => 'Xoay hình ảnh dường như không được máy chủ của bạn hỗ trợ.',
   'libPathInvalid'         => 'Đường dẫn đến thư viện hình ảnh của bạn không chính xác. Vui lòng đặt đường dẫn chính xác trong tùy chọn hình ảnh của bạn.{0, string)',
   'imageProcessFailed'     => 'Xử lý ảnh thất bại. Vui lòng xác minh rằng máy chủ của bạn hỗ trợ giao thức đã chọn và đường dẫn đến thư viện hình ảnh của bạn là chính xác.',
   'rotationAngleRequired'  => 'Xoay hình ảnh yêu cầu góc xoay.',
   'invalidPath'            => 'Đường dẫn đến hình ảnh không chính xác.',
   'copyFailed'             => 'Sao chép hình ảnh thất bại.',
   'missingFont'            => 'Không thể tìm thấy phông chữ để sử dụng.',
   'saveFailed'             => 'Không thể lưu hình ảnh. Hãy chắc chắn rằng thư mục hình ảnh và tập tin có thể ghi.',
   'invalidDirection'       => 'Hướng lật chỉ có thể là `dọc` hoặc` ngang`. Đã nhập: {0}',
   'exifNotSupported'       => 'Môi trường PHP không hỗ trợ đọc dữ liệu EXIF ​​cho hình ảnh.',
];
