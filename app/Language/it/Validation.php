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
	// Core Messages
	'noRuleSets'            => 'Nessun set di regole è stato specificato nella configurazione della Validazione.',
	'ruleNotFound'          => '{0} non è una regola valida.',
	'groupNotFound'         => '{0} non è un gruppo di regole di validazione.',
	'groupNotArray'         => '{0} il gruppo di regole deve essere un array.',
	'invalidTemplate'       => '{0} non è un valido template di Validazione.',

	// Rule Messages
	'alpha'                 => 'Il campo {field} può contenere solamente caratteri dell\'alfabeto.',
	'alpha_dash'            => 'Il campo {field} può contenere solamente caratteri alfanumerici, lineette basse, e lineette (meno).',
	'alpha_numeric'         => 'Il campo {field} può contenere solamente caratteri alfanumerici.',
	'alpha_numeric_space'   => 'Il campo {field} può contenere solamente caratteri alfanumerici e spazi.',
	'alpha_space'  		=> 'Il campo {field} può contenere solamente caratteri dell\'alfabeto e spazi.',
	'decimal'               => 'Il campo {field} deve contenere un numero decimale.',
	'differs'               => 'Il campo {field} deve essere diverso dal campo {param}.',
	'equals'                => 'The {field} field must be exactly: {param}.',
	'exact_length'          => 'Il campo {field} deve essere esattamente di {param} caratteri.',
	'greater_than'          => 'Il campo {field} deve contenere un numero maggiore di {param}.',
	'greater_than_equal_to' => 'Il campo {field} deve contenere un numero maggiore o uguale a {param}.',
	'hex'                   => 'Il campo {field} può contenere solamente caratteri esadecimali.',
	'in_list'               => 'Il campo {field} deve essere uno tra: {param}.',
	'integer'               => 'Il campo {field} deve contenere un intero.',
	'is_natural'            => 'Il campo {field} deve contenere solo caratteri numerici.',
	'is_natural_no_zero'    => 'Il campo {field} deve contenere solo caratteri numerici e deve essere maggiore di zero.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
	'is_unique'             => 'Il campo {field} deve contenere un valore univoco.',
	'less_than'             => 'Il campo {field} deve contenere un numero minore di {param}.',
	'less_than_equal_to'    => 'Il campo {field} deve contenere un numero minore o uguale a {param}.',
	'matches'               => 'Campo {field} non corrispondente al campo {param} .',
	'max_length'            => 'Il campo {field} non può superare i {param} caratteri.',
	'min_length'            => 'Il campo {field} deve essere almeno di {param} caratteri.',
	'not_equals'            => 'The {field} field cannot be: {param}.',
	'numeric'               => 'Il campo {field} deve contenere solo numeri.',
	'regex_match'           => 'Il formato per il campo {field} non è corretto.',
	'required'              => 'Il campo {field} è obbligatorio.',
	'required_with'         => 'Il campo {field} è obbligatorio quando {param} è presente.',
	'required_without'      => 'Il campo {field} è obbligatorio quando {param} non è presente.',
	'timezone'              => 'Il campo {field} deve essere una timezone valida.',
	'valid_base64'          => 'Il campo {field} deve essere una stringa in base64 valida.',
	'valid_email'           => 'Il campo {field} deve contenere un indirizzo email valido.',
	'valid_emails'          => 'Il campo {field} deve contenere tutti indirizzi email validi.',
	'valid_ip'              => 'Il campo {field} deve contenere un IP valido.',
	'valid_url'             => 'Il campo {field} deve contenere un URL valido.',
	'valid_date'            => 'Il campo {field} deve contenere una data valida.',

	// Credit Cards
	'valid_cc_num'          => '{field} non sembra essere un numero di carta di credito valido.',

	// Files
	'uploaded'              => 'Il file {field} non è valido.',
	'max_size'              => 'Il file {field} supera le dimensioni consentite.',
	'is_image'              => 'Il file {field} non è un\'immagine valida.',
	'mime_in'               => 'Il file {field} non ha un mime consentito.',
	'ext_in'                => 'Il file {field} non ha una estesione valida.',
	'max_dims'              => 'Il file {field} o non è una immagine oppure l\'immagine ha dimensioni troppo grandi.',
];
