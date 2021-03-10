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
	// CurlRequest
   'missingCurl'                => 'CURLRequestクラスを使用するには、CURLが有効になっている必要があります。', //CURL must be enabled to use the CURLRequest class.
   'invalidSSLKey'              => 'SSLキーを設定できません。{0} は有効なファイルではありません。', //Cannot set SSL Key. {0} is not a valid file.
   'sslCertNotFound'            => '{0} にSSL証明書が見つかりません', //SSL certificate not found at: {0}
   'curlError'                  => '{0} : {1}', //{0} : {1}

	// IncomingRequest
   'invalidNegotiationType'     => '{0} は有効なネゴシエーションタイプではありません。値は次のいずれかでなければなりません:media, charset, encoding, language', //{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.

	// Message
   'invalidHTTPProtocol'        => 'HTTP プロトコルのバージョンが無効です。値は次のいずれかでなければなりません:{0}', //Invalid HTTP Protocol Version. Must be one of: {0}

	// Negotiate
   'emptySupportedNegotiations' => 'すべてのネゴシエーションにサポートされている値の配列を設定する必要があります。', //You must provide an array of supported values to all Negotiations.

	// RedirectResponse
   'invalidRoute'               => 'リバースルーティング中に {0} ルートが見つかりません。', //{0} route cannot be found while reverse-routing.

	// DownloadResponse
   'cannotSetBinary'            => 'ファイルパスを設定する場合、バイナリを設定できません。', //When setting filepath can not set binary.
   'cannotSetFilepath'          => 'バイナリを設定するとファイルパスを設定できません: {0}', //When setting binary can not set filepath: {0}
   'notFoundDownloadSource'     => 'ダウンロードボディのソースが見つかりません。', //Not found download body source.
   'cannotSetCache'             => 'ダウンロード用のキャッシングには対応していません。', //It does not supported caching for downloading.
   'cannotSetStatusCode'        => 'ダウンロード用のステータスコードの変更には対応していません。 コード: {0}, 理由: {1}', //It does not supported change status code for downloading. code: {0}, reason: {1}

	// Response
   'missingResponseStatus'      => 'HTTPレスポンスにステータスコードがありません。', //HTTP Response is missing a status code
   'invalidStatusCode'          => '{0} は有効な HTTP リターンステータスコードではありません。', //{0} is not a valid HTTP return status code
   'unknownStatusCode'          => 'メッセージの無い未知のHTTPステータスコードです。: {0}', //Unknown HTTP status code provided with no message: {0}

	// URI
   'cannotParseURI'             => 'URI を解析できません。: {0}', //Unable to parse URI: {0}
   'segmentOutOfRange'          => 'リクエストURIセグメントが範囲外です: {0}', //Request URI segment is our of range: {0} ← out of rangeの間違いでは？
   'invalidPort'                => 'ポートは0～65535の間である必要があります。 値: {0}', //Ports must be between 0 and 65535. Given: {0}
   'malformedQueryString'       => 'クエリ文字列はURIフラグメントを含んではいけません。', //Query strings may not include URI fragments.

	// Page Not Found
   'pageNotFound'               => 'ページが見つかりません。', //Page Not Found
   'emptyController'            => 'コントローラが指定されていません。', //No Controller specified.
   'controllerNotFound'         => 'コントローラまたはそのメソッドが見つかりません。: {0}::{1}', //Controller or its method is not found: {0}::{1}
   'methodNotFound'             => 'コントローラのメソッドが見つかりません。: {0}', //Controller method is not found: {0}

	// CSRF
   'disallowedAction'           => '要求されたアクションは許可されていません。', //The action you requested is not allowed.

	// Uploaded file moving
   'alreadyMoved'               => 'アップロードしたファイルは既に移動済みです。', //The uploaded file has already been moved.
   'invalidFile'                => 'オリジナルファイルは有効なファイルではありません。', //The original file is not a valid file.
   'moveFailed'                 => 'ファイル{0}を{1}に移動できませんでした。({2})', //Could not move file {0} to {1} ({2})

   'uploadErrOk'                => 'ファイルのアップロードに成功しました。', //The file uploaded with success.
   'uploadErrIniSize'           => 'ファイル "%s" がupload_max_filesize ini ディレクティブの値を超えています。', //The file "%s" exceeds your upload_max_filesize ini directive.
   'uploadErrFormSize'          => 'ファイル "%s" がフォームに定義されたアップロード制限を超えました。', //The file "%s" exceeds the upload limit defined in your form.
   'uploadErrPartial'           => 'ファイル "%s" が部分的にしかアップロードされていませんでした。', //The file "%s" was only partially uploaded.
   'uploadErrNoFile'            => 'ファイルはアップロードされませんでした。', //No file was uploaded.
   'uploadErrCantWrite'         => 'ファイル "%s"はディスクに書き込めませんでした。', //The file "%s" could not be written on disk.
   'uploadErrNoTmpDir'          => 'ファイルをアップロードできませんでした。: 一時ディレクトリが見つかりません。', //File could not be uploaded: missing temporary directory.
   'uploadErrExtension'         => 'ファイルアップロードはPHP機能拡張により停止されました。', //File upload was stopped by a PHP extension.
   'uploadErrUnknown'           => 'ファイル "%s" は未知のエラーのためアップロードされませんでした。', //The file "%s" was not uploaded due to an unknown error.
];
