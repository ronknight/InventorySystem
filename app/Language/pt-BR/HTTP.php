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
	'missingCurl'                => 'CURL deve estar ativado para usar a classe CURLRequest.',
	'invalidSSLKey'              => 'Não é possível definir a Chave SSL. {0} não é um arquivo válido.',
	'sslCertNotFound'            => 'Certificado SSL não encontrado em: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} não é um tipo de negociação válido. Deve ser um dos seguintes: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'Versão inválida do Protocolo HTTP. Deve ser uma dessas: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Você deve fornecer uma array de valores suportados para todas as Negociações.',

	// RedirectResponse
	'invalidRoute'               => 'Rota {0} não foi encontrada ao fazer o roteamento-reverso.',

	// DownloadResponse
	'cannotSetBinary'            => 'Ao definir o caminho do arquivo não foi possível definir como binário.',
	'cannotSetFilepath'          => 'Ao definir como binário não é possível definir o caminho do arquivo: {0}',
	'notFoundDownloadSource'     => 'Fonte do corpo do download não encontrado.',
	'cannotSetCache'             => 'Não suporta armazenamento em cache para download.',
	'cannotSetStatusCode'        => 'Não suporta o código de status de alteração para download. Código: {0}, Razão: {1}',

	// Response
	'missingResponseStatus'      => 'Resposta HTTP está faltando um código de status',
	'invalidStatusCode'          => '{0} não é um código de status de retorno HTTP válido',
	'unknownStatusCode'          => 'Código de status HTTP desconhecido fornecido sem nenhuma mensagem: {0}',

	// URI
	'cannotParseURI'             => 'Não é possível analisar o URI: {0}',
	'segmentOutOfRange'          => 'Segmento do URI da Requisição está fora do intervalo: {0}',
	'invalidPort'                => 'Portas devem estar entre 0 e 65535. Dado: {0}',
	'malformedQueryString'       => 'As strings de consulta não podem incluir fragmentos de URI.',

	// Page Not Found
	'pageNotFound'               => 'Página Não Encontrada',
	'emptyController'            => 'Nenhum Controller especificado.',
	'controllerNotFound'         => 'Controller ou seu método não foi encontrado: {0}::{1}',
	'methodNotFound'             => 'Método do Controller não foi encontrado: {0}',

	// CSRF
	'disallowedAction'           => 'A ação que você solicitou não é permitida.',

	// Uploaded file moving
	'alreadyMoved'               => 'O arquivo enviado já foi movido.',
	'invalidFile'                => 'O arquivo original não é um arquivo válido.',
	'moveFailed'                 => 'Não foi possível mover o arquivo {0} para {1} ({2})',

	'uploadErrOk'            => 'O upload do arquivo foi realizado com sucesso.',
	'uploadErrIniSize'       => 'O arquivo "%s" excede a diretiva ini upload_max_filesize.',
	'uploadErrFormSize'      => 'O arquivo "%s" excede o limite de upload definido em seu formulário.',
	'uploadErrPartial'       => 'O upload do arquivo "%s" foi realizado apenas parcialmente.',
	'uploadErrNoFile'        => 'Nenhum upload de arquivo foi realizado.',
	'uploadErrCantWrite'     => 'O arquivo "%s" não pode ser escrito no disco.',
	'uploadErrNoTmpDir'      => 'Upload de arquivo não pode ser realizado: faltando diretório temporário.',
	'uploadErrExtension'     => 'Upload de arquivo foi parado por uma extensão PHP.',
	'uploadErrUnknown'       => 'O upload do arquivo "%s" não foi realizado devido a um erro desconhecido.',

	// SameSite setting
	'invalidSameSiteSetting' => 'A configuração SameSite deve ser None, Lax, Strict ou uma string vazia. Dado: {0}',
];
