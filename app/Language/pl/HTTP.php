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
	'missingCurl'                => 'CURL musi mieć możliwość korzystania z klasy CURLRequest.',
	'invalidSSLKey'              => 'Nie można ustawić klucza SSL. {0} nie jest prawidłowym plikiem.',
	'sslCertNotFound'            => 'Nie znaleziono certyfikatu SSL pod adresem: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} nie jest prawidłowym typem negocjacji. Musi to być jeden z: mediów, zestawu znaków, kodowania, języka.',

	// Message
	'invalidHTTPProtocol'        => 'Nieprawidłowa wersja protokołu HTTP. Musi być jednym z: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Musisz dostarczyć tablicę obsługiwanych wartości do wszystkich Negocjacji.',

	// RedirectResponse
	'invalidRoute'               => '{0} nie jest prawidłową trasą.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
	'missingResponseStatus'      => 'W odpowiedzi HTTP brakuje kodu statusu',
	'invalidStatusCode'          => '{0} nie jest prawidłowym kodem statusu zwrotu HTTP',
	'unknownStatusCode'          => 'Nieznany kod statusu HTTP dostarczony bez komunikatu: {0}',

	// URI
	'cannotParseURI'             => 'Nie można przeanalizować identyfikatora URI: {0}',
	'segmentOutOfRange'          => 'Segment żądania identyfikatora URI jest poza zakresem: {0}',
	'invalidPort'                => 'Porty muszą należeć do zakresu od 0 do 65535. Podano: {0}',
	'malformedQueryString'       => 'Łańcuchy zapytań mogą nie zawierać fragmentów URI.',

	// Page Not Found
	'pageNotFound'               => 'Strona nie została znaleziona',
	'emptyController'            => 'Nie określono kontrolera.',
	'controllerNotFound'         => 'Nie znaleziono kontrolera lub jego metody: {0}::{1}',
	'methodNotFound'             => 'Nie znaleziono metody kontrolera: {0}',

	// CSRF
	'disallowedAction'           => 'Żądane działanie jest niedozwolone.',

	// Uploaded file moving
	'alreadyMoved'				 => 'Przesłany plik został już przeniesiony.',
	'invalidFile'				 => 'Oryginalny plik nie jest prawidłowym plikiem.',
	'moveFailed'				 => 'Nie można przenieść pliku {0} do {1} ({2})',
	'uploadErrOk'				=> 'Plik został prawidłowo wysłany.',
	'uploadErrIniSize'			=> 'Wielkość pliku "%s" przekracza wielkość określoną przez upload_max_filesize',
	'uploadErrFormSize'			=> 'Wielkość pliku "%s" przekracza wielkość określoną w formularzu.',
	'uploadErrPartial'			=> 'Plik "%s" został wysłany częściowo.',
	'uploadErrNoFile'			=> 'Plik nie został wysłany',
	'uploadErrCantWrite'			=> 'Plik "%s" nie może być zapisany na dysku.',
	'uploadErrNoTmpDir'			=> 'Plik nie może zostać wysłany. Brak katalogu tymczasowego.',
	'uploadErrExtension'			=> 'Wysyłka pliku została zablokowana przez PHP.',
	'uploadErrUnknown'			=> 'Plik "%s" nie został wysłany z nieznanego powodu.'
];
