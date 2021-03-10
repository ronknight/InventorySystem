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
	'mustBeArray'          => 'Metoda weryfikacji e-maila musi być przekazana w tablicy.',
	'invalidAddress'       => 'Niepoprawny adres e-mail: {0}',
	'attachmentMissing'    => 'Nie można zlokalizować następujących załączników: {0}',
	'attachmentUnreadable' => 'Nie można otworzyć następujących załączników: {0}',
	'noFrom'               => 'Nie można wysłać wiadomości bez nagłówka "From".',
	'noRecipients'         => 'Należy dodać odbiorców: To, Cc lub Bcc',
	'sendFailurePHPMail'   => 'Nie można wysłać e-maila za pomocą PHP mail(). Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sendFailureSendmail'  => 'Nie można wysłać e-maila za pomocą PHP Sendmail. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sendFailureSmtp'      => 'Nie można wysłać e-maila za pomoc PHP SMTP. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sent'                 => 'Twój e-mail został pomyślnie wysłany za pomocą metody: {0}',
	'noSocket'             => 'Nie można otworzyć socketu do Sendmail. Proszę sprawdzić ustawienia.',
	'noHostname'           => 'Nie podano nazwy hosta SMTP.',
	'SMTPError'            => 'Wystąpił następujący błąd SMTP: {0}',
	'noSMTPAuth'           => 'Błąd: Należy podać nazwę użytkownika i hasło SMTP.',
	'failedSMTPLogin'      => 'Błąd przy wysyłaniu komendy AUTH LOGIN. Błąd: {0}',
	'SMTPAuthUsername'     => 'Błąd autentykacji nazwy użytkownika. Błąd: {0}',
	'SMTPAuthPassword'     => 'Błąd autentykacji hasła. Błąd: {0}',
	'SMTPDataFailure'      => 'Nie można wysłać danych: {0}',
	'exitStatus'           => 'Status kodu wyjścia: {0}',
];
