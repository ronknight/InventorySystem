<?php

/**
 * Image language strings.
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
   'sourceImageRequired'    => 'Det må spesifiseres i innstillingene til et kildebilde',
   'gdRequired'             => 'For å bruke denne funksjonen er GD-bildebiblioteket påkrevd.',
   'gdRequiredForProps'     => 'Serveren må støtte GD-bildebiblioteket for å bestemme bildeegenskapene.',
   'gifNotSupported'        => 'GIF-bilder støttes ofte ikke på grunn av lisensbegrensninger. Du må kanskje bruke JPG- eller PNG-bilder i stedet.',
   'jpgNotSupported'        => 'JPG-bilder støttes ikke.',
   'pngNotSupported'        => 'PNG-bilder støttes ikke.',
   'unsupportedImageCreate' => 'Serveren støtter ikke GD-funksjonen som kreves for å behandle denne typen bilder.',
   'jpgOrPngRequired'       => 'Endringsprotokoll for bildestørrelse som er spesifisert i innstillingene, fungerer bare med JPEG- eller PNG-bildetyper.',
   'rotateUnsupported'      => 'Bildrotasjon ser ikke ut til å være støttet av serveren.',
   'libPathInvalid'         => 'Stien til bildebiblioteket ditt er ikke riktig. Angi riktig sti i bildeinnstillingene. {0, string)',
   'imageProcessFailed'     => 'Bildebehandlingen mislyktes. Kontroller om serveren støtter den valgte protokollen, og om banen til bildebiblioteket er riktig.',
   'rotationAngleRequired'  => 'Rotasjonen av bildet krever en rotasjonsvinkel.',
   'invalidPath'            => 'Stien til bildet er ikke riktig.',
   'copyFailed'             => 'Rutinen for bildekopiering mislyktes.',
   'missingFont'            => 'Det er ikke mulig å finne en font som skal brukes.',
   'saveFailed'             => 'Bildet kan ikke lagres. Forsikre deg om at bilde- og filkatalogen er skrivbar.',
   'invalidDirection'       => 'Den motsatte retningen kan bare være "vertikal" eller "horisontal". satt: {0}',
   'exifNotSupported'       => 'Lesing av EXIF-data støttes ikke av denne PHP-installasjonen.',
];
