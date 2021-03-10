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
   'noRuleSets'            => 'Kein Regelset in der Konfiguration der Validierung angegeben.',
   'ruleNotFound'          => '{0} ist keine gültige Regel.',
   'groupNotFound'         => '{0} ist keine Gruppe von Validierungsregeln.',
   'groupNotArray'         => '{0} Regelgruppe muss ein Array sein.',
   'invalidTemplate'       => '{0} ist keine gültige Validierungsvorlage.',

    // Rule Messages
   'alpha'                 => 'Das {field}-Formularfeld darf nur alphabetische Zeichen enthalten.',
   'alpha_dash'            => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen, Unterstriche und Bindestriche enthalten.',
   'alpha_numeric'         => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen enthalten.',
   'alpha_numeric_punct'   => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen und Leerzeichen unt  ~ ! # $ % & * - _ + = | : . enthalten.',
   'alpha_numeric_space'   => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen und Leerzeichen enthalten.',
   'alpha_space'           => 'Das {field}-Formularfeld darf nur alphabetische Zeichen und Leerzeichen enthalten.',
   'decimal'               => 'Das {field}-Formularfeld muss eine Dezimalzahl enthalten.',
   'differs'               => 'Das {field}-Formularfeld muss sich vom Feld {param} unterscheiden.',
   'equals'                => 'Das {field}-Formularfeld muss exakt {param} entsprechen.',
   'exact_length'          => 'Das {field}-Formularfeld muss genau {param} Zeichen lang sein.',
   'greater_than'          => 'Das {field}-Formularfeld muss eine Zahl größer als {param} enthalten.',
   'greater_than_equal_to' => 'Das {field}-Formularfeld muss eine Zahl größer oder gleich {param} enthalten.',
   'hex'                   => 'Das {field}-Formularfeld darf nur hexadezimale Zeichen enthalten.',
   'in_list'               => 'Das {field}-Formularfeld muss eines der folgenden sein: {param}.',
   'integer'               => 'Das {field}-Formularfeld muss eine ganze Zahl enthalten.',
   'is_natural'            => 'Das {field}-Formularfeld darf nur Ziffern enthalten.',
   'is_natural_no_zero'    => 'Das {field}-Formularfeld darf nur Ziffern enthalten und muss größer als Null sein.',
   'is_not_unique'         => 'Das {field}-Formularfeld muss einen bereits in der Datenbank vorhandenen Wert enthalten.',
   'is_unique'             => 'Das {field}-Formularfeld muss einen eindeutigen Wert enthalten.',
   'less_than'             => 'Das {field}-Formularfeld muss eine Zahl kleiner als {param} enthalten.',
   'less_than_equal_to'    => 'Das {field}-Formularfeld muss eine Zahl kleiner oder gleich {param} enthalten.',
   'matches'               => 'Das {field}-Formularfeld stimmt nicht mit dem Feld {param} überein.',
   'max_length'            => 'Das {field}-Formularfeld darf die Länge von {param} Zeichen nicht überschreiten.',
   'min_length'            => 'Das {field}-Formularfeld muss mindestens {param} Zeichen lang sein.',
   'not_equals'            => 'Das {field}-Formularfeld darf nicht {param} entsprechen.',
   'numeric'               => 'Das {field}-Formularfeld darf nur Zahlen enthalten.',
   'regex_match'           => 'Das {field}-Formularfeld ist nicht im richtigen Format.',
   'required'              => 'Das {field}-Formularfeld ist erforderlich.',
   'required_with'         => 'Das {field}-Formularfeld ist erforderlich, wenn {param} vorhanden ist. {field}-Formularfeld',
   'required_without'      => 'Das {field}-Formularfeld ist erforderlich, wenn {param} nicht vorhanden ist.',
   'string'                => 'The {field}-Formularfeld muss einen String enthalten.',
   'timezone'              => 'Das {field}-Formularfeld muss eine gültige Zeitzone sein.',
   'valid_base64'          => 'Das {field}-Formularfeld muss eine gültige base64-Zeichenkette sein.',
   'valid_email'           => 'Das {field}-Formularfeld muss eine gültige E-Mail-Adresse enthalten.',
   'valid_emails'          => 'Das {field}-Formularfeld muss gültige E-Mail-Adressen enthalten.',
   'valid_ip'              => 'Das {field}-Formularfeld muss eine gültige IP enthalten..',
   'valid_url'             => 'Das {field}-Formularfeld muss eine gültige URL enthalten.',
   'valid_date'            => 'Das {field}-Formularfeld muss ein gültiges Datum enthalten.',

    // Credit Cards
   'valid_cc_num'          => 'Das {field}-Formularfeld scheint keine gültige Kreditkartennummer zu enthalten.',

    // Files
   'uploaded'              => 'Das {field}-Formularfeld enthält keine gültige hochgeladene Datei.',
   'max_size'              => 'Das {field}-Formularfeld enthält enthält eine zu grosse Datei.',
   'is_image'              => 'Das {field}-Formularfeld enthält keine gültige, hochgeladene Bilddatei.',
   'mime_in'               => 'Das {field}-Formularfeld enthält keinen gültigen Mime-Typ.',
   'ext_in'                => 'Das {field}-Formularfeld enthält keine gültige Dateiendung.',
   'max_dims'              => 'Das {field}-Formularfeld enthält entweder kein Bild, oder es ist zu breit oder zu hoch.',
];
