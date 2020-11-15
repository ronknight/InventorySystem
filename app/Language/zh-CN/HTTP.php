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
   'missingCurl'                => '必须启用 CURL 才能使用 CURLRequest 工具类。',
   'invalidSSLKey'              => '无法设置 SSL 密钥。 {0} 不是一个有效的密钥文件。',
   'sslCertNotFound'            => '找不到 SSL 证书: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} 不是有效的内容协商。必须是以下内容之一: media, charset, encoding, language。',

	// Message
   'invalidHTTPProtocol'        => '无效的 HTTP 协议版本，必须是以下内容之一: {0}',

	// Negotiate
   'emptySupportedNegotiations' => '必须为所有协商（Negotiation）提供一组受支持的值。',

	// RedirectResponse
   'invalidRoute'               => '反向路由时，无法找到{0} 路由。',

	// DownloadResponse
   'cannotSetBinary'            => '设置为文件路径时，无法设置为二进制。',
   'cannotSetFilepath'          => '设置为二进制时，无法设置文件路径: {0}',
   'notFoundDownloadSource'     => '无法找到下载内容源。',
   'cannotSetCache'             => '不支持下载缓存。',
   'cannotSetStatusCode'        => '不支持下载时更改状态代码，状态码: {0}， 原因: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP 响应缺少状态码。',
   'invalidStatusCode'          => '{0} 不是有效的返回状态码。',
   'unknownStatusCode'          => '未提供 HTTP 状态码或状态码未知: {0}',

	// URI
   'cannotParseURI'             => '无法解析 URI: {0}',
   'segmentOutOfRange'          => '请求的 URI 超出范围: {0}',
   'invalidPort'                => '端口号必须在 0 至 65535 之间，现在是: {0}',
   'malformedQueryString'       => '查询的字符串可能不包含 URI 片段。',

	// Page Not Found
   'pageNotFound'               => '未找到指定的页面。',
   'emptyController'            => '没有指定控制器。',
   'controllerNotFound'         => '找不到控制器或方法: {0}::{1}',
   'methodNotFound'             => '找不到控制器的方法: {0}',

	// CSRF
   'disallowedAction'           => '你的请求操作是不被允许的。',

	// Uploaded file moving
   'alreadyMoved'               => '上传的文件已经被移动了。',
   'invalidFile'                => '原始文件不是一个有效的文件。',
   'moveFailed'                 => '无法移动文件 {0} 至 {1} ({2})',

   'uploadErrOk'		    => '文件上传成功。',
   'uploadErrIniSize'		=> '文件 "%s" 超出了 php.ini 文件中 upload_max_filesize 的设置值。',
   'uploadErrFormSize'		=> '文件 "%s" 超出了表单上传最大设置值。',
   'uploadErrPartial'		=> '文件 "%s" 只上传了一部分。',
   'uploadErrNoFile'		=> '没有文件要被上传。',
   'uploadErrCantWrite'		=> '文件 "%s" 无法写入磁盘。',
   'uploadErrNoTmpDir'		=> '文件无法被上传: 缺少临时目录。',
   'uploadErrExtension' 	=> '文件上传因为 PHP 扩展被停止了。',
   'uploadErrUnknown'		=> '文件 "%s" 因未知原因而上传失败了。'
];
