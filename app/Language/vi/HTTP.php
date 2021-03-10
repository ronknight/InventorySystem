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
	// CurlRequest
   'missingCurl'                => 'CURL phải được kích hoạt để sử dụng class CURLRequest.',
   'invalidSSLKey'              => 'Không thể đặt Khóa SSL. {0} không phải là một tệp hợp lệ.',
   'sslCertNotFound'            => 'Chứng chỉ SSL không được tìm thấy tại: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} không phải là một loại trao đổi hợp lệ. Loại của nó chỉ có thể là một trong những thứ sau đây: phương tiện (media), bảng mã (charset), mã hóa (encoding) hoặc ngôn ngữ (language).',

	// Message
   'invalidHTTPProtocol'        => 'Phiên bản giao thức HTTP không hợp lệ. Phải là một trong: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Bạn phải cung cấp một loạt các giá trị được hỗ trợ cho tất cả các Cuộc đàm phán.',

	// RedirectResponse
   'invalidRoute'               => '{0} route không thể được tìm thấy trong khi định tuyến ngược.',

	// DownloadResponse
   'cannotSetBinary'            => 'Cài đặt đường dẫn tập tin không thể đặt binary.',
   'cannotSetFilepath'          => 'Cài đặt binary không thể đặt đường dẫn tệp: {0}',
   'notFoundDownloadSource'     => 'Không tìm thấy nguồn tải nội dung.',
   'cannotSetCache'             => 'Nó không hỗ trợ bộ nhớ đệm để tải xuống.',
   'cannotSetStatusCode'        => 'Nó không hỗ trợ thay đổi mã trạng thái để tải xuống. mã: {0}, lý do: {1}',

	// Response
   'missingResponseStatus'      => 'Phản hồi HTTP thiếu mã trạng thái',
   'invalidStatusCode'          => '{0} trả về mã trạng thái HTTP không hợp lệ',
   'unknownStatusCode'          => 'Không có mã trạng thái HTTP nào được cung cấp hoặc không xác định: {0}',

	// URI
   'cannotParseURI'             => 'Không thể phân tích cú pháp URI: {0}',
   'segmentOutOfRange'          => 'URI được yêu cầu nằm ngoài phạm vi: {0}',
   'invalidPort'                => 'Số cổng phải nằm trong khoảng từ 0 đến 65535, hiện tại là: {0}',
   'malformedQueryString'       => 'Chuỗi truy vấn có thể không chứa các đoạn URI.',

	// Page Not Found
   'pageNotFound'               => 'Các trang được chỉ định không được tìm thấy.',
   'emptyController'            => 'Không có Controler được chỉ định. ',
   'controllerNotFound'         => 'Không thể tìm thấy Controler hoặc phương thức:{0}::{1}',
   'methodNotFound'             => 'Không có cách nào để tìm Controler: {0}',

	// CSRF
   'disallowedAction'           => 'Hành động bạn yêu cầu không được phép.',

	// Uploaded file moving
   'alreadyMoved'               => 'Các tập tin tải lên đã được di chuyển.',
   'invalidFile'                => 'Tệp gốc không phải là tệp hợp lệ.',
   'moveFailed'                 => 'Không thể di chuyển tệp {0} sang {1} ({2})',

   'uploadErrOk'                => 'Các tập tin được tải lên thành công.',
   'uploadErrIniSize'           => 'Tệp "%s" vượt quá cấu hình upload_max_filesize ini của bạn.',
   'uploadErrFormSize'          => 'Tệp "%s" vượt quá giới hạn tải lên được xác định trong biểu mẫu của bạn.',
   'uploadErrPartial'           => 'Tệp "%s" chỉ được tải lên một phần.',
   'uploadErrNoFile'            => 'Không có tập tin nào được tải lên.',
   'uploadErrCantWrite'         => 'Không thể ghi tệp "%s" trên đĩa.',
   'uploadErrNoTmpDir'          => 'Không thể tải lên tệp: thiếu thư mục tạm thời.',
   'uploadErrExtension'         => 'Tải lên tệp đã bị dừng bởi một extension PHP.',
   'uploadErrUnknown'           => 'Tệp "%s" không được tải lên do lỗi không xác định.',
];
