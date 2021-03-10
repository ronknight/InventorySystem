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
   'sourceImageRequired'    => 'Turite nurodyti šaltinio paveikslėlį nustatymuose.',
   'gdRequired'             => 'Norint naudoti šią savybę reikalinga GD paveikslėlių biblioteka.',
   'gdRequiredForProps'     => 'Norint nustatyti paveikslėlių savybes serveris turi palaikyti GD paveikslėlių biblioteką.',
   'gifNotSupported'        => 'GIF paveikslėliai dažnai nėra palaikomi dėl licenzijavimo apribojimų. Vietoje jų gali tekti naudoti JPG arba PNG paveikslėlius.',
   'jpgNotSupported'        => 'JPG paveikslėliai nepalaikomi.',
   'pngNotSupported'        => 'PNG paveikslėliai nepalaikomi.',
   'unsupportedImageCreate' => 'Serveris nepalaiko GD funkcijos, kurios reikia šio paveikslėlio apdorojimui.',
   'jpgOrPngRequired'       => 'Paveikslėlių dydžio keitimo protokolas, nurodytas Jūsų nustatymuose, veikia tik su JPG arba PNG paveikslėlių tipais.',
   'rotateUnsupported'      => 'Paveikslėlių sukimas atrodo nėra palaikomas serverio.',
   'libPathInvalid'         => 'Paveikslėlių apdorojimo bibliotekos kelias neteisingas. Prašome paveikslėlių nustatymuose nurodyti teisingą kelią. {0, string)',
   'imageProcessFailed'     => 'Paveikslėlio apdorojimas nepavyko. Prašome įsitikinti, kad serveris palaiko pasirinktą protokolą, ir kad kelias iki paveikslėlių bibliotekos nurodytas teisingai.',
   'rotationAngleRequired'  => 'Paveikslėlio pasukimui reikia nurodyti sukimo kampą.',
   'invalidPath'            => 'Paveikslėlio kelias nurodytas neteisingai.',
   'copyFailed'             => 'Paveikslėlio kopijavimas nepavyko.',
   'missingFont'            => 'Nepavyksta rasti naudotino šrifto.',
   'saveFailed'             => 'Nepavyko išsaugoti paveikslėlio. Prašome įsitikinti, kad į paveikslėlio vardą ir direktoriją galima rašyti.',
   'invalidDirection'       => 'Apvertimo kryptis gali būti arba `vertical`, arba `horizontal`. Nurodyta: {0}',
   'exifNotSupported'       => 'Serverio PHP nepalaiko EXIF duomenų skaitymo.',
];
