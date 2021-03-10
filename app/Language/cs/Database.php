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
   'invalidEvent'                     => '{0} je neplatné zpětné volání Model Event.',
   'invalidArgument'                  => 'Musíte zadat platný {0}.',
   'invalidAllowedFields'             => 'Povolené pole musía být specifikované pro model: {0}',
   'emptyDataset'                     => 'Žádná data pro {0}.',
   'failGetFieldData'                 => 'Selhalo získání údajů pole z databáze.',
   'failGetIndexData'                 => 'Selhalo získání údajů indexu z databáze.',
   'failGetForeignKeyData'            => 'Selhalo získání údajů cizího klíče z databáze.',
   'parseStringFail'                  => 'Parsování řetěžce klíče selhalo.',
   'featureUnavailable'               => 'Tato funkce není v použité databázi dostupná.',
   'tableNotFound'                    => 'Tabuľka `{0}` nebyla ve vybrané databázi nalezena.',
   'noPrimaryKey'                     => '`{0}` třída modelu nespecifikuje primární klíč.',
   'noDateFormat'                     => '`{0}`  třída modelu nemá platný formát data.',
   'fieldNotExists'                   => 'Pole `{0}` nebylo nalezeno.',
   'forEmptyInputGiven'               => 'Byl zadán prázdný dotaz pro pole `{0}`',
   'forFindColumnHaveMultipleColumns' => 'Pouze jeden sloupec je povolený v názvu sloupce.',
];
