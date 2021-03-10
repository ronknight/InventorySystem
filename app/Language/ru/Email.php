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
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'В метод проверки электронной почты должен быть передан массив.',
   'invalidAddress'       => 'Неверный адрес электронной почты: {0}',
   'attachmentMissing'    => 'Не удается найти следующее вложение: {0}',
   'attachmentUnreadable' => 'Не удается открыть это вложение: {0}',
   'noFrom'               => 'Не удается отправить почту без заголовка "From".',
   'noRecipients'         => 'Необходимо указать получателей "To".',
   'sendFailurePHPMail'   => 'Невозможно отправить письмо с помощью PHP_Mail().',
   'sendFailureSendmail'  => 'Невозможно отправить письмо с помощью PHP_SendMail().',
   'sendFailureSmtp'      => 'Невозможно отправить письмо с помощью PHP_SMTP().',
   'sent'                 => 'Ваше сообщение было отправлено по протоколу: {0}',
   'noSocket'             => 'Не удается открыть сокет для PHP_SendMail(). Пожалуйста, проверьте настройки.',
   'noHostname'           => 'Вы не указали имя хоста SMTP.',
   'SMTPError'            => 'Произошла следующая ошибка SMTP: {0}',
   'noSMTPAuth'           => 'Ошибка: Необходимо указать логин и пароль SMTP.',
   'failedSMTPLogin'      => 'Не удалось выполнить команду AUTH LOGIN. Ошибка: {0}',
   'SMTPAuthUsername'     => 'Не удалось проверить подлинность логина. Ошибка: {0}',
   'SMTPAuthPassword'     => 'Не удалось проверить подлинность пароля. Ошибка: {0}',
   'SMTPDataFailure'      => 'Не удается отправить данные: {0}',
   'exitStatus'           => 'Статус-код выхода: {0}',
];
