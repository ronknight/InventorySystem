<?php

/**
 * Migrations language strings.
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
	// Migration Runner
   'missingTable'      => 'Потрібно встановити таблицю міграцій.',
   'disabled'          => 'Міграції завантажено, але вони відключені або налаштовані неправильно.',
   'notFound'          => 'Файл міграції не знайдено: ',
   'batchNotFound'     => 'Цільовий пакет не знайдено: ',
   'empty'             => 'Файлів міграції не знайдено.',
   'gap'               => 'У послідовності міграції біля номера версії є розрив: ',
   'classNotFound'     => 'Не вдалося знайти клас міграції "%s".',
   'missingMethod'     => 'У класі міграції відсутній метод "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tПереносить дані про останню доступну міграцію.",
   'migHelpCurrent'    => "\t\tПереносить базу даних у версію, встановлену як 'поточну' в конфігурації.",
   'migHelpVersion'    => "\tПеренос бази даних у версію {v}.",
   'migHelpRollback'   => "\tЗапуск всіх міграцій 'вниз' до версії 0.",
   'migHelpRefresh'    => "\t\tВидаляє і повторно запускає всі міграції для оновлення баз даних.",
   'migHelpSeed'       => "\tЗапускає сівалку з іменем [name].",
   'migCreate'         => "\tСтворює нову міграцію з іменем [name].",
   'nameMigration'     => 'Ім’я файлу міграції',
   'badCreateName'     => 'Слід вказати ім’я файлу міграції.',
   'writeError'        => 'Помилка при спробі створити файл.',
   'migNumberError'    => 'Номер міграції має бути з трьох цифр без пробілів.',
   'rollBackConfirm'   => 'Ви впевнені, що хочете відкотитися назад?',
   'refreshConfirm'    => 'Ви впевнені, що хочете оновити?',

   'latest'            => 'Запуск всіх нових міграцій...',
   'generalFault'      => 'Міграція не вдалась !',
   'migInvalidVersion' => 'Вказано некорректний номер версії.',
   'toVersionPH'       => 'Перехід на версію %s...',
   'toVersion'         => 'Перехід до поточної версії...',
   'rollingBack'       => 'Відкат міграції в: ',
   'noneFound'         => 'Міграцій не знайдено.',
   'on'                => 'Міграція на: ',
   'migSeeder'         => 'Ім’я сівалки',
   'migMissingSeeder'  => 'Слід вказати ім’я сівалки.',
   'removed'           => 'Відкат: ',
   'added'             => 'Запуск: ',

   'version'           => 'Версія',
   'filename'          => 'Ім’я файлу',
];
