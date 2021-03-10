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
   'missingTable'      => 'Migreringstabell må være satt.',
//   'invalidType'       => 'En ugyldig overføringsnummerering ble spesifisert: {0}',
   'disabled'          => 'Overføringer er lastet, men er deaktivert eller feil konfigurert.',
   'notFound'          => 'Migreringsfil ikke funnet: ',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => 'Ingen migrasjonsfiler funnet',
   'gap'               => 'Det er et gap i migrasjonshistorikken i nærheten av versjonsnummeret: ',
   'classNotFound'     => 'Migrasjonsklassen "%s" ble ikke funnet.',
   'missingMethod'     => 'Migrasjonsklassen mangler en "%s" -metode.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigrerer databasen til den siste tilgjengelige migreringen.",
   'migHelpCurrent'    => "\t\tMigrerer databasen til versjonssettet i konfigurasjonen som 'aktuell'.",
   'migHelpVersion'    => "\tMigrerer databasen til versjon {v}.",
   'migHelpRollback'   => "\tUtfører alle overføringer 'ned' til versjon 0.",
   'migHelpRefresh'    => "\t\tAvinstallerer og kjører alle migrasjoner for å oppdatere databasen.",
   'migHelpSeed'       => "\tLagrer eksempeldata etter navn [name].",
   'migCreate'         => "\tOpprett en ny migrering med navnet [name]",
   'nameMigration'     => 'Gi overføringsfilen navn',
   'badCreateName'     => 'Et gyldig overføringsfilnavn må spesifiseres.',
   'writeError'        => 'Feil ved oppretting av filen.',
   'migNumberError'    => 'Overføringsnummeret må være tre sifre, og det må ikke være noen hull i sekvensen.',

   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
//   'toLatest'          => 'Overføring til siste versjon...',
   'migInvalidVersion' => 'Ugyldig versjonsnummer spesifisert.',
   'toVersionPH'       => 'Overføring til versjon %s...',
   'toVersion'         => 'Overføring til gjeldende versjon...',
   'rollingBack'       => 'Tilbakestiller migrering...',
   'noneFound'         => 'Ingen migrasjoner ble funnet..',
   'on'                => 'Migrert til: ',
   'migSeeder'         => 'Eksempel data Navn',
   'migMissingSeeder'  => 'Et eksempeldata må spesifiseres.',
   'removed'           => 'rulle tilbake til: ',
   'added'             => 'utføre: ',

   'version'           => 'Versjon',
   'filename'          => 'filnavn',
];
