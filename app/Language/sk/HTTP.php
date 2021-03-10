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
 * @author     Jozef Botka - xbotkaj on Github
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
   'missingCurl'                => 'Aby bolo možné používať triedu CURLRequest, musí byť povolená funkcia CURL.',
   'invalidSSLKey'              => 'Nie je možné nastaviť kľúč SSL. {0} nie je platný súbor.',
   'sslCertNotFound'            => 'SSL certifikát nebol nájdený na: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} nie je platný typ vyjednávania. Musí to byť: médium, znaková sada, kódovanie alebo jazyk.',

	// Message
   'invalidHTTPProtocol'        => 'Neplatná verzia protokolu HTTP. Musí to byť jedno z: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Musíte poskytnúť pole podporovaných hodnôt pre všetky negotiations.',

	// RedirectResponse
   'invalidRoute'               => '{0} trasu nemožno nájsť pri spätnom smerovaní.',

	// DownloadResponse
   'cannotSetBinary'            => 'Pri nastavovaní filepath nie je možné nastaviť binary.',
   'cannotSetFilepath'          => 'Pri nastavovaní binary nie je možné nastaviť filepath: {0}',
   'notFoundDownloadSource'     => 'Not found download body source.',
   'cannotSetCache'             => 'Nepodporuje ukladanie do vyrovnávacej pamäte pre sťahovanie.',
   'cannotSetStatusCode'        => 'Nepodporuje stavový kód chnage na stiahnutie. kód: {0}, dôvod: {1}',

	// Response
   'missingResponseStatus'      => 'V odpovedi HTTP chýba stavový kód',
   'invalidStatusCode'          => '{0} nie je platný návratový stavový kód HTTP',
   'unknownStatusCode'          => 'Neznámy stavový kód HTTP poskytnutý bez správy: {0}',

	// URI
   'cannotParseURI'             => 'Nemožno analyzovať URI: {0}',
   'segmentOutOfRange'          => 'Segment URI žiadosti je mimo rozsahu: {0}',
   'invalidPort'                => 'Porty musia byť medzi 0 a 65535. Zadaný: {0}',
   'malformedQueryString'       => 'Reťazce dopytov nemusia obsahovať fragmenty URI.',

	// Page Not Found
   'pageNotFound'               => 'Stránka sa nenašla',
   'emptyController'            => 'Nie je zadaný žiadny Controller.',
   'controllerNotFound'         => 'Controller alebo jeho metóda sa nenašla: {0}::{1}',
   'methodNotFound'             => 'Metóda Controller-u sa nenašla: {0}',

	// CSRF
   'disallowedAction'           => 'Požadovaná akcia nie je povolená.',

	// Uploaded file moving
   'alreadyMoved'               => 'Nahraný súbor už bol presunutý.',
   'invalidFile'                => 'Pôvodný súbor nie je platný.',
   'moveFailed'                 => 'Nepodarilo sa presunúť súbor z {0} do {1} ({2})',

   'uploadErrOk'                => 'Súbor bol úspešne odovzdaný.',
   'uploadErrIniSize'           => 'Súbor "%s" prekračuje vašu direktívu upload_max_filesize ini.',
   'uploadErrFormSize'          => 'Súbor "%s" prekračuje limit pre upload stanovený vo vašom formulári.',
   'uploadErrPartial'           => 'Súbor "%s" bol nahraný iba čiastočne.',
   'uploadErrNoFile'            => 'Nebol nahraný žiaden súbor.',
   'uploadErrCantWrite'         => 'Súbor "%s" sa nedal zapísať na disk.',
   'uploadErrNoTmpDir'          => 'Súbor sa nepodarilo nahrať: chýba dočasný adresár.',
   'uploadErrExtension'         => 'Nahrávanie súborov bolo zastavené rozšírením PHP.',
   'uploadErrUnknown'           => 'Súbor "%s" nebol nahraný kvôli neznámej chybe.',
];
