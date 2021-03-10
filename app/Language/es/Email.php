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
 * @author     Fernán Castro Asensio
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'mustBeArray'          => 'El método de validación del email debe ser pasado en array.',
	'invalidAddress'       => 'Dirección de email inválida: {0}',
	'attachmentMissing'    => 'No se ha podido localizar el adjunto: {0}',
	'attachmentUnreadable' => 'No se ha podido abrir el adjunto: {0}',
	'noFrom'               => 'No se pude enviar un email sin cabecera "Para".',
	'noRecipients'         => 'Debe incluir destinatarios: Para, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Incapaz de enviar email usando PHP mail(). Su servidor puede no estar configurado para enviar correos usando este método.',
	'sendFailureSendmail'  => 'Incapaz de enviar email usando PHP Sendmail. Su servidor puede no estar configurado para enviar correos usando este método.',
	'sendFailureSmtp'      => 'Incapaz de enviar email usando PHP SMTP. Su servidor puede no estar configurado para enviar correos usando este método.',
	'sent'                 => 'Su mensaje ha sido enviado correctamente utilizando el siguiente protocolo: {0}',
	'noSocket'             => 'Incapaz de abrir un socket a Sendmail. Compruebe la configuración.',
	'noHostname'           => 'No ha especificado un nombre de host SMTP.',
	'SMTPError'            => 'Se han encontrado los siguientes errores SMTP: {0}',
	'noSMTPAuth'           => 'Error: Debe especificar un usuario y contraseña SMTP.',
	'failedSMTPLogin'      => 'Ha fallado el envío del comando AUTH LOGIN. Error: {0}',
	'SMTPAuthUsername'     => 'Ha fallado la autentificación del usuario. Error: {0}',
	'SMTPAuthPassword'     => 'Ha fallado la autentificación de la contraseña. Error: {0}',
	'SMTPDataFailure'      => 'Incapaz de enviar datos: {0}',
	'exitStatus'           => 'Código de estado de salida: {0}',
];
