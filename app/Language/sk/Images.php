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
 * @author     Jozef Botka - xbotkaj on Github
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Musíte uviesť zdrojový obrázok v preferenciách.',
   'gdRequired'             => 'Na použitie tejto funkcie je potrebná knižnica obrázkov GD.',
   'gdRequiredForProps'     => 'Server musí podporovať knižnicu obrázkov GD, aby určil vlastnosti obrázkov.',
   'gifNotSupported'        => 'Obrázky GIF často nie sú podporované kvôli licenčným obmedzeniam. Možno budete musieť namiesto toho použiť obrázky JPG alebo PNG.',
   'jpgNotSupported'        => 'Obrázky JPG nie sú podporované.',
   'pngNotSupported'        => 'Obrázky PNG nie sú podporované.',
   'unsupportedImageCreate' => 'Váš server nepodporuje funkciu GD potrebnú na spracovanie tohto typu obrázka.',
   'jpgOrPngRequired'       => 'Protokol o zmene veľkosti obrázka špecifikovaný vo vašich preferenciách funguje iba pre typy obrázkov JPEG alebo PNG.',
   'rotateUnsupported'      => 'Zdá sa, že váš server nepodporuje rotáciu obrázkov.',
   'libPathInvalid'         => 'Cesta do vašej knižnice obrázkov nie je správna. Nastavte správnu cestu v preferenciách obrázkov. {0, string)',
   'imageProcessFailed'     => 'Spracovanie obrázku zlyhalo. Skontrolujte, či váš server podporuje zvolený protokol a či je cesta k vašej knižnici obrázkov správna.',
   'rotationAngleRequired'  => 'Na otočenie obrázku je potrebný uhol rotácie.',
   'invalidPath'            => 'Cesta k obrázku nie je správna.',
   'copyFailed'             => 'Rutina kopírovania obrázkov zlyhala.',
   'missingFont'            => 'Nie je možné nájsť písmo na použitie.',
   'saveFailed'             => 'Obrázok sa nepodarilo uložiť. Uistite sa, že adresár obrázkov a súborov je zapisovateľný.',
   'invalidDirection'       => 'Smer preklopenia môže byť iba "vertikálny" alebo "horizontálny". Zadané: {0}',
   'exifNotSupported'       => 'Táto inštalácia PHP nepodporuje čítanie EXIF dát.',
];
