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
   'mustBeArray'          => 'В метод перевірки електронної пошти мусить передаватися масив.',
   'invalidAddress'       => 'Некорректна адреса електронної пошти: {0}',
   'attachmentMissing'    => 'Не вдається знайти наступне вкладення: {0}',
   'attachmentUnreadable' => 'Не вдається відкрити це вкладення: {0}',
   'noFrom'               => 'Не вдається відправити пошту без заголовку "From".',
   'noRecipients'         => 'Слід вказати отримувача "To".',
   'sendFailurePHPMail'   => 'Неможливо відправити лист за допомогою PHP_Mail().',
   'sendFailureSendmail'  => 'Неможливо відправити лист за допомогою PHP_SendMail().',
   'sendFailureSmtp'      => 'Неможливо відправити лист за допомогою PHP_SMTP().',
   'sent'                 => 'Ваше повідомлення відправлено по протоколу: {0}',
   'noSocket'             => 'Не вдається відкрити сокет для PHP_SendMail(). Будь ласка, перевірте налаштування.',
   'noHostname'           => 'Ви не вказали ім’я хосту SMTP.',
   'SMTPError'            => 'Трапилась така помилка SMTP: {0}',
   'noSMTPAuth'           => 'Помилка: Слід вказати логін та пароль SMTP.',
   'failedSMTPLogin'      => 'Не вдалось виконати команду AUTH LOGIN. Помилка: {0}',
   'SMTPAuthUsername'     => 'Не вдалося автентифікувати ім’я користувача. Помилка: {0}',
   'SMTPAuthPassword'     => 'Не вдалось автентифікувати пароль. Помилка: {0}',
   'SMTPDataFailure'      => 'Не вдалось відправити дані: {0}',
   'exitStatus'           => 'Статус-код завершення: {0}',
];
