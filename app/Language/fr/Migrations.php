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
   'missingTable'      => 'La table des migrations doit être définie.',
//   'invalidType'       => 'Type de numérotation de migration spécifié invalide: {0}',
   'disabled'          => 'Les migrations ont été chargées mais sont désactivées ou mal paramétrées.',
   'notFound'          => 'Fichier de migration non trouvé : ',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => 'Aucun fichier de migration trouvé',
   'gap'               => 'Il y a un écart dans la séquence de migration du coté du numéro de version : ',
   'classNotFound'     => 'La classe de migration "%s" n\'a pas pu être trouvée.',
   'missingMethod'     => 'Il manque la méthode "%s" dans la classe de migration.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigre la base de données vers la dernière migration disponible.",
   'migHelpCurrent'    => "\t\tMigre la base de données vers la version définie comme 'actuelle' dans la configuration.",
   'migHelpVersion'    => "\tMigre la base de données vers la version {v}.",
   'migHelpRollback'   => "\tLance toutes les migrations 'down' vers la version 0.",
   'migHelpRefresh'    => "\t\tDésinstalle et relance toutes les migrations pour rafraîchir la base de données.",
   'migHelpSeed'       => "\tLance le 'seeder' nommé [name].",
   'migCreate'         => "\tCrée une nouvelle migration nommée [name]",
   'nameMigration'     => 'Nomme le fichier de migration',
   'badCreateName'     => 'Vous devez fournir un nom pour le fichier de migration.',
   'writeError'        => 'Erreur durant la création du fichier.',
   'migNumberError'    => 'Le numéro de migration doit comporter trois chiffres, et ne doit pas comporter de trous dans la séquence.',

   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
//   'toLatest'          => 'Migration vers la dernière version en cours...',
   'migInvalidVersion' => 'Numéro de version fourni invalide.',
   'toVersionPH'       => 'Migration vers la version %s en cours...',
   'toVersion'         => 'Migration vers la version actuelle en cours...',
   'rollingBack'       => 'Roll back de toutes les migrations en cours...',
   'noneFound'         => 'Aucune migration trouvée.',
   'on'                => 'Migré sur : ',
   'migSeeder'         => 'Nom du seeder',
   'migMissingSeeder'  => 'Vous devez fournir un nom de seeder.',
   'removed'           => 'Roll back en cours : ',
   'added'             => 'Exécution en cours : ',

   'version'           => 'Version',
   'filename'          => 'Nom de fichier',
];
