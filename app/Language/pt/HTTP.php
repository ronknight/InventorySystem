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
 * @author     Marco Monteiro
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
	'missingCurl'                => 'CURL deve estar ativado para usar a classe CURLRequest.',
	'invalidSSLKey'              => 'Não é possível definir a chave SSL. {0} não é um arquivo válido.',
	'sslCertNotFound'            => 'Certificado SSL não encontrado em: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} não é um tipo de negociação válido. Deve ser um dos seguintes: mídia, charset, codificação, idioma.',

	// Message
	'invalidHTTPProtocol'        => 'Versão inválida do protocolo HTTP. Deve ser um dos seguintes: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as negociações.',

	// RedirectResponse
	'invalidRoute'               => '{0} não é uma rota válida.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
	'missingResponseStatus'      => 'Resposta HTTP está sem um código de status',
	'invalidStatusCode'          => '{0} não é um código de status de retorno HTTP válido',
	'unknownStatusCode'          => 'Código de status HTTP desconhecido fornecido sem mensagem: {0}',

	// URI
	'cannotParseURI'             => 'Não é possível analisar o URI: {0}',
	'segmentOutOfRange'          => 'O segmento de URI de solicitação está fora do intervalo: {0}',
	'invalidPort'                => 'Portas devem estar entre 0 e 65535. Fornecido: {0}',
	'malformedQueryString'       => 'As strings de consulta podem não incluir fragmentos de URI.',

	// Page Not Found
	'pageNotFound'               => 'Página não encontrada',
	'emptyController'            => 'Nenhum Controller especificado.',
	'controllerNotFound'         => 'Controller ou seu método não encontrado: {0}::{1}',
	'methodNotFound'             => 'Método do Controller não encontrado: {0}',

	// CSRF
	'disallowedAction'           => 'A ação que você solicitou não é permitida.',

	// Uploaded file moving
	'alreadyMoved'				 => 'O arquivo enviado já foi movido.',
	'invalidFile'				 => 'O arquivo original não é um arquivo válido.',
	'moveFailed'				 => 'Não foi possível mover o arquivo {0} para {1} ({2})',

	'uploadErrOk'                => 'The file uploaded with success.',
	'uploadErrIniSize'           => 'The file "%s" exceeds your upload_max_filesize ini directive.',
	'uploadErrFormSize'          => 'The file "%s" exceeds the upload limit defined in your form.',
	'uploadErrPartial'           => 'The file "%s" was only partially uploaded.',
	'uploadErrNoFile'            => 'No file was uploaded.',
	'uploadErrCantWrite'         => 'The file "%s" could not be written on disk.',
	'uploadErrNoTmpDir'          => 'File could not be uploaded: missing temporary directory.',
	'uploadErrExtension'         => 'File upload was stopped by a PHP extension.',
	'uploadErrUnknown'           => 'The file "%s" was not uploaded due to an unknown error.',
];
