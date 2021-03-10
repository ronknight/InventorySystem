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
   'missingTable'    => 'Migrations Tabelle muss gesetzt sein.',
   'disabled'        => 'Migrationen wurden geladen, sind aber deaktiviert oder falsch eingerichtet.',
   'batchNotFound'   => 'Ziel-Batchnummer nicht gefunden: ',
   'notFound'        => 'Migrationsdatei nicht gefunden: ',
   'empty'           => 'Keine Migrationsdateien gefunden',
   'gap'             => 'Es gibt eine Lücke in der Migrationsfolge in der Nähe der Versionsnummer: ',
   'classNotFound'   => 'Die Migrationsklasse "%s" konnte nicht gefunden werden.',
   'missingMethod'   => 'Der Migrationsklasse fehlt eine "%s"-Methode.',

   // Migration Command
   'migHelpLatest'   => "\t\tMigriert die Datenbank auf die neueste verfügbare Migration.",
   'migHelpCurrent'  => "\t\tMigriert die Datenbank auf die Version, die in der Konfiguration als 'aktuell' eingestellt ist.",
   'migHelpVersion'  => "\tMigriert die Datenbank auf die Version {v}.",
   'migHelpRollback' => "\tFührt alle Migrationen 'nach unten' zur Version 0 durch.",
   'migHelpRefresh'  => "\t\tDeinstalliert und führt alle Migrationen erneut durch, um die Datenbank zu aktualisieren.",
   'migHelpSeed'     => "\tSpeichert Beispieldaten mit dem Namen [name].",
   'migCreate'       => "\tErstellt eine neue Migration mit dem Namen [name]",
   'nameMigration'   => 'Benennen der Migrationsdatei',
   'badCreateName'   => 'Es muss ein gültiger Migrations-Dateiname angegeben werden.',
   'writeError'      => 'Fehler beim Erstellen der Datei.',
   'migNumberError'  => 'Die Migrationsnummer muss dreistellig sein, und es dürfen keine Lücken in der Sequenz sein.',
   'rollBackConfirm' => 'Soll der Datenbank-Rollback ausgeführt werden?',
   'refreshConfirm'  => 'Soll die Datenbank wirklich aktualisiert werden?',
   
   'latest'            => 'Neue Migrationen ausführen...',
   'generalFault'      => 'Migration fehlgeschlagen!',
   'migInvalidVersion' => 'Ungültige Versionsnummer angegeben.',
   'toVersionPH'       => 'Migration auf Version %s...',
   'toVersion'         => 'Migration auf die aktuelle Version...',
   'rollingBack'       => 'Rollback aller Migrationen...',
   'noneFound'         => 'Es wurden keine Migrationen gefunden..',
   'on'                => 'Migriert nach: ',
   'migSeeder'         => 'Beispieldaten-Name',
   'migMissingSeeder'  => 'Es muss ein Beispieldaten-Name angegeben werden.',
   'removed'           => 'Zurückrollen nach: ',
   'added'             => 'Ausführen: ',

   'version'  => 'Version',
   'filename' => 'Dateiname',
];
