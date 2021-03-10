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
	'sourceImageRequired'    => 'Musisz określić obraz źródłowy w swoich preferencjach.',
	'gdRequired'             => 'Do korzystania z tej funkcji wymagana jest biblioteka obrazów GD.',
	'gdRequiredForProps'     => 'Twój serwer musi obsługiwać bibliotekę obrazów GD w celu określenia właściwości obrazu.',
	'gifNotSupported'        => 'Obrazy GIF często nie są obsługiwane ze względu na ograniczenia licencyjne. Może być konieczne użycie obrazów JPG lub PNG.',
	'jpgNotSupported'        => 'Obrazy JPG nie są obsługiwane.',
	'pngNotSupported'        => 'Obrazy PNG nie są obsługiwane.',
	'unsupportedImageCreate' => 'Twój serwer nie obsługuje funkcji GD wymaganej do przetwarzania tego typu obrazu.',
	'jpgOrPngRequired'       => 'Protokół zmiany rozmiaru obrazu określony w preferencjach działa tylko z obrazami JPEG lub PNG.',
	'rotateUnsupported'      => 'Obracanie obrazu nie jest obsługiwane przez Twój serwer.',
	'libPathInvalid'         => 'Ścieżka do biblioteki obrazów jest niepoprawna. Ustaw prawidłową ścieżkę w preferencjach obrazu. {0, string)',
	'imageProcessFailed'     => 'Przetwarzanie obrazu się nie udało. Sprawdź, czy twój serwer obsługuje wybrany protokół i czy ścieżka do biblioteki obrazów jest prawidłowa.',
	'rotationAngleRequired'  => 'Aby obrócić obraz, wymagany jest kąt obrotu.',
	'invalidPath'            => 'Ścieżka do obrazu jest nieprawidłowa.',
	'copyFailed'             => 'Procedura kopiowania obrazów nie powiodła się.',
	'missingFont'            => 'Nie można znaleźć czcionki do użycia.',
	'saveFailed'             => 'Nie można zapisać obrazu. Upewnij się, że obraz i katalog plików są zapisywalne.',
	'invalidDirection'       => 'Kierunek odwrócenia może być tylko "pionowy" lub "poziomy". Podano: {0}',
	'exifNotSupported'       => 'Odczytywanie danych EXIF nie jest obsługiwane przez tę instalację PHP.',
];
