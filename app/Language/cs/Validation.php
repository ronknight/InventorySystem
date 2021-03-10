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
 * @author     Pavel Tajduš - PavelTajdus on Github
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
   'noRuleSets'            => 'V konfiguraci ověření nebyly zadány žádné sady pravidel.',
   'ruleNotFound'          => '{0} je neplatné pravidlo.',
   'groupNotFound'         => '{0} není skupina ověřovacích pravidel.',
   'groupNotArray'         => '{0} skupina pravidel musí být pole.',
   'invalidTemplate'       => '{0} je neplatná šablona validace.',

    // Rule Messages
   'alpha'                 => 'Pole {field} může obsahovat pouze abecední znaky.',
   'alpha_dash'            => 'Pole {field} může obsahovat pouze alfanumerické znaky, podtržítka a pomlčky.',
   'alpha_numeric'         => 'Pole {field} může obsahovat pouze alfanumerické znaky.',
   'alpha_numeric_space'   => 'Pole {field} může obsahovat pouze alfanumerické znaky a mezery.',
   'alpha_space'           => 'Pole {field} může obsahovat pouze abecední znaky a mezery.',
   'decimal'               => 'Pole {field} musí obsahovat číslo (0-9).',
   'differs'               => 'Pole {field} musí být rozdílné než pole {param}.',
   'equals'                => 'Pole {field} musí být přesně: {param}.',
   'exact_length'          => 'Pole {field} musí být přesně {param} znaků dlouhé.',
   'greater_than'          => 'Pole {field} musí obsahovat číslo větší než {param}.',
   'greater_than_equal_to' => 'Pole {field} musí obsahovat číslo větší nebo rovno než {param}.',
   'in_list'               => 'Pole {field} musí být jedno z: {param}.',
   'integer'               => 'Pole {field} musí obsahovat celé číslo.',
   'is_natural'            => 'Pole {field} musí obsahovat pouze číslice.',
   'is_natural_no_zero'    => 'Pole {field} musí obsahovat pouze číslice a musí být větší než nula.',
   'is_not_unique'         => 'Pole {field} musí obsahovat dříve existující hodnotu v databázi.',
   'is_unique'             => 'Pole {field} musí obsahovat unikátní hodnotu.',
   'less_than'             => 'Pole {field} musí obsahovat číslo menší než {param}.',
   'less_than_equal_to'    => 'Pole {field} musí obsahovat číslo menší nebo rovno než {param}.',
   'matches'               => 'Pole {field} sa neshoduje s polem {param}.',
   'max_length'            => 'Pole {field} nemůže překročit počet znaků: {param}.',
   'min_length'            => 'Pole {field} musí být delší než {param} znaky/ů.',
   'not_equals'            => 'Pole {field} nemůže být: {param}.',
   'numeric'               => 'Pole {field} musí obsahovat pouze čísla.',
   'regex_match'           => 'Pole {field} má nesprávný formát.',
   'required'              => 'Pole {field} je povinné.',
   'required_with'         => 'Pole {field} je povinné pokud {param} je zadán.',
   'required_without'      => 'Pole {field} je povinné pokud {param} není zadán.',
   'timezone'              => 'Pole {field} musí být platná časová zóna.',
   'valid_base64'          => 'Pole {field} musí být platný base64 řetězec.',
   'valid_email'           => 'Pole {field} musí obsahovat platnou emailovú adresu.',
   'valid_emails'          => 'Pole {field} musí obsahovat pouze platné emailové adresy.',
   'valid_ip'              => 'Pole {field} musí obsahovat platnou IP adresu.',
   'valid_url'             => 'Pole {field} musí obsahovat platnou URL adresu.',
   'valid_date'            => 'Pole {field} musí obsahovat platné datum.',

    // Credit Cards
   'valid_cc_num'          => '{field} sa nezdá být platné číslo kreditní/debetní karty.',

    // Files
   'uploaded'              => '{field} je neplatný nahraný soubor.',
   'max_size'              => '{field} je příliš velký soubor.',
   'is_image'              => '{field} je neplatný nahraný obrázek.',
   'mime_in'               => '{field} nemá platný mime typ.',
   'ext_in'                => '{field} je neplatný typ souboru.',
   'max_dims'              => '{field} není obrázek, nebo je příliš široký nebo vysoký.',
];
