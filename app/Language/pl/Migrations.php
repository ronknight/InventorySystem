<?php

/**
 * Migration language strings.
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
	// Migration Runner
	'missingTable'    => 'Tabela migracji musi zostać ustawiona.',
//	'invalidType'     => 'Określono niepoprawny typ numerowania migracji: {0}',
	'disabled'        => 'Migracje zostały załadowane, ale są wyłączone lub niepoprawnie skonfigurowane.',
	'notFound'        => 'Nie znaleziono pliku migracji: ',
	'batchNotFound'     => 'Target batch not found: ',
	'empty'           => 'Nie znaleziono plików migracji',
	'gap'             => 'W sekwencji migracji znajduje się luka w pobliżu numeru wersji: ',
	'classNotFound'   => 'Nie można znaleźć klasy migracji "%s".',
	'missingMethod'   => 'W klasie migracji brakuje metody "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tPrzeprowadza migrację bazy danych do najnowszej dostępnej migracji.",
	'migHelpCurrent'  => "\t\tMigracja bazy danych do wersji ustawionej jako \"aktualny\" w konfiguracji.",
	'migHelpVersion'  => "\tMigracja bazy danych do wersji {v}.",
	'migHelpRollback' => "\tUruchamia wszystkie migracje \"w dół\" do wersji 0.",
	'migHelpRefresh'  => "\t\tOdinstalowuje i ponownie uruchamia wszystkie migracje, aby odświeżyć bazę danych.",
	'migHelpSeed'     => "\tUruchamia siewnik o nazwie [name].",
	'migCreate'       => "\tTworzy nową migrację o nazwie [name]",
	'nameMigration'   => 'Nazwij plik migracji',
	'badCreateName'   => 'Musisz podać nazwę pliku migracji.',
	'writeError'      => 'Błąd podczas próby utworzenia pliku.',
	'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',

	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
//	'toLatest'          => 'Migrowanie do najnowszej wersji...',
	'migInvalidVersion' => 'Podano nieprawidłowy numer wersji.',
	'toVersionPH'       => 'Migrowanie do wersji %s...',
	'toVersion'         => 'Migracja do bieżącej wersji...',
	'rollingBack'       => 'Wycofuję wszystkie migracje...',
	'noneFound'         => 'Nie znaleziono migracji.',
	'on'                => 'Migracja włączona: ',
	'migSeeder'         => 'Nazwa Seedera',
	'migMissingSeeder'  => 'Musisz podać nazwę seedera.',
	'removed'           => 'Wycofywanie: ',
	'added'             => 'Uruchomienie: ',

	'version'           => 'Wersja',
	'filename'          => 'Nazwa pliku',
];
