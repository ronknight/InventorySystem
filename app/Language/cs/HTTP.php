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
 * @author     Pavel Tajduš - PavelTajdus on Github
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
   'missingCurl'                => 'Pro použití třídy CURLRequest, musí byť povolená funkce CURL.',
   'invalidSSLKey'              => 'Není možné nastavit klíč SSL. {0} není platný soubor.',
   'sslCertNotFound'            => 'SSL certifikát nebyl nalezen na: {0}',
   'curlError'                  => '{0} : {1}',

    // IncomingRequest
   'invalidNegotiationType'     => '{0} není platný typ vyjednávání. Musí to být: médium, znaková sada, kódování nebo jazyk.',

    // Message
   'invalidHTTPProtocol'        => 'Neplatná verze protokolu HTTP. Musí to být jedno z: {0}',

    // Negotiate
   'emptySupportedNegotiations' => 'Musíte poskytnout pole podporovaných hodnot pro všechny negotiations.',

    // RedirectResponse
   'invalidRoute'               => '{0} trasu není možné najít při zpětném směrování.',

    // DownloadResponse
   'cannotSetBinary'            => 'Při nastavování filepath není možné nastavit binary.',
   'cannotSetFilepath'          => 'Při nastavování binary není možné nastavit filepath: {0}',
   'notFoundDownloadSource'     => 'Nebyl nalezen zdroj těla (body) ke stažení.',
   'cannotSetCache'             => 'Nepodporuje ukladání do vyrovnávací paměti pro stahování.',
   'cannotSetStatusCode'        => 'Nepodporuje stavový kód change pro stažení. kód: {0}, důvod: {1}',

    // Response
   'missingResponseStatus'      => 'V odpovědi HTTP chybí stavový kód',
   'invalidStatusCode'          => '{0} není platný návratový stavový kód HTTP',
   'unknownStatusCode'          => 'Neznámý stavový kód HTTP poskytnutý bez zprávy: {0}',

    // URI
   'cannotParseURI'             => 'Není možné analyzovat URI: {0}',
   'segmentOutOfRange'          => 'Segment URI žádosti je mimo rozsah: {0}',
   'invalidPort'                => 'Porty musí být mezi 0 a 65535. Zadáno: {0}',
   'malformedQueryString'       => 'Řetězce dotazů nemusí obsahovat fragmenty URI.',

    // Page Not Found
   'pageNotFound'               => 'Stránka nebyla nalezena',
   'emptyController'            => 'Není zadán žádný Controller.',
   'controllerNotFound'         => 'Controller nebo jeho metoda nebyla nalezena: {0}::{1}',
   'methodNotFound'             => 'Metoda Controlleru nebyla nalezena: {0}',

    // CSRF
   'disallowedAction'           => 'Požadovaná akce není povolena.',

    // Uploaded file moving
   'alreadyMoved'               => 'Nahraný soubor už byl presunutý.',
   'invalidFile'                => 'Pôvodný soubor není platný.',
   'moveFailed'                 => 'Nepodařilo se přesunout soubor z {0} do {1} ({2})',

   'uploadErrOk'                => 'soubor byl úspěšně nahrán.',
   'uploadErrIniSize'           => 'soubor "%s" překračuje vaše nastavení upload_max_filesize.',
   'uploadErrFormSize'          => 'soubor "%s" překračuje limit pro upload nastavený ve vašem formuláři.',
   'uploadErrPartial'           => 'soubor "%s" byl nahrán pouze částečně.',
   'uploadErrNoFile'            => 'Nebyl nahrán žádný soubor.',
   'uploadErrCantWrite'         => 'soubor "%s" se nepodařilo zapsat na disk.',
   'uploadErrNoTmpDir'          => 'soubor se nepodařilo nahrát: chybí dočasný adresář.',
   'uploadErrExtension'         => 'Nahrávání souborů bylo zastaveno rozšířením PHP.',
   'uploadErrUnknown'           => 'soubor "%s" nebyl nahrán z důvodu neznámé chyby.',
];
