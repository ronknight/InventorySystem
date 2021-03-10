<?php
/**
 * Email language strings.
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
   'mustBeArray'          => 'ഇമെയിൽ മൂല്യനിർണ്ണയ രീതി ഒരു അറേ കൈമാറണം.',
   'invalidAddress'       => 'അസാധുവായ ഇമെയിൽ വിലാസം: {0}',
   'attachmentMissing'    => 'ഇനിപ്പറയുന്ന ഇമെയിൽ അറ്റാച്ചുമെന്റ് കണ്ടെത്താനായില്ല: {0}',
   'attachmentUnreadable' => 'ഈ അറ്റാച്ചുമെന്റ് തുറക്കാനായില്ല: {0}',
   'noFrom'               => '"From" തലക്കെട്ട് ഇല്ലാതെ മെയിൽ അയയ്ക്കാൻ കഴിയില്ല.',
   'noRecipients'         => 'നിങ്ങൾ സ്വീകർത്താക്കളെ ഉൾപ്പെടുത്തണം: ടു, സിസി അല്ലെങ്കിൽ ബിസിസി',
   'sendFailurePHPMail'   => 'പി‌എച്ച്പി മെയിൽ () ഉപയോഗിച്ച് ഇമെയിൽ അയയ്‌ക്കാനായില്ല. ഈ രീതി ഉപയോഗിച്ച് മെയിൽ‌ അയയ്‌ക്കുന്നതിന് നിങ്ങളുടെ സെർ‌വർ‌ ക്രമീകരിച്ചിരിക്കില്ല.',
   'sendFailureSendmail'  => 'PHP Sendmail ഉപയോഗിച്ച് ഇമെയിൽ അയയ്ക്കാൻ കഴിയില്ല. ഈ രീതി ഉപയോഗിച്ച് മെയിൽ‌ അയയ്‌ക്കുന്നതിന് നിങ്ങളുടെ സെർ‌വർ‌ ക്രമീകരിച്ചിരിക്കില്ല.',
   'sendFailureSmtp'      => 'PHP SMTP ഉപയോഗിച്ച് ഇമെയിൽ അയയ്‌ക്കാനായില്ല. ഈ രീതി ഉപയോഗിച്ച് മെയിൽ‌ അയയ്‌ക്കുന്നതിന് നിങ്ങളുടെ സെർ‌വർ‌ ക്രമീകരിച്ചിരിക്കില്ല.',
   'sent'                 => 'ഇനിപ്പറയുന്ന പ്രോട്ടോക്കോൾ ഉപയോഗിച്ച് നിങ്ങളുടെ സന്ദേശം വിജയകരമായി അയച്ചു: {0}',
   'noSocket'             => 'സെന്റ് മെയിലിലേക്ക് ഒരു സോക്കറ്റ് തുറക്കാനായില്ല. ക്രമീകരണങ്ങൾ പരിശോധിക്കുക.',
   'noHostname'           => 'നിങ്ങൾ ഒരു SMTP ഹോസ്റ്റ്നാമം വ്യക്തമാക്കിയിട്ടില്ല.',
   'SMTPError'            => 'ഇനിപ്പറയുന്ന SMTP പിശക് നേരിട്ടു: {0}',
   'noSMTPAuth'           => 'പിശക്: നിങ്ങൾ ഒരു SMTP ഉപയോക്തൃനാമവും പാസ്‌വേഡും നൽകണം.',
   'failedSMTPLogin'      => 'AUTH LOGIN കമാൻഡ് അയയ്‌ക്കുന്നതിൽ പരാജയപ്പെട്ടു. പിശക്: {0} ',
   'SMTPAuthUsername'     => 'ഉപയോക്തൃനാമം പ്രാമാണീകരിക്കുന്നതിൽ പരാജയപ്പെട്ടു. പിശക്: {0} ',
   'SMTPAuthPassword'     => 'പാസ്‌വേഡ് പ്രാമാണീകരിക്കുന്നതിൽ പരാജയപ്പെട്ടു. പിശക്: {0} ',
   'SMTPDataFailure'      => 'ഡാറ്റ അയയ്‌ക്കാനായില്ല: {0}',
   'exitStatus'           => 'സ്റ്റാറ്റസ് കോഡിൽ നിന്ന് പുറത്തുകടക്കുക: {0}',
];
