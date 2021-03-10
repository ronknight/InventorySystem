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
 * @author     Pavel Tajduš - PavelTajdus on Github
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
   'missingTable'      => 'Musí byť nastavená tabulka migrací.',
   'invalidType'       => 'Bol zadán neplatný typ číslování migrace: {0}',
   'disabled'          => 'Migrace byly načteny, ale jsou deaktivované nebo špatně nastavené.',
   'notFound'          => 'Migrační soubor nebyl nalezen: ',
   'batchNotFound'     => 'Cílová dávka nebyla nalezena: ',
   'empty'             => 'Nenalezeny žádné migrační soubory',
   'gap'               => 'V migrační sekvenci u čísle verze je mezera: ',
   'classNotFound'     => 'Migrační třídu "%s" se nepodařilo najít.',
   'missingMethod'     => 'V migrační třídě chybí metoda "%s".',

    // Migration Command
   'migHelpLatest'     => "\t\tMigruje databázi na nejnovější dostupnou migraci.",
   'migHelpCurrent'    => "\t\tMigruje databázi na verzi nastavenou v konfiguraci jako aktuální.",
   'migHelpVersion'    => "\tMigruje databázi na verzi {v}.",
   'migHelpRollback'   => "\tSpustí všechny migrace vrácením na verzi 0.",
   'migHelpRefresh'    => "\t\tOdinstaluje a znovu spustí všechny migrace do nové databáze.",
   'migHelpSeed'       => "\tSpustí seeder se jménem [ name ].",
   'migCreate'         => "\tVytvoří novou migraci s názvem [ name ]",
   'nameMigration'     => 'Pojmenujte migrační soubor',
   'badCreateName'     => 'Musíte zadať název migračního souboru.',
   'writeError'        => 'Chyba při vytváření souboru.',
   'migNumberError'    => 'migrační číslo musí být tři číslice a v sekvenci nesmí být mezery.',

   'toLatest'          => 'Probíhá migrace na nejnovější verzi...',
   'latest'            => 'Spouštění všech nových migrací...',
   'generalFault'      => 'Migrace selhala!',
   'migInvalidVersion' => 'Zadáno neplatné číslo verze.',
   'toVersionPH'       => 'Probíhá migrace na verzi %s ...',
   'toVersion'         => 'Probíhá migrace na aktuální verzi ...',
   'rollingBack'       => 'Vracejí se zpět všechny migrace ...',
   'noneFound'         => 'Nenašly se žádné migrace.',
   'on'                => 'Zmigrováno na: ',
   'migSeeder'         => 'Jméno seederu',
   'migMissingSeeder'  => 'Musíte zadat jméno seederu.',
   'removed'           => 'Vracím: ',
   'added'             => 'Běží: ',

   'version'           => 'Verze',
   'filename'          => 'Název souboru',
];
