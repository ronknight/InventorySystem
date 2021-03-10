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
   'missingTable'      => 'Должна быть установлена таблица миграций.',
   'disabled'          => 'Миграции были загружены, но отключены или неправильно настроены.',
   'notFound'          => 'Файл миграции не найден: ',
   'batchNotFound'     => 'Целевой пакет не найден: ',
   'empty'             => 'Не найдены файлы миграции.',
   'gap'               => 'Существует разрыв в последовательности миграции рядом с номером версии: ',
   'classNotFound'     => 'Не удалось найти класс миграции "%s".',
   'missingMethod'     => 'В классе миграции отсутствует метод "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tПереносит базу данных на последнюю доступную миграцию.",
   'migHelpCurrent'    => "\t\tПереносит базу данных в версию, установленную как 'текущая' в конфигурации.",
   'migHelpVersion'    => "\tПеренос базы данных в версию {v}.",
   'migHelpRollback'   => "\tЗапускает все миграции 'вниз' до версии 0.",
   'migHelpRefresh'    => "\t\tУдаляет и повторно запускает все миграции для обновления базы данных.",
   'migHelpSeed'       => "\tРаботает SEEDER имени [name].",
   'migCreate'         => "\tСоздает новую миграцию с именем [name].",
   'nameMigration'     => 'Имя файла миграции',
   'badCreateName'     => 'Необходимо указать имя файла миграции.',
   'writeError'        => 'Ошибка при попытке создать файл.',
   'migNumberError'    => 'Номер миграции должен состоять из трех цифр, и в нем не должно быть пробелов.',
   'rollBackConfirm'   => 'Вы уверены, что хотите откатиться назад ?',
   'refreshConfirm'    => 'Вы уверены, что хотите обновить ?',

   'latest'            => 'Запуск всех новых миграций...',
   'generalFault'      => 'Миграция не удалась !',
   'migInvalidVersion' => 'Указан неверный номер версии.',
   'toVersionPH'       => 'Переход к версии %s...',
   'toVersion'         => 'Переход к текущей версии...',
   'rollingBack'       => 'Откат миграции в: ',
   'noneFound'         => 'Миграций не обнаружено.',
   'on'                => 'Миграция на: ',
   'migSeeder'         => 'Имя SEEDER`a',
   'migMissingSeeder'  => 'Необходимо указать имя для SEEDER`a.',
   'removed'           => 'Откат: ',
   'added'             => 'Запуск: ',

   'version'           => 'Версия',
   'filename'          => 'Имя файла',
];
