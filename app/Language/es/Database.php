<?php

/**
 * Database language strings.
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
   'invalidEvent'                     => '{0} no es una llamada válida a un Evento de Modelo.', // '{0} is not a valid Model Event callback.',
   'invalidArgument'                  => 'Debes proporcionar un {0} valido.', // 'You must provide a valid {0}.',
   'invalidAllowedFields'             => 'Los campos permitidos deben especificarse para el modelo: {0}', // 'Allowed fields must be specified for model: {0}',
   'emptyDataset'                     => 'No hay datos para {0}', // 'There is no data to {0}.',
   'failGetFieldData'                 => 'No se pudieron obtener datos del campo de la base de datos.', // 'Failed to get field data from database.',
   'failGetIndexData'                 => 'No se pudieron obtener datos de índice de la base de datos.', // 'Failed to get index data from database.',
   'failGetForeignKeyData'            => 'No se pudieron obtener datos de clave externa de la base de datos.', // 'Failed to get foreign key data from database.',
   'parseStringFail'                  => 'Se produjo un error al analizar la clave de la cadena.', // 'Parsing key string failed.',
   'featureUnavailable'               => 'Esta característica no está disponible para la base de datos que estás utilizando.', // 'This feature is not available for the database you are using.',
   'tableNotFound'                    => 'No se encontró la tabla `{0}` en la base de datos actual.', // 'Table `{0}` was not found in the current database.',
   'noPrimaryKey'                     => 'La clase de modelo `{0}` no especifica una clave primaria.', // '`{0}` model class does not specify a Primary Key.',
   'noDateFormat'                     => 'La clase de modelo `{0}` no tiene un dateFormat válido.', // '`{0}` model class does not have a valid dateFormat.',
   'fieldNotExists'                   => 'No se encontró el campo `{0}`.', // 'Field `{0}` not found.',
   'forEmptyInputGiven'               => 'Se proporciona una declaración vacía para el campo `{0}`', // 'Empty statement is given for the field `{0}`',
   'forFindColumnHaveMultipleColumns' => 'Solo se permite una sola columna en el nombre de la columna.', // 'Only single column allowed in Column name.',
];
