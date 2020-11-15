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
    'missingCurl'                => 'CURL moet geactiveerd zijn om gebruik te maken van de CURLRequest class.',
    'invalidSSLKey'              => 'Kan SSL Key niet zetten. {0} is geen geldig bestand.',
    'sslCertNotFound'            => 'SSL certificaat niet gevonden op de locatie: {0}',
    'curlError'                  => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType'     => '{0} is geen geldig negotiation type. Moet één van de volgende zijn: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol'        => 'Ongeldige HTTP Protocol Version. Moet één van de volgende zijn: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Je moet een Array opgeven met al de geldige Negotiations.',

    // RedirectResponse
    'invalidRoute'               => '{0} route kon niet worden gevonden tijdens reverse-routing.',

    // DownloadResponse
    'cannotSetBinary'            => 'Bestandspad kan niet binaire zijn.',
    'cannotSetFilepath'          => 'Binaire waarde kan geen bestandspad zijn: {0}',
    'notFoundDownloadSource'     => 'Download body niet gevonden.',
    'cannotSetCache'             => 'Caching niet ondersteunt voor downloads.',
    'cannotSetStatusCode'        => 'Het wijzigen van de status code is niet ondersteunt voor downloads. code: {0}, reden: {1}',

    // Response
    'missingResponseStatus'      => 'HTTP Response heeft geen status code',
    'invalidStatusCode'          => '{0} is geen geldige HTTP return status code',
    'unknownStatusCode'          => 'Ongekende HTTP status code opgegeven met geen bericht: {0}',

    // URI
    'cannotParseURI'             => 'URI kan niet worden geparsed: {0}',
    'segmentOutOfRange'          => 'Request URI segment valt niet in bereik: {0}',
    'invalidPort'                => 'Poort moet tussen 0 en 65535 vallen. Opgegeven: {0}',
    'malformedQueryString'       => 'Query strings mogen geen URI fragmenten bevatten.',

    // Page Not Found
    'pageNotFound'               => 'Pagina niet gevonden',
    'emptyController'            => 'Geen Controller gespecifieerd.',
    'controllerNotFound'         => 'Controller of methode niet gevonden: {0}::{1}',
    'methodNotFound'             => 'Controller methode niet gevonden: {0}',

    // CSRF
    'disallowedAction'           => 'De actie die u opvraagt is niet toegalaten.',

    // Uploaded file moving
    'alreadyMoved'               => 'Het upload bestand is reeds verplaatst.',
    'invalidFile'                => 'Het origineel bestand is geen geldig bestand.',
    'moveFailed'                 => 'Kon het bestand {0} niet verplaatsen naar {1} ({2})',

    'uploadErrOk'                => 'Upload geslaagd.',
    'uploadErrIniSize'           => 'Het bestand "%s" overschrijdt de upload_max_filesize ini instelling.',
    'uploadErrFormSize'          => 'Het bestand "%s" overschrijdt de upload limiet gedefinieerd in uw formulier.',
    'uploadErrPartial'           => 'Het bestand "%s" is maar deels geüpload.',
    'uploadErrNoFile'            => 'Geen bestand geüpload.',
    'uploadErrCantWrite'         => 'Het bestand "%s" kon niet worden weggeschreven op schijf.',
    'uploadErrNoTmpDir'          => 'Bestand kon niet worden geüpload: ontbrekende tijdelijke folder.',
    'uploadErrExtension'         => 'Bestand upload werd gestopt door een PHP extensie.',
    'uploadErrUnknown'           => 'Het bestand "%s" kon niet worden geüpload door een ongekende fout.',
];
