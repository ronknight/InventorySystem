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
	// CurlRequest
   'missingCurl'                => '必須啟動 CURL 才可以使用 CURLRequest 類別。',
   'invalidSSLKey'              => '無法設定 SSL Key。 {0} 這是一個無效的檔案。',
   'sslCertNotFound'            => '找不到 SSL 證書: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} 不是有效的內容協商。其類型只能是下列之一：媒體（media）、字元集（charset）、編碼（encoding）或語言（language）。',

	// Message
   'invalidHTTPProtocol'        => '無效的HTTP協議版本，其版本只能是下列之一： {0}',

	// Negotiate
   'emptySupportedNegotiations' => '您必須以陣列的形式，替所有協商（Negotiation）提供支持的值。',

	// RedirectResponse
   'invalidRoute'               => '執行反向路由（reverse-routing）時找不到 {0} 此路由',

	// DownloadResponse
   'cannotSetBinary'            => '設定文件路徑時不能設定成二進制。',
   'cannotSetFilepath'          => '設定二進位時無法設定成文件路徑：{0}',
   'notFoundDownloadSource'     => '找不到下載的內容源。',
   'cannotSetCache'             => '不支援下載快取。',
   'cannotSetStatusCode'        => '不支持下載時更改狀態碼。 狀態碼: {0}, 原因: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP 響應（Response）缺少狀態碼。',
   'invalidStatusCode'          => '{0} 不是有效的HTTP回傳狀態碼。',
   'unknownStatusCode'          => '未知的HTTP狀態碼或未提供消息: {0}',

	// URI
   'cannotParseURI'             => '無法解析 URI: {0}',
   'segmentOutOfRange'          => '請求的 URI 長度超過範圍: {0}',
   'invalidPort'                => '連接埠必須在 0 到 65535 之間。目前的值為: {0}',
   'malformedQueryString'       => '所查訊的字串可能不包含 URI 片段。',

	// Page Not Found
   'pageNotFound'               => '找不到頁面。',
   'emptyController'            => '未指定控制器。',
   'controllerNotFound'         => '找不到任何控制器或方法： {0}::{1}',
   'methodNotFound'             => '找不到控制器中的方法： {0}',

	// CSRF
   'disallowedAction'           => '您請求的操作是不允許的。',

	// Uploaded file moving
   'alreadyMoved'               => '所上傳的文件已經被移動。',
   'invalidFile'                => '原始文件並非有效文件。',
   'moveFailed'                 => '無法將檔案由 {0} 移動至 {1} ({2})',

   'uploadErrOk'                => '檔案上傳成功。',
   'uploadErrIniSize'           => '檔案 "%s" 超出了您在 php.ini 中所設定的 upload_max_filesize 大小。',
   'uploadErrFormSize'          => '檔案 "%s" 超出了您在 php.ini 中所設定的表單檔案上傳大小。',
   'uploadErrPartial'           => '檔案 "%s" 僅部分上傳成功。',
   'uploadErrNoFile'            => '沒有任何上傳文件。',
   'uploadErrCantWrite'         => '檔案 "%s" 無法寫入到磁碟。',
   'uploadErrNoTmpDir'          => '無法上傳檔案：缺少暫存資料夾',
   'uploadErrExtension'         => '檔案上傳被停止，因為被PHP擴充元件停止。',
   'uploadErrUnknown'           => '檔案 "%s" 因為未知的錯誤上傳失敗。',
];
