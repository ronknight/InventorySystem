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
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
    'mustBeArray'          => 'De email validatie-methode moet worden aangeroepen met een array.',
    'invalidAddress'       => 'Ongeldige emailadres: {0}',
    'attachmentMissing'    => 'Kon de volgende bijlage niet vinden: {0}',
    'attachmentUnreadable' => 'Kon de volgende bijlage niet openen: {0}',
    'noFrom'               => '"From" header ontbreekt, kan geen mail versturen.',
    'noRecipients'         => 'U moet minstens één geadresseerde zijn: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Kon geen email versturen via mail(). Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sendFailureSendmail'  => 'Kon geen email versturen PHP Sendmail. Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sendFailureSmtp'      => 'Kon geen email versturen PHP SMTP. Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sent'                 => 'Uw bericht is succesvol verstuurd met de volgende methode: {0}',
    'noSocket'             => 'Kon geen socket openen naar Sendmail. Gelieve uw instellingen na te kijken.',
    'noHostname'           => 'SMTP hostname is niet gespecifieerd.',
    'SMTPError'            => 'De volgende SMTP fout heeft zich voorgedaan: {0}',
    'noSMTPAuth'           => 'Fout: U moet een SMTP gebruikersnaam en wachtwoord opgeven.',
    'failedSMTPLogin'      => 'Versturen van AUTH LOGIN commando gefaald. Fout: {0}',
    'SMTPAuthUsername'     => 'Authenticatie gebruikersnaam gefaald. Fout: {0}',
    'SMTPAuthPassword'     => 'Authenticatie wachtwoord gefaald. Fout: {0}',
    'SMTPDataFailure'      => 'Kon geen data versturen: {0}',
    'exitStatus'           => 'Exit status code: {0}',
];
