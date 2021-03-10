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
   'mustBeArray'          => 'El. adreso patikrinimo metodui turi būti perduotas masyvas.',
   'invalidAddress'       => 'Nevalidus el. pašto adresas: {0}',
   'attachmentMissing'    => 'Nepavyksta rasti šio el. laiško priedo: {0}',
   'attachmentUnreadable' => 'Nepavyksta atverti šio priedo: {0}',
   'noFrom'               => 'Negalima siųsti el. laiško be „From“ antraštės.',
   'noRecipients'         => 'Turite įtraukti gavėjus: To, Cc, arba Bcc',
   'sendFailurePHPMail'   => 'Nepavyksta siųsti laiško naudojant PHP mail() funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sendFailureSendmail'  => 'Nepavyksta siųsti laiško naudojant PHP Sendmail funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sendFailureSmtp'      => 'Nepavyksta siųsti laiško naudojant PHP SMTP funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sent'                 => 'Jūsų laiškas buvo išsiųstas naudojant šį protokolą: {0}',
   'noSocket'             => 'Nepavyksta atverti lizdo į Sendmail. Prašome patikrinti nustatymus.',
   'noHostname'           => 'Jūs nenurodėte SMTP mazgo pavadinimo.',
   'SMTPError'            => 'Buvo susidurta su šia SMTP klaida: {0}',
   'noSMTPAuth'           => 'Klaida: turite nurodyti SMTP vartotojo vardą ir slaptažodį.',
   'failedSMTPLogin'      => 'Nepavyko išsiųsti AUTH LOGIN komandos. Klaida: {0}',
   'SMTPAuthUsername'     => 'Nepavyko autentifikuotis šiuo vardu. Klaida: {0}',
   'SMTPAuthPassword'     => 'Nepavyko autentifikuotis šiuo slaptažodžiu. Klaida: {0}',
   'SMTPDataFailure'      => 'Nepavyko išsiųsti duomenų: {0}',
   'exitStatus'           => 'Išėjimo būklės kodas: {0}',
];
