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
   'missingCurl'                => 'CURL må være aktivert for å bruke CURLRequest-klassen.',
   'invalidSSLKey'              => 'Kan ikke sette inn SSL-nøkkel. {0} er ikke et gyldig filnavn.',
   'sslCertNotFound'            => 'SSL-sertifikat ikke funnet under :: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} er ikke en gyldig innholdstype. Gyldige typer: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Ugyldig HTTP-protokollversjon. Gyldige versjoner: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Gyldige innholdstyper må spesifiseres.',

	// RedirectResponse
   'invalidRoute'               => '{0} er en gyldig rute.',

	// DownloadResponse
   'cannotSetBinary'            => 'Feil ved nedlasting. Filsti kan ikke settes til binær.',
   'cannotSetFilepath'          => 'Feil under binær nedlasting. Kan ikke angi filsti: {0}',
   'notFoundDownloadSource'     => 'Feil ved nedlasting av filen.',
   'cannotSetCache'             => 'Feil under innstilling av nedlastingsbufferen.',
   'cannotSetStatusCode'        => 'Feil ved nedlasting. Statuskode kunne ikke settes. Kode: {0}, årsak: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP-svar inneholder ikke en statuskode',
   'invalidStatusCode'          => '{0} er en ugyldig HTTP-statuskode',
   'unknownStatusCode'          => 'Ukjent HTTP-statuskode uten melding: {0}',

	// URI
   'cannotParseURI'             => 'URI kan ikke analyseres: {0}',
   'segmentOutOfRange'          => 'URI-segmentet i forespørselen er utenfor grensene: {0}',
   'invalidPort'                => 'Portene må være mellom 0 og 65535. gitt: {0}',
   'malformedQueryString'       => 'Forespørselstrenger kan ikke inneholde URI-fragmenter.',

	// Page Not Found
   'pageNotFound'               => 'Siden ble ikke funnet',
   'emptyController'            => 'Ingen Controller spesifisert.',
   'controllerNotFound'         => 'Kontrolleren eller metoden ble ikke funnet: {0} :: {1}',
   'methodNotFound'             => 'Kontroller-metoden ble ikke funnet: {0}',

	// CSRF
   'disallowedAction'           => 'Den forespurte handlingen er ikke tillatt.',

	// Uploaded file moving
   'alreadyMoved'               => 'Den opplastede filen er allerede flyttet.',
   'invalidFile'                => 'Den opprinnelige filen er ikke en gyldig fil.',
   'moveFailed'                 => 'Filen kunne ikke flyttes fra {0} til {1} ({2})',

   'uploadErrOk'                => 'Filen ble lastet opp.',
   'uploadErrIniSize'           => 'Filen "%s" overstiger upload_max_filesize ini.',
   'uploadErrFormSize'          => 'Filen "%s" overstiger opplastingsgrensen definert i form.',
   'uploadErrFormSize'          => 'Filen "%s" er større enn grensen satt i skjemaet',
   'uploadErrPartial'           => 'Filen "%s" ble bare delvis lastet opp.',
   'uploadErrNoFile'            => 'Ingen filer ble lastet opp',
   'uploadErrCantWrite'         => 'Filen "%s" kunne ikke lagres.',
   'uploadErrNoTmpDir'          => 'Feil med opplasting: Midlertidig katalog mangler.',
   'uploadErrExtension'         => 'Filopplastningen ble stoppet av en PHP-utvidelse.',
   'uploadErrUnknown'           => 'Filen "%s" kunne ikke lastes opp på grunn av en ukjent feil.',
];
