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
	'mustBeArray'          => 'O método de validação de email deve receber uma array.',
	'invalidAddress'       => 'Endereço de e-mail inválido: {0}',
	'attachmentMissing'    => 'Não foi possível localizar o seguinte anexo de e-mail: {0}',
	'attachmentUnreadable' => 'Não foi possível abrir este anexo: {0}',
	'noFrom'               => 'Não é possível enviar email sem o cabeçalho "From".',
	'noRecipients'         => 'Você deve incluir destinatários: To, Cc, ou Bcc',
	'sendFailurePHPMail'   => 'Não foi possível enviar e-mail usando PHP mail(). Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sendFailureSendmail'  => 'Não foi possível enviar e-mail usando PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sendFailureSmtp'      => 'Não foi possível enviar e-mail usando PHP SMTP. Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0}',
	'noSocket'             => 'Não foi possível abrir um soquete para o Sendmail. Por favor, verifique as configurações.',
	'noHostname'           => 'Você não especificou um hostname SMTP.',
	'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
	'noSMTPAuth'           => 'Erro: você deve atribuir um nome de usuário e senha SMTP.',
	'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
	'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0}',
	'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
	'SMTPDataFailure'      => 'Não foi possível enviar dados: {0}',
	'exitStatus'           => 'Código de status de saída: {0}',
];
