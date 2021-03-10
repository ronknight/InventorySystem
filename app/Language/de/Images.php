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
   'sourceImageRequired'    => 'Es muss in den Einstellungen ein Quellbild angegeben werden',
   'gdRequired'             => 'Für die Nutzung dieser Funktion ist die GD-Bildbibliothek erforderlich.',
   'gdRequiredForProps'     => 'Der Server muss die GD-Bildbibliothek unterstützen, um die Bildeigenschaften zu bestimmen.',
   'gifNotSupported'        => 'GIF-Bilder werden aufgrund von Lizenzbeschränkungen oft nicht unterstützt. Möglicherweise müssen stattdessen JPG- oder PNG-Bilder verwendet werden.',
   'jpgNotSupported'        => 'JPG-Bilder werden nicht unterstützt.',
   'pngNotSupported'        => 'PNG-Bilder werden nicht unterstützt.',
   'fileNotSupported'       => 'Die Datei enthält ein nicht unterstütztes Bildformat.',
   'unsupportedImageCreate' => 'Der Server unterstützt die GD-Funktion, welche für die Verarbeitung dieser Art von Bildern erforderlich ist, nicht.',
   'jpgOrPngRequired'       => 'Das in den Einstellungen angegebene Protokoll zur Änderung der Bildgröße funktioniert nur mit den Bildtypen JPEG oder PNG.',
   'rotateUnsupported'      => 'Die Bildrotation scheint vom Server nicht unterstützt zu werden.',
   'libPathInvalid'         => 'Der Pfad zu Ihrer Bildbibliothek ist nicht korrekt. Bitte in den Bildeinstellungen den richtigen Pfad einstellen. {0, string)',
   'imageProcessFailed'     => 'Die Bildverarbeitung ist fehlgeschlagen. Bitte überprüfen, ob der Server das gewählte Protokoll unterstützt und ob der Pfad zur Bildbibliothek korrekt ist.',
   'rotationAngleRequired'  => 'Für die Drehung des Bildes ist ein Drehwinkel erforderlich.',
   'invalidPath'            => 'Der Pfad zum Bild ist nicht korrekt.',
   'copyFailed'             => 'Die Image-Kopierroutine ist fehlgeschlagen.',
   'missingFont'            => 'Es ist nicht möglich, eine zu verwendende Schriftart zu finden.',
   'saveFailed'             => 'Das Bild kann nicht gespeichert werden. Bitte sicherstellen, dass das Bild- und Dateiverzeichnis beschreibbar ist.',
   'invalidDirection'       => 'Die Umkehrrichtung kann nur `vertical` oder `horizontal` sein. Gegeben: {0}',
   'exifNotSupported'       => 'Das Lesen von EXIF-Daten wird von dieser PHP-Installation nicht unterstützt.',
];
