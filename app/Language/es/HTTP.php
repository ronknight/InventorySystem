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
   'missingCurl'                => 'CURL debe estar habilitado para usar la clase CURLRequest.', // 'CURL must be enabled to use the CURLRequest class.',
   'invalidSSLKey'              => 'No se puede establecer la clave SSL. {0} no es un archivo válido.', // 'Cannot set SSL Key. {0} is not a valid file.',
   'sslCertNotFound'            => 'Certificado SSL no encontrado en: {0}', // 'SSL certificate not found at: {0}',
   'curlError'                  => '{0} : {1}', // '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} no es un tipo de negociación válido. Debe ser uno de: media, charset, encoding, language.', // '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Versión de protocolo HTTP no válida. Debe ser una de: {0}', // 'Invalid HTTP Protocol Version. Must be one of: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Debe proporcionar un array de valores compatibles a todas las negociaciones.', // 'You must provide an array of supported values to all Negotiations.',

	// RedirectResponse
   'invalidRoute'               => 'No se puede encontrar la ruta {0} mientras se realiza el enrutamiento inverso.', // '{0} route cannot be found while reverse-routing.',

	// DownloadResponse
   'cannotSetBinary'            => 'Al establecer la ruta del archivo no se puede establecer binario.', // 'When setting filepath can not set binary.',
   'cannotSetFilepath'          => 'Cuando se configura binario no se puede establecer ruta de archivo: {0}', // 'When setting binary can not set filepath: {0}',
   'notFoundDownloadSource'     => 'No se encontró la fuente del cuerpo de descarga.', // 'Not found download body source.',
   'cannotSetCache'             => 'No es compatible con el almacenamiento en caché para la descarga.', // 'It does not supported caching for downloading.',
   'cannotSetStatusCode'        => 'No admite el código de cambio de estado para descargar. código: {0}, razón: {1}', // 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
   'missingResponseStatus'      => 'Respuesta HTTP sin código de estado', // 'HTTP Response is missing a status code',
   'invalidStatusCode'          => '{0} no es un código de estado de retorno HTTP válido', // '{0} is not a valid HTTP return status code',
   'unknownStatusCode'          => 'Código de estado HTTP desconocido provisto sin mensaje: {0}', // 'Unknown HTTP status code provided with no message: {0}',

	// URI
   'cannotParseURI'             => 'No se puede analizar el URI: {0}', // 'Unable to parse URI: {0}',
   'segmentOutOfRange'          => 'El segmento de solicitud de URI está fuera de rango: {0}', // 'Request URI segment is our of range: {0}',
   'invalidPort'                => 'Los puertos deben estar entre 0 y 65535. Dado: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
   'malformedQueryString'       => 'Las cadenas de consulta pueden no incluir fragmentos de URI.', // 'Query strings may not include URI fragments.',

	// Page Not Found
   'pageNotFound'               => 'Página no encontrada', // 'Page Not Found',
   'emptyController'            => 'Ningún controlador especificado.', // 'No Controller specified.',
   'controllerNotFound'         => 'Controlador o su método no encontrado: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
   'methodNotFound'             => 'No se encontró el método del controlador: {0}', // 'Controller method is not found: {0}',

	// CSRF
   'disallowedAction'           => 'La acción que solicitó no está permitida.', // 'The action you requested is not allowed.',

	// Uploaded file moving
   'alreadyMoved'               => 'El archivo cargado ya se ha movido.', // 'The uploaded file has already been moved.',
   'invalidFile'                => 'El archivo original no es un archivo válido.', // 'The original file is not a valid file.',
   'moveFailed'                 => 'No se pudo mover el archivo {0} a {1} ({2})', // 'Could not move file {0} to {1} ({2})',

   'uploadErrOk'                => 'Archivo cargado con éxito.', // 'The file uploaded with success.',
   'uploadErrIniSize'           => 'El archivo "%s" excede la directiva inic upload_max_filesize.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
   'uploadErrFormSize'          => 'El archivo "%s" excede el límite de carga definido en su formulario.', // 'The file "%s" exceeds the upload limit defined in your form.',
   'uploadErrPartial'           => 'El archivo "%s" solo se cargó parcialmente.', // 'The file "%s" was only partially uploaded.',
   'uploadErrNoFile'            => 'Ningún archivo fue cargado.', // 'No file was uploaded.',
   'uploadErrCantWrite'         => 'El archivo "%s" no se pudo escribir en el disco.', // 'The file "%s" could not be written on disk.',
   'uploadErrNoTmpDir'          => 'El archivo no se pudo cargar: falta el directorio temporal.', // 'File could not be uploaded: missing temporary directory.',
   'uploadErrExtension'         => 'La carga de archivos fue detenida por una extensión PHP.', // 'File upload was stopped by a PHP extension.',
   'uploadErrUnknown'           => 'El archivo "%s" no se cargó debido a un error desconocido.', //'The file "%s" was not uploaded due to an unknown error.',
];