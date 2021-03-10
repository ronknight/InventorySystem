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
 * @author     Luca Marco Rasia
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
	'missingTable'    => 'La tavola delle Migrazioni deve essere indicata.',
//	'invalidType'     => 'E\' stata specificata una numerazione di migrazione non valida: {0}',
	'disabled'        => 'Le Migrazioni sono state caricate ma sono disabilitate o configurate in modo non corretto.',
	'notFound'        => 'File di Migrazione non trovato: ',
	'batchNotFound'     => 'Target batch not found: ',
	'empty'           => 'Nessun file di Migrazione è stato trovato',
	'gap'             => 'Vi è una lacuna nella sequenza di migrazione vicino al numero di versione: ',
	'classNotFound'   => 'Non è possibile trovare la classe di migrazione "%s" .',
	'missingMethod'   => 'Alla classe di migrazione manca un metodo "%s" .',

	// Migration Command
	'migHelpLatest'   => "\t\tEffettua la migrazione del database alla ultima migrazione disponibile.",
	'migHelpCurrent'  => "\t\tEffettua la migrazione del database alla versione selezionata come 'current' nella configurazione.",
	'migHelpVersion'  => "\tEffettua la migrazione del database alla versione {v}.",
	'migHelpRollback' => "\tElabora tutte le migrazioni 'down' alla versione 0.",
	'migHelpRefresh'  => "\t\tDisinstalla e rielabora tutte le migrazioni a un database riavviato.",
	'migHelpSeed'     => "\tAvvia il seminatore denominato [name].",
	'migCreate'       => "\tCrea una nuova migrazione denominata [name]",
	'nameMigration'   => 'Denomina il file di migrazione',
	'badCreateName'   => 'Devi fornire un nome al file di migrazione.',
	'writeError'      => 'Si è verificato un errore tentando di creare il file.',
	'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',

	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
//	'toLatest'          => 'Migrazione verso la più recente versione...',
	'migInvalidVersion' => 'Fornito un numero di versione non valido.',
	'toVersionPH'       => 'Migrazione verso la versione %s...',
	'toVersion'         => 'Migrazione verso la versione corrente...',
	'rollingBack'       => 'Ritorna indietro tutte le migrazioni...',
	'noneFound'         => 'Nessuna migrazione è stata trovata.',
	'on'                => 'Migrato a: ',
	'migSeeder'         => 'Nome seminatrice',
	'migMissingSeeder'  => 'Devi fornire un nome seminatrice.',
	'removed'           => 'Tornando indietro: ',
	'added'             => 'Elaborazione: ',

	'version'           => 'Versione',
	'filename'          => 'Nome file',
];
