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
   'missingCurl'                => 'CURL must be enabled to use the CURLRequest class.',
   'invalidSSLKey'              => 'Kann SSL Key micht setzen. {0} ist kein gültiger Dateiname.',
   'sslCertNotFound'            => 'SSL-Zertifikat nicht gefunden unter:: {0}',
   'curlError'                  => '{0} : {1}',

   // IncomingRequest
   'invalidNegotiationType'     => '{0} ist kein gültiger Inhaltstyp. Gültige Typen: media, charset, encoding, language.',

   // Message
   'invalidHTTPProtocol'        => 'Ungültige HTTP Protokoll-Version. Gültige Versionen: {0}',

   // Negotiate
   'emptySupportedNegotiations' => 'Es müssen gültige Inhaltstypen angegeben werden.',

   // RedirectResponse
   'invalidRoute'               => '{0} ist eine üngültige Route.',

   // DownloadResponse
   'cannotSetBinary'            => 'Fehler beim Download. Filepath kann nicht auf Binär gesetzt werden.',
   'cannotSetFilepath'          => 'Fehler beim Binär-Download. Kann filepath nicht setzen: {0}',
   'notFoundDownloadSource'     => 'Fehler beim Herunterladen der Datei.',
   'cannotSetCache'             => 'Fehler beim Setzen des Download-Caches.',
   'cannotSetStatusCode'        => 'Fehler beim Download. Status-Code konnte nicht gesetzt werden. Code: {0}, Grund: {1}',

   // Response
   'missingResponseStatus'      => 'HTTP Response enthält keinen Statuscode',
   'invalidStatusCode'          => '{0} ist ein ungültiger HTTP-Statuscode',
   'unknownStatusCode'          => 'Unbekannter HTTP-Statuscode ohne Meldung: {0}',

   // URI
   'cannotParseURI'             => 'URI kann nicht geparst werden: {0}',
   'segmentOutOfRange'          => 'Das URI-Segment im Request ist ausserhalb des gültigen Bereichs: {0}',
   'invalidPort'                => 'Die Ports müssen zwischen 0 und 65535 liegen. Gegeben: {0}',
   'malformedQueryString'       => 'Query-Strings dürfen keine URI-Fragmente enthalten.',

   // Page Not Found
   'pageNotFound'               => 'Seite nicht gefunden',
   'emptyController'            => 'Kein Controller angegeben.',
   'controllerNotFound'         => 'Der Controller oder seine Methode wurde nicht gefunden: {0}::{1}',
   'methodNotFound'             => 'Die Controllermethode wurde nicht gefunden: {0}',

   // CSRF
   'disallowedAction'           => 'Die angeforderte Aktion ist nicht erlaubt.',

   // Uploaded file moving
   'alreadyMoved'               => 'Die hochgeladene Datei wurde bereits verschoben.',
   'invalidFile'                => 'Die Originaldatei ist keine gültige Datei.',
   'moveFailed'                 => 'Die Datei konnte nicht von {0} nach {1} verschoben werden ({2})',

   'uploadErrOk'        => 'Die Datei wurde erfolgreich hochgeladen.',
   'uploadErrIniSize'   => 'Die Datei "%s" überschreitet die upload_max_filesize ini Direktive.',
   'uploadErrFormSize'  => 'Die Datei "%s" ist grösser als die im Formular definierte Limite',
   'uploadErrPartial'   => 'Die Datei "%s" wurde nur teilweise hochgeladen.',
   'uploadErrNoFile'    => 'Es wurde keine Datei hochgeladen',
   'uploadErrCantWrite' => 'Die Datei "%s" konnte nicht gespeichert werden.',
   'uploadErrNoTmpDir'  => 'Fehler beim Hochladen: Temporäres Verzeichnis fehlt.',
   'uploadErrExtension' => 'Der Datei-Upload wurde von einer PHP-extension gestoppt.',
   'uploadErrUnknown'   => 'Die Datei "%s" konnte wegen eines unbekannten Fehlers nicht hochgeladen werden.',
];
