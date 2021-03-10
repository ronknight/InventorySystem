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
   'sourceImageRequired'    => 'Musíte uvést zdrojový obrázek v nastavení.',
   'gdRequired'             => 'Na použití této funkce je potřeba obrázková knihovna GD.',
   'gdRequiredForProps'     => 'Server musí podporovat obrázkovou knihovnu GD, aby určil vlastnosti obrázků.',
   'gifNotSupported'        => 'Obrázky GIF nejsou často podporovány kvůli licenčním omezením. Možno budete muset místo toho použít obrázky JPG nebo PNG.',
   'jpgNotSupported'        => 'Obrázky JPG nejsou podporovány.',
   'pngNotSupported'        => 'Obrázky PNG nejsou podporovány.',
   'unsupportedImageCreate' => 'Váš server nepodporuje funkci GD potřebnou pro zpracování tohoto typu obrázku.',
   'jpgOrPngRequired'       => 'Protokol pro změnu velikost obrázku specifikovaný ve vašem nastavení funguje pouze pro typy obrázků JPEG nebo PNG.',
   'rotateUnsupported'      => 'Zdá se, že váš server nepodporuje otáčení obrázků.',
   'libPathInvalid'         => 'Cesta k vaší knihovně obrázků není správná. Nastavte správnou cestu v nastavení obrázků. {0, string)',
   'imageProcessFailed'     => 'Zpracování obrázku selhalo. Zkontrolujte, zda váš server podporuje zvolený protokol a zda je cesta k vaší knihovně obrázkov správna.',
   'rotationAngleRequired'  => 'Na otočení obrázku je potřeba úhel rotace.',
   'invalidPath'            => 'Cesta k obrázku není správná.',
   'copyFailed'             => 'Rutina kopírování obrázků selhala.',
   'missingFont'            => 'není možné nalézt písmo pro použití.',
   'saveFailed'             => 'Obrázek se nepodařilo uložit. Ujistěte se, že adresář obrázků a souborů je zapisovatelný.',
   'invalidDirection'       => 'Směr překlopení může být pouze "vertikální" nebo "horizontální". Zadáno: {0}',
   'exifNotSupported'       => 'Tato instalace PHP nepodporuje čtení EXIF dat.',
];
