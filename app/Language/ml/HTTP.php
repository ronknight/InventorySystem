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
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURLRequest ക്ലാസ് ഉപയോഗിക്കുന്നതിന് CURL പ്രാപ്തമാക്കിയിരിക്കണം.',
   'invalidSSLKey'              => 'SSL കീ സജ്ജമാക്കാൻ കഴിയില്ല. {0} സാധുവായ ഫയലല്ല.',
   'sslCertNotFound'            => 'SSL സർ‌ട്ടിഫിക്കറ്റ് കണ്ടെത്തിയില്ല: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} സാധുവായ ഒരു ചർച്ചാ തരമല്ല. ഇവയിലൊന്ന് ആയിരിക്കണം: മീഡിയ, പ്രതീകം, എൻകോഡിംഗ്, ഭാഷ.',

	// Message
   'invalidHTTPProtocol'        => 'എച്ച്ടിടിപി പ്രോട്ടോക്കോൾ പതിപ്പ് അസാധുവാണ്. ഇവയിലൊന്ന് ആയിരിക്കണം: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'എല്ലാ ചർച്ചകൾക്കും നിങ്ങൾ പിന്തുണയ്ക്കുന്ന മൂല്യങ്ങളുടെ ഒരു നിര നൽകണം.',

	// RedirectResponse
   'invalidRoute'               => '{0} റിവേഴ്സ് റൂട്ടിംഗ് സമയത്ത് റൂട്ട് കണ്ടെത്താൻ കഴിയില്ല.',

	// DownloadResponse
   'cannotSetBinary'            => 'ഫയൽ‌പാത്ത് സജ്ജമാക്കുമ്പോൾ‌ ബൈനറി സജ്ജമാക്കാൻ‌ കഴിയില്ല.',
   'cannotSetFilepath'          => 'ബൈനറി സജ്ജമാക്കുമ്പോൾ ഫയൽപാത്ത് സജ്ജമാക്കാൻ കഴിയില്ല: {0}',
   'notFoundDownloadSource'     => 'ഡൗൺലോഡ് ബോഡി ഉറവിടം കണ്ടെത്തിയില്ല.',
   'cannotSetCache'             => 'ഡൗൺലോഡുചെയ്യുന്നതിനുള്ള കാഷിംഗിനെ ഇത് പിന്തുണയ്‌ക്കുന്നില്ല.',
   'cannotSetStatusCode'        => 'download ചെയ്യുന്നതിനുള്ള സ്റ്റാറ്റസ് കോഡ് മാറ്റുന്നതിനെ ഇത് പിന്തുണയ്‌ക്കുന്നില്ല. കോഡ്: {0}, കാരണം: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP പ്രതികരണത്തിന് ഒരു സ്റ്റാറ്റസ് കോഡ് നഷ്‌ടമായി',
   'invalidStatusCode'          => '{0} സാധുവായ എച്ച്ടിടിപി റിട്ടേൺ സ്റ്റാറ്റസ് കോഡല്ല',
   'unknownStatusCode'          => 'സന്ദേശമൊന്നുമില്ലാതെ അജ്ഞാത എച്ച്ടിടിപി സ്റ്റാറ്റസ് കോഡ് നൽകിയിട്ടുണ്ട്: {0}',

	// URI
   'cannotParseURI'             => 'RI പാഴ്‌സുചെയ്യാനായില്ല: {0}',
   'segmentOutOfRange'          => 'അഭ്യർത്ഥന URI സെഗ്‌മെന്റ് പരിധിക്ക് പുറത്താണ്: {0}',
   'invalidPort'                => 'Ports 0 നും 65535 നും ഇടയിലായിരിക്കണം. നൽകിയിട്ടുണ്ട്: {0}',
   'malformedQueryString'       => 'അന്വേഷണ സ്ട്രിംഗുകളിൽ യു‌ആർ‌ഐ ശകലങ്ങൾ‌ അടങ്ങിയിരിക്കില്ല.',

	// Page Not Found
   'pageNotFound'               => 'പേജ് കണ്ടെത്തിയില്ല',
   'emptyController'            => 'കൺട്രോളറൊന്നും വ്യക്തമാക്കിയിട്ടില്ല.',
   'controllerNotFound'         => 'കൺട്രോളറോ അതിന്റെ രീതിയോ കണ്ടെത്തിയില്ല: {0}::{1}',
   'methodNotFound'             => 'കൺട്രോളർ രീതി കണ്ടെത്തിയില്ല: {0}',

	// CSRF
   'disallowedAction'           => 'നിങ്ങൾ അഭ്യർത്ഥിച്ച പ്രവർത്തനം അനുവദനീയമല്ല.',

	// Uploaded file moving
   'alreadyMoved'               => 'അപ്‌ലോഡുചെയ്‌ത ഫയൽ ഇതിനകം നീക്കി.',
   'invalidFile'                => 'യഥാർത്ഥ ഫയൽ സാധുവായ ഫയലല്ല.',
   'moveFailed'                 => 'ഫയൽ {1} ({2}) ലേക്ക് നീക്കാൻ കഴിഞ്ഞില്ല',

   'uploadErrOk'                => 'ഫയൽ വിജയത്തോടെ അപ്‌ലോഡുചെയ്‌തു.',
   'uploadErrIniSize'           => '"%s" ഫയൽ നിങ്ങളുടെ അപ്‌ലോഡ്_മാക്സ്_ഫൈലൈസ് ഇനി നിർദ്ദേശത്തെ കവിയുന്നു.',
   'uploadErrFormSize'          => '"%s" ഫയൽ നിങ്ങളുടെ ഫോമിൽ നിർവചിച്ചിരിക്കുന്ന അപ്‌ലോഡ് പരിധി കവിയുന്നു.',
   'uploadErrPartial'           => '"%s" ഫയൽ ഭാഗികമായി മാത്രമേ അപ്‌ലോഡ് ചെയ്തിട്ടുള്ളൂ.',
   'uploadErrNoFile'            => 'ഒരു ഫയലും അപ്‌ലോഡുചെയ്‌തില്ല.',
   'uploadErrCantWrite'         => '"%s" ഫയൽ ഡിസ്കിൽ എഴുതാൻ കഴിഞ്ഞില്ല.',
   'uploadErrNoTmpDir'          => 'ഫയൽ അപ്‌ലോഡുചെയ്യാനായില്ല: താൽക്കാലിക ഡയറക്‌ടറി നഷ്‌ടമായി.',
   'uploadErrExtension'         => 'ഒരു പി‌എച്ച്പി വിപുലീകരണം ഫയൽ അപ്‌ലോഡ് നിർത്തി.',
   'uploadErrUnknown'           => 'അജ്ഞാതമായ ഒരു പിശക് കാരണം "%s" ഫയൽ അപ്‌ലോഡ് ചെയ്തിട്ടില്ല.',
];
