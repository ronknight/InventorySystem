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
   'missingTable'      => 'Turi būti nustatyta migracijų lentelė.',
   'disabled'          => 'Migracijos buvo įkeltos, bet yra išjungtos, arba nustatytos neteisingai.',
   'notFound'          => 'Migracijų failas nerastas: ',
   'batchNotFound'     => 'Tikslinis paketas nerastas: ',
   'empty'             => 'Nerasta migracijų failų',
   'gap'               => 'Migracijų sekoje netoli versijos numerio yra tarpas: ',
   'classNotFound'     => 'Migracijos klasė „%s“ nerasta.',
   'missingMethod'     => 'Migracijos klasei trūksta „%s“ metodo.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigruoja duomenų bazes naudojant vėliausią prieinamą migraciją.",
   'migHelpCurrent'    => "\t\tMigruoja duomenų bazę iki versijos, kuri konfigūracijoje nurodyta kaip 'current'.",
   'migHelpVersion'    => "\tMigruoja duomenų bazę iki versijos {v}.",
   'migHelpRollback'   => "\tVykdo visas migracijas 'down' iki versijos 0.",
   'migHelpRefresh'    => "\t\tIšinstaliuoja ir iš naujo įvykdo visas migracijas siekiant atšviežinti duomenų bazę.",
   'migHelpSeed'       => "\tvykdo sėjiką, pavadintą [name].",
   'migCreate'         => "\tSukuria naują migraciją vardu [name]",
   'nameMigration'     => 'Įvardinkite migracijos failą',
   'badCreateName'     => 'Turite nurodyti migracijos failo vardą.',
   'writeError'        => 'Klaida bandant sukurti failą.',
   'migNumberError'    => 'Migracijos numerį turi sudaryti trys skaitmenys, o jų sekoje neturi būti jokių tarpų.',

   'latest'            => 'Vykdomos visos migracijos...',
   'generalFault'      => 'Migracijos nepavyko!',
   'migInvalidVersion' => 'Nurodytas neteisingas versijos numeris.',
   'toVersionPH'       => 'Migruojama iki versijos %s...',
   'toVersion'         => 'Migruojama iki dabartinės versijos...',
   'rollingBack'       => 'Migracijos anuliuojamos iki paketo: ',
   'noneFound'         => 'Nerasta migracijų.',
   'on'                => 'Migruota: ',
   'migSeeder'         => 'Sėjiko vardas',
   'migMissingSeeder'  => 'Turite nurodyti sėjimo vardą.',
   'removed'           => 'Anuliuojama: ',
   'added'             => 'Vykdoma: ',

   'version'           => 'Versija',
   'filename'          => 'Failo pavadinimas',
];
