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
 * @author     Jozef Botka - xbotkaj on Github
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
   'missingTable'      => 'Musí byť nastavená tabuľka migrácií.',
//   'invalidType'       => 'Bol zadaný neplatný typ číslovania migrácie: {0}',
   'disabled'          => 'Migrácie boli načítané, ale sú deaktivované alebo nesprávne nastavené.',
   'notFound'          => 'Migračný súbor nebol nájdený: ',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => 'Nenašli sa žiadne migračné súbory',
   'gap'               => 'V migračnej sekvencii pri čísle verzie je medzera: ',
   'classNotFound'     => 'Migračnú triedu "%s" sa nepodarilo nájsť.',
   'missingMethod'     => 'V migračnej triede chýba metóda "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tMigruje databázu na najnovšiu dostupnú migráciu.",
   'migHelpCurrent'    => "\t\tMigruje databázu na verziu nastavenú ako aktuálnu v konfigurácii.",
   'migHelpVersion'    => "\tMigruje databázu na verziu {v}.",
   'migHelpRollback'   => "\tSpustí všetky migrácie 'nadol' na verziu 0.",
   'migHelpRefresh'    => "\t\tOdinštaluje a znovu spustí všetky migrácie do novej databázy.",
   'migHelpSeed'       => "\tSpustí seeder s menom [ name ].",
   'migCreate'         => "\tVytvorí novú migráciu s názvom [ name ]",
   'nameMigration'     => 'Pomenujte migračný súbor',
   'badCreateName'     => 'Musíte zadať názov migračného súboru.',
   'writeError'        => 'Chyba pri vytváraní súboru.',
   'migNumberError'    => 'Migračné číslo musí byť tri číslice a v sekvencii nesmú byť medzery.',

//   'toLatest'          => 'Prebieha migrácia na najnovšiu verziu...',
   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
   'migInvalidVersion' => 'Zadané neplatné číslo verzie.',
   'toVersionPH'       => 'Prebieha migrácia na verziu %s ...',
   'toVersion'         => 'Prebieha migrácia na aktuálnu verziu ...',
   'rollingBack'       => 'Vracajú sa späť všetky migrácie ...',
   'noneFound'         => 'Nenašli sa žiadne migrácie.',
   'on'                => 'Zmigraované na: ',
   'migSeeder'         => 'Meno seederu',
   'migMissingSeeder'  => 'Musíte zadať meno seederu.',
   'removed'           => 'Vraciam: ',
   'added'             => 'Beží: ',

   'version'           => 'Verzia',
   'filename'          => 'Názov súboru',
];
