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
   'noRuleSets'            => 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} n\'est pas une règle valide.',
   'groupNotFound'         => '{0} n\'est pas un groupe de règles de validation.',
   'groupNotArray'         => 'Le groupe de règles {0} doit être un tableau.',
   'invalidTemplate'       => '{0} n\'est pas un modèle de Validation valide.',

	// Rule Messages
   'alpha'                 => 'Le champ {field} ne peut contenir que des caractères alphabétiques.',
   'alpha_dash'            => 'Le champ {field} ne peut contenir que des caractères alphanumériques, des underscores, et des tirets.',
   'alpha_numeric'         => 'Le champ {field} ne peut contenir que des caractères alphanumériques.',
   'alpha_numeric_space'   => 'Le champ {field} ne peut contenir que des caractères alphanumériques et des espaces.',
   'alpha_space'           => 'Le champ {field} ne peut contenir que des caractères alphabétiques et des espaces.',
   'decimal'               => 'Le champ {field} doit contenir un nombre décimal.',
   'differs'               => 'Le champ {field} doit être différent du champ {param}.',
   'equals'                => 'The {field} field must be exactly: {param}.',
   'exact_length'          => 'Le champ {field} doit avoir précisément {param} caractères de long.',
   'greater_than'          => 'Le champ {field} doit contenir un nombre plus grand que {param}.',
   'greater_than_equal_to' => 'Le champ {field} doit être supérieur ou égal à {param}.',
   'in_list'               => 'Le champ {field} doit être un élément de la liste suivante : {param}.',
   'hex'                   => 'Le champ {field} ne peut contenir que des caractères hexadécimaux.',
   'integer'               => 'Le champ {field} doit contenir un nombre entier.',
   'is_natural'            => 'Le champ {field} ne doit contenir que des chiffres.',
   'is_natural_no_zero'    => 'Le champ {field} ne doit contenir que des chiffres et être supérieur à zéro.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'Le champ {field} doit contenir une valeur unique.',
   'less_than'             => 'Le champ {field} doit contenir un nombre inférieur à {param}.',
   'less_than_equal_to'    => 'Le champ {field} doit contenir un nombre inférieur ou égal à {param}.',
   'matches'               => 'Le champ {field} ne coïncide pas avec le champ {param}.',
   'max_length'            => 'Le champ {field} ne peut pas dépasser une longueur de {param} caractères.',
   'min_length'            => 'Le champ {field} doit contenir au moins {param} caractères.',
   'not_equals'            => 'The {field} field cannot be: {param}.',
   'numeric'               => 'Le champ {field} ne doit contenir que des nombres.',
   'regex_match'           => 'Le champ {field} n\'a pas le format attendu.',
   'required'              => 'Le champ {field} est requis.',
   'required_with'         => 'Le champ {field} est requis lorsque {param} est présent.',
   'required_without'      => 'Le champ {field} est requis lorsque {param} n\'est pas présent.',
   'timezone'              => 'Le champ {field} doit être un fuseau horaire valide.',
   'valid_base64'          => 'Le champ {field} doit être une chaîne de caractères en base64 valide.',
   'valid_email'           => 'Le champ {field} doit contenir une adresse email valide.',
   'valid_emails'          => 'Le champ {field} doit contenir des adresses email valides.',
   'valid_ip'              => 'Le champ {field} doit contenir une IP valide.',
   'valid_url'             => 'Le champ {field} doit contenir une URL valide.',
   'valid_date'            => 'Le champ {field} doit contenir une date valide.',

	// Credit Cards
   'valid_cc_num'          => '{field} ne semble pas être un numéro de carte de crédit valide.',

	// Files
   'uploaded'              => 'Le fichier envoyé {field} n\'est pas valide.',
   'max_size'              => 'Le fichier {field} est trop volumineux.',
   'is_image'              => 'Le fichier envoyé {field} n\'est pas une image valide.',
   'mime_in'               => '{field} n\'a pas un type MIME valide.',
   'ext_in'                => 'L\'extension du fichier {field}  n\'est pas valide.',
   'max_dims'              => 'Soit {field} n\'est pas une image, soit elle est trop haute ou trop large.',
];
