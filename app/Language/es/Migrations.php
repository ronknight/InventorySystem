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
   'missingTable'      => 'Debe establecer la tabla de migrado.',
   'disabled'          => 'Las migraciones se han cargado pero están deshabilitadas o configuradas incorrectamente.',
   'notFound'          => 'Archivo de migración no encontrado: ',
   'batchNotFound'     => 'Lote objetivo no encontrado: ',
   'empty'             => 'No se han encontrado archivos de migración',
   'gap'               => 'Hay un hueco en la secuencia de migración cerca del número de versión: ',
   'classNotFound'     => 'La clase de migración "%s" no se ha encontrado.',
   'missingMethod'     => 'La clase de migración no ha encontrado el método "%s".',

    // Migration Command
   'migHelpLatest'     => "\t\tMigra la base de datos a la última versión disponible.",
   'migHelpCurrent'    => "\t\tMigra la base de datos a la versión marcado como 'current' en configuración.",
   'migHelpVersion'    => "\tMigra la base de datos a la versión {v}.",
   'migHelpRollback'   => "\tEjecuta todas las migraciones 'down' a la versión 0.",
   'migHelpRefresh'    => "\t\tDesinstala y reejecuta todas las migraciones para refrescar la base de datos.",
   'migHelpSeed'       => "\tEjecuta la semilla de nombre [name].",
   'migCreate'         => "\tCrea una nueva migración llamada [name]",
   'nameMigration'     => 'Nombre el archivo de migración',
   'badCreateName'     => 'Debe establecer un nombre al archivo de migración.',
   'writeError'        => 'Error al intentar crear el archivo.',
   'migNumberError'    => 'El número de migración debe tener tres dígitos y no debe haber espacios en la secuencia.',

   'latest'            => 'Migrando a la última versión...',
   'generalFault'      => '¡La migración falló!',
   'migInvalidVersion' => 'Número de versión incorrecta.',
   'toVersionPH'       => 'Migrando a la versión %s...',
   'toVersion'         => 'Migrando a la versión actual...',
   'rollingBack'       => 'Deshaciendo todas las migraciones...',
   'noneFound'         => 'No se han encontrado migraciones.',
   'on'                => 'Migrado en: ',
   'migSeeder'         => 'Nombre de semilla',
   'migMissingSeeder'  => 'Debe indicar un nombre de semilla.',
   'removed'           => 'Desinstalando: ',
   'added'             => 'Ejecutando: ',

   'version'           => 'Versión',
   'filename'          => 'Nombre de archivo',
];
