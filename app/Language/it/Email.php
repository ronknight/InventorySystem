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
	'mustBeArray'          => 'Il metodo di validazione della email deve essere passato come array.',
	'invalidAddress'       => 'Indirizzo email non valido: {0}',
	'attachmentMissing'    => 'Non è stato possibile trovare il seguente allegato alla email: {0}',
	'attachmentUnreadable' => 'Impossibile aprire questo allegato: {0}',
	'noFrom'               => 'Non si può inviare una mail senza "Da" nella intestazione.',
	'noRecipients'         => 'Devi inserire i destinatari: A, Cc, o Ccn',
	'sendFailurePHPMail'   => 'Impossibile inviare email usando PHP mail(). Il tuo server potrebbe non essere configurato per inviare email usando questo methodo.',
	'sendFailureSendmail'  => 'Impossibile inviare email usando PHP Sendmail. Il tuo server potrebbe non essere configurato per inviare email usando questo methodo.',
	'sendFailureSmtp'      => 'Impossibile inviare email usando PHP SMTP. Il tuo server potrebbe non essere configurato per inviare email usando questo methodo.',
	'sent'                 => 'Il tuo messaggio è stato inviato con successo utilizzando il seguente protocollo: {0}',
	'noSocket'             => 'Non possibile aprire un socket a Sendmail. Prego verifica le configurazioni.',
	'noHostname'           => 'Non hai specificato alcun hostname SMTP.',
	'SMTPError'            => 'Si è verificato il seguente errore SMTP: {0}',
	'noSMTPAuth'           => 'Errore: devi indicare uno username e una password per SMTP.',
	'failedSMTPLogin'      => 'Fallito l\'invio del comando AUTH LOGIN. Errore: {0}',
	'SMTPAuthUsername'     => 'Fallita l\'autenticazione dello username. Errore: {0}',
	'SMTPAuthPassword'     => 'Fallita l\'autenticazione della password. Errore: {0}',
	'SMTPDataFailure'      => 'Impossibile inviare i dati: {0}',
	'exitStatus'           => 'Codice dello stato di uscita: {0}',
];
