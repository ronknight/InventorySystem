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
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
    'sourceImageRequired'    => 'Gelieve een bron afbeelding op te geven in uw instellingen.',
    'gdRequired'             => 'De GD image library is vereist voor deze functie.',
    'gdRequiredForProps'     => 'De GD image library is vereist om de afbeelding specificaties te achterhalen.',
    'gifNotSupported'        => 'GIF afbeeldingen zijn vaak niet ondersteunt omwille van licentie restricties. Probeer indien mogelijk met PNG of JPG.',
    'jpgNotSupported'        => 'JPG afbeeldingen zijn niet ondersteunt.',
    'pngNotSupported'        => 'PNG afbeeldingen zijn niet ondersteunt.',
    'fileNotSupported'       => 'Het opgegeven bestand is geen ondersteutn afbeelding type.',
    'unsupportedImageCreate' => 'De GD image library nodig voor deze functie is niet beschikbaar.',
    'jpgOrPngRequired'       => 'Het afbeelding "resize" protocol opgegeven in uw instellingen is enkel beschikbaar voor JPEG en PNG bestanden.',
    'rotateUnsupported'      => 'Afbeelding draaien lijkt niet ondersteunt te worden door uw server.',
    'libPathInvalid'         => 'Het pad naar uw Image Library lijkt niet correct. Gelieve het correcte pad op te geven in uw instellingen. {0, string)',
    'imageProcessFailed'     => 'Afbeelding verwerken gefaald. Gelieve te verifieren of uw server het gekozen protocol ondersteunt en het pad naar uw Image Library correct is',
    'rotationAngleRequired'  => 'Een rotatiehoek is vereist om de afbeelding te roteren.',
    'invalidPath'            => 'Het pad naar de afbeelding is niet correct.',
    'copyFailed'             => 'De routine voor het kopiëren van afbeeldingen is mislukt.',
    'missingFont'            => 'Kan het opgegeven lettertype niet vinden.',
    'saveFailed'             => 'Kan de afbeelding niet opslaan. Zorg ervoor dat de afbeelding en de bestandsmap schrijfbaar zijn.',
    'invalidDirection'       => 'De draairichting kan alleen `vertical` of `horizontal` zijn. Opgegeven: {0}',
    'exifNotSupported'       => 'Lezen van EXIF data wordt niet ondersteunt door uw PHP installatie.',
];
