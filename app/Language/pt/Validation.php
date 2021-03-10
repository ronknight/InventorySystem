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
 * @author     Marco Monteiro
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
	'noRuleSets'            => 'Nenhum conjunto de regras especificado na configuração de validação.',
	'ruleNotFound'          => '{0} não é uma regra válida.',
	'groupNotFound'         => '{0} não é um grupo de regras de validação.',
	'groupNotArray'         => '{0} grupo de regras deve ser uma array.',
	'invalidTemplate'       => '{0} não é um template de Validação válido.',

	// Rule Messages
	'alpha'                 => 'O campo {field} pode conter apenas caracteres alfabéticos.',
	'alpha_dash'            => 'O campo {field} pode conter apenas caracteres alfanuméricos, sublinhados e traços.',
	'alpha_numeric'         => 'O campo {field} pode conter apenas caracteres alfanuméricos.',
	'alpha_numeric_space'   => 'O campo {field} pode conter apenas caracteres alfanuméricos e espaços.',
	'alpha_space'  			=> 'O campo {field} pode conter apenas caracteres alfabéticos e espaços.',
	'decimal'               => 'O campo {field} deve conter um número decimal.',
	'differs'               => 'O campo {field} deve ser diferente do campo {param}.',
	'equals'                => 'The {field} field must be exactly: {param}.',
	'exact_length'          => 'O campo {field} deve ter exatamente {param} caracteres.',
	'greater_than'          => 'O campo {field} deve conter um número maior que {param}.',
	'greater_than_equal_to' => 'O campo {field} deve conter um número maior ou igual a{param}.',
	'hex'                   => 'O campo {field} pode conter apenas caracteres hexadecimais.',
	'in_list'               => 'O campo {field} deve ser um dos seguintes: {param}.',
	'integer'               => 'O campo {field} deve ser um inteiro',
	'is_natural'            => 'O campo {field} deve conter apenas dígitos.',
	'is_natural_no_zero'    => 'O campo {field} deve conter apenas dígitos e deve ser maior que zero.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
	'is_unique'             => 'O campo {field} deve conter um valor único.',
	'less_than'             => 'O campo {field} deve conter um número menor que {param}.',
	'less_than_equal_to'    => 'O campo {field} deve conter um número menor ou igual a {param}.',
	'matches'               => 'O campo {field} não corresponde ao campo {param}.',
	'max_length'            => 'O campo {field} não pode exceder {param} caracteres.',
	'min_length'            => 'O campo {field} deve ter pelo menos {param} caracteres.',
	'not_equals'            => 'The {field} field cannot be: {param}.',
	'numeric'               => 'O campo {field} deve conter apenas números.',
	'regex_match'           => 'O campo {field} não está no formato correto.',
	'required'              => 'O campo {field} é obrigatório.',
	'required_with'         => 'O campo {field} é obrigatório quando {param} está presente.',
	'required_without'      => 'O campo {field} é obrigatório quando {param} não está presente.',
	'timezone'              => 'O campo {field} deve ser um fuso horário válido.',
	'valid_base64'          => 'O campo {field} deve conter um valor base64 válido.',
	'valid_email'           => 'O campo {field} deve conter um email válido.',
	'valid_emails'          => 'O campo {field} deve conter apenas emails válidos.',
	'valid_ip'              => 'O campo {field} deve conter um IP válido.',
	'valid_url'             => 'O campo {field} deve conter uma URL válida.',
	'valid_date'            => 'O campo {field} deve conter uma data válida.',

	// Credit Cards
	'valid_cc_num'          => '{field} não parece ser um número de cartão de crédito válido.',

	// Files
	'uploaded'              => '{field} não é um arquivo válido.',
	'max_size'              => '{field} é um arquivo muito grande.',
	'is_image'              => '{field} não é um arquivo de imagem.',
	'mime_in'               => '{field} não tem um tipo mime válido.',
	'ext_in'                => '{field} não tem uma extensão de arquivo válida.',
	'max_dims'              => '{field} não é uma imagem ou é muito larga ou alta.',
];
