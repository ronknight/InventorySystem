<?php

/**
 * Validation language strings.
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
	// Core Messages
   'noRuleSets'            => 'No se han establecido reglas en la configuración de validación.',
   'ruleNotFound'          => '{0} no es una regla de validación válida.',
   'groupNotFound'         => '{0} no es un grupo de reglas de validación.',
   'groupNotArray'         => '{0} el grupo de validación debe ser un array.',
   'invalidTemplate'       => '{0} no es un modelo de validación válido.',

	// Rule Messages
   'alpha'                 => 'El campo {field} solo puede contener caracteres alfabéticos.',
   'alpha_dash'            => 'El campo {field} solo puede contener caracteres alfanuméricos, subrayados, y guiones.',
   'alpha_numeric'         => 'El campo {field} solo puede contener caracteres alfanuméricos.',
   'alpha_numeric_space'   => 'El campo {field} solo puede contener caracteres alfanuméricos y espacios.',
   'alpha_space'  		   => 'El campo {field} solo puede contener caracteres alfabéticos y espacios.',
   'decimal'               => 'El campo {field} debe contener un número decimal.',
   'differs'               => 'El campo {field} debe diferir del campo {param}.',
   'equals'                => 'El campo {field} debe ser exactamente: {param}.',
   'exact_length'          => 'El campo {field} debe tener exactamente {param} caractéres de longitud.',
   'greater_than'          => 'El campo {field} debe contener un número mayor que {param}.',
   'greater_than_equal_to' => 'El campo {field} debe contener un número mayor o igual a {param}.',
   'hex'                   => 'El campo {field} solo puede contener caracteres hexadecimales.',
   'in_list'               => 'El campo {field} debe ser uno de: {param}.',
   'integer'               => 'El campo {field} debe contener un entero.',
   'is_natural'            => 'El campo {field} debe contener solo dígitos.',
   'is_natural_no_zero'    => 'El campo {field} debe solo contener dígitos y ser mayor que cero.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'El campo {field} debe contener un valor único.',
   'less_than'             => 'El campo {field} debe contener un número menor que {param}.',
   'less_than_equal_to'    => 'El campo {field} debe contener un número menor o igual a {param}.',
   'matches'               => 'El campo {field} no coincide con el campo {param}.',
   'max_length'            => 'El campo {field} no pude exceder los {param} caracteres de longitud.',
   'min_length'            => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
   'not_equals'            => 'El campo {field} no puede ser: {param}.',
   'numeric'               => 'El campo {field} debe contener solo números.',
   'regex_match'           => 'El campo {field} no está en el formato correcto.',
   'required'              => 'El campo {field} es obligatorio.',
   'required_with'         => 'El campo {field} es obligatorio cuando {param} está presente.',
   'required_without'      => 'El campo {field} es obligatorio cuando {param} no está presente.',
   'timezone'              => 'El campo {field} debe ser una zona horaria válida.',
   'valid_base64'          => 'El campo {field} debe ser una cadena base64 válida.',
   'valid_email'           => 'El campo {field} debe contener una dirección de email válida.',
   'valid_emails'          => 'El campo {field} debe contener todas las direcciones de email válidas.',
   'valid_ip'              => 'El campo {field} debe contener una IP válida.',
   'valid_url'             => 'El campo {field} debe contener una URL válida.',
   'valid_date'            => 'El campo {field} debe contener una fecha válida.',

	// Credit Cards
   'valid_cc_num'          => '{field} no parece ser un número de tarjeta de crédito válida.',

	// Files
   'uploaded'              => '{field} no es un campo de subida de archivo válido.',
   'max_size'              => '{field} es demasiado grande para un archivo.',
   'is_image'              => '{field} no es válido, subido archivo de imagen.',
   'mime_in'               => '{field} no tiene un tipo válido de mime.',
   'ext_in'                => '{field} no tiene una extensión de archivo válida.',
   'max_dims'              => '{field} no es una imagen o tiene demasiado alto o ancho.',
];
