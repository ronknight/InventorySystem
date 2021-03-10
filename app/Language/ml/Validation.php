<?php

/**
 * Validation language strings.
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
        // പ്രധാന സന്ദേശങ്ങൾ
   'noRuleSets' => 'മൂല്യനിർണ്ണയ കോൺഫിഗറേഷനിൽ റൂൾസെറ്റുകളൊന്നും വ്യക്തമാക്കിയിട്ടില്ല.',
   'ruleNotFound' => '{0} സാധുവായ ഒരു നിയമമല്ല.',
   'groupNotFound' => '{0} ഒരു മൂല്യനിർണ്ണയ നിയമ ഗ്രൂപ്പല്ല.',
   'groupNotArray' => '{0} റൂൾ ഗ്രൂപ്പ് ഒരു അറേ ആയിരിക്കണം.',
   'invalidTemplate' => '{0} സാധുവായ ഒരു മൂല്യനിർണ്ണയ ടെംപ്ലേറ്റല്ല.',

	// Rule Messages
   'alpha'                 => '{field} ഫീൽഡിൽ അക്ഷരമാല പ്രതീകങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'alpha_dash'            => '{field} ഫീൽഡിൽ ആൽഫാന്യൂമെറിക്, അടിവരയിടുക, ഡാഷ് പ്രതീകങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'alpha_numeric'         => '{field} ഫീൽഡിൽ ആൽഫാന്യൂമെറിക് പ്രതീകങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'alpha_numeric_punct'   => '{field} ഫീൽഡിൽ ആൽഫാന്യൂമെറിക് പ്രതീകങ്ങൾ, സ്‌പെയ്‌സുകൾ, ~ എന്നിവ മാത്രമേ അടങ്ങിയിരിക്കൂ! # $% & * - _ + = | :. പ്രതീകങ്ങൾ.',
   'alpha_numeric_space'   => '{field} ഫീൽഡിൽ ആൽഫാന്യൂമെറിക്, സ്‌പേസ് പ്രതീകങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'alpha_space'           => '{field} ഫീൽഡിൽ അക്ഷരമാല പ്രതീകങ്ങളും സ്‌പെയ്‌സുകളും മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'decimal'               => '{field} ഫീൽഡിൽ ഒരു ദശാംശ സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'differs'               => '{field} ഫീൽഡ് {param} ഫീൽഡിൽ നിന്ന് വ്യത്യസ്‌തമായിരിക്കണം.',
   'equals'                => '{field} ഫീൽഡ് കൃത്യമായിരിക്കണം: {param}.',
   'exact_length'          => '{field} ഫീൽഡ് കൃത്യമായി {param} പ്രതീകങ്ങൾ ആയിരിക്കണം.',
   'greater_than'          => '{field} ഫീൽഡിൽ {param} എന്നതിനേക്കാൾ വലിയ ഒരു സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'greater_than_equal_to' => '{field} ഫീൽഡിൽ {param} എന്നതിനേക്കാൾ വലുതോ തുല്യമോ ആയ ഒരു സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'hex'                   => '{field} ഫീൽഡിൽ ഹെക്‌സാഡെസിമൽ പ്രതീകങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കൂ.',
   'in_list'               => '{field} ഫീൽഡ് ഇതിലൊന്നായിരിക്കണം: {param}.',
   'integer'               => '{field} ഫീൽഡിൽ ഒരു സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'is_natural'            => '{field} ഫീൽഡിൽ അക്കങ്ങൾ മാത്രം അടങ്ങിയിരിക്കണം.',
   'is_natural_no_zero'    => '{field} ഫീൽഡിൽ അക്കങ്ങൾ മാത്രമേ അടങ്ങിയിരിക്കാവൂ, അത് പൂജ്യത്തേക്കാൾ വലുതായിരിക്കണം.',
   'is_not_unique'         => '{field} ഫീൽഡിൽ ഡാറ്റാബേസിൽ മുമ്പ് നിലവിലുള്ള ഒരു മൂല്യം അടങ്ങിയിരിക്കണം.',
   'is_unique'             => '{field} ഫീൽഡിൽ ഒരു അദ്വിതീയ മൂല്യം അടങ്ങിയിരിക്കണം.',
   'less_than'             => '{field} ഫീൽഡിൽ {param} എന്നതിനേക്കാൾ ഒരു സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'less_than_equal_to'    => '{field} ഫീൽഡിൽ {param} എന്നതിനേക്കാൾ കുറവോ തുല്യമോ ആയ ഒരു സംഖ്യ അടങ്ങിയിരിക്കണം.',
   'matches'               => '{field} ഫീൽഡ് {param} ഫീൽഡുമായി പൊരുത്തപ്പെടുന്നില്ല.',
   'max_length'            => '{field} ഫീൽഡിന് {param} പ്രതീകങ്ങളുടെ ദൈർഘ്യം കവിയാൻ പാടില്ല.',
   'min_length'            => '{field} ഫീൽഡ് കുറഞ്ഞത് {param} പ്രതീകങ്ങളെങ്കിലും ആയിരിക്കണം.',
   'not_equals'            => '{field} ഫീൽഡ് ആകരുത്: {param}.',
   'numeric'               => '{field} ഫീൽഡിൽ അക്കങ്ങൾ മാത്രം അടങ്ങിയിരിക്കണം.',
   'regex_match'           => '{field} ഫീൽഡ് ശരിയായ ഫോർമാറ്റിലല്ല.',
   'required'              => '{field} ഫീൽഡ് ആവശ്യമാണ്.',
   'required_with'         => '{field} {param} ഉള്ളപ്പോൾ {field} ഫീൽഡ് ആവശ്യമാണ്.',
   'required_without'      => '{field} {param} ഇല്ലാത്തപ്പോൾ {field} ഫീൽഡ് ആവശ്യമാണ്.',
   'string'                => '{field} ഫീൽഡ് സാധുവായ ഒരു സ്ട്രിംഗ് ആയിരിക്കണം.',
   'timezone'              => '{field} ഫീൽഡ് സാധുവായ സമയമേഖലയായിരിക്കണം.',
   'valid_base64'          => '{field} ഫീൽഡ് ഒരു സാധുവായ ബേസ് 64 സ്ട്രിംഗ് ആയിരിക്കണം.',
   'valid_email'           => '{field} ഫീൽഡിൽ സാധുവായ ഒരു ഇമെയിൽ വിലാസം അടങ്ങിയിരിക്കണം.',
   'valid_emails'          => '{field} ഫീൽഡിൽ സാധുവായ എല്ലാ ഇമെയിൽ വിലാസങ്ങളും അടങ്ങിയിരിക്കണം.',
   'valid_ip'              => '{field} ഫീൽഡിൽ സാധുവായ ഒരു ഐപി അടങ്ങിയിരിക്കണം.',
   'valid_url'             => '{field} ഫീൽഡിൽ സാധുവായ ഒരു URL അടങ്ങിയിരിക്കണം.',
   'valid_date'            => '{field} ഫീൽഡിൽ സാധുവായ തീയതി അടങ്ങിയിരിക്കണം.',

	// Credit Cards
   'valid_cc_num'          => '{field} സാധുവായ ക്രെഡിറ്റ് കാർഡ് നമ്പറായി തോന്നുന്നില്ല.',

	// Files
   'uploaded'              => '{field} സാധുവായ അപ്‌ലോഡുചെയ്‌ത ഫയലല്ല.',
   'max_size'              => '{field} ഒരു ഫയലിന്റെ വളരെ വലുതാണ്.',
   'is_image'              => '{field} സാധുവായതും അപ്‌ലോഡുചെയ്‌തതുമായ ഇമേജ് ഫയലല്ല.',
   'mime_in'               => '{field} ന് സാധുവായ ഒരു മൈം തരം ഇല്ല.',
   'ext_in'                => '{field} ന് സാധുവായ ഫയൽ വിപുലീകരണം ഇല്ല.',
   'max_dims'              => '{field} ഒന്നുകിൽ ഒരു ചിത്രമല്ല, അല്ലെങ്കിൽ അത് വളരെ വിശാലമോ ഉയരമോ ആണ്.',
];
