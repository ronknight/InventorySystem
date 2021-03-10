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
   'mustBeArray'          => 'Die E-Mail-Validierungsmethode muss in einem Array übergeben werden.',
   'invalidAddress'       => 'Ungültige E-Mailadresse: {0}',
   'attachmentMissing'    => 'Der folgende E-Mail-Anhang konnte nicht gefunden werden: {0}',
   'attachmentUnreadable' => 'Fehler beim Öffnen des Attachments: {0}',
   'noFrom'               => 'E-Mails ohne "From"-Header können nicht gesendet werden.',
   'noRecipients'         => 'Kein Empfänger gesetzt. Wert für To, Cc oder Bcc erforderlich',
   'sendFailurePHPMail'   => 'E-Mailversand mit PHP mail() fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sendFailureSendmail'  => 'E-Mailversand mit Sendmail fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sendFailureSmtp'      => 'E-Mailversand mit PHP SMTP fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sent'                 => 'Die Nachricht wurde erfolgreich mit folgendem Protokoll gesendet: {0}',
   'noSocket'             => 'Der socket für Sendmail konnte nicht geöffnet werden. Bitte Einstellungen prüfen.',
   'noHostname'           => 'SMTP-Hostname ist nicht definiert',
   'SMTPError'            => 'Folgender SMTP-Fehler ist aufgetreten: {0}',
   'noSMTPAuth'           => 'Fehler: Es muss ein SMTP Benutzername und Passwort zugeordnet werden.',
   'failedSMTPLogin'      => 'Das AUTH LOGIN konnte nicht gesendet werden. Fehler: {0}',
   'SMTPAuthUsername'     => 'Der Benutzername konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPAuthPassword'     => 'Das Passwort konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPDataFailure'      => 'Daten können nicht gesendet werden: {0}',
   'exitStatus'           => 'Exit Status Code: {0}',
];
