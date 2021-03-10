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
 * @author     Luca Marco Rasia
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'sourceImageRequired'    => 'Devi specificare una sorgente immagine nelle tue preferenze.',
	'gdRequired'             => 'La libreria GD di gestione immagini è richiesta per poter utilizzare questa caratteristica.',
	'gdRequiredForProps'     => 'Il tuo server deve supportare la libreria GD di gestione immagini per determinare le proprietà dell\'immagine.',
	'gifNotSupported'        => 'Le immagini GIF spesso non sono supportate a causa delle restrizioni di licenza. Potresti, invece, dover usare immagini JPG or PNG.',
	'jpgNotSupported'        => 'Immagini JPG non sono supportate.',
	'pngNotSupported'        => 'Immagini PNG non sono supportate.',
	'unsupportedImageCreate' => 'Il tuo server non supporta la funzione GD richiesta per processare questo tipo di immagine.',
	'jpgOrPngRequired'       => 'Il protocollo di ridimensionamento dell\'immagine specificato nelle tue preferenze funziona solo con i tipi di immagine JPEG o PNG.',
	'rotateUnsupported'      => 'La rotazione dell\'immagine sembra non essere supportata dal tuo server.',
	'libPathInvalid'         => 'Il percorso della tua libreria di gestione immagini non è corretto. Si prega di indicare il persorso corretto nelle tue preferenze immagine. {0, string)',
	'imageProcessFailed'     => 'Elaborazione dell\'immagine fallita. Per favore verifica che il tuo server supporti il protocollo scelto e che il percorso della tua libreria di gestione immagini sia corretto.',
	'rotationAngleRequired'  => 'Un angolo di rotazione è richiesto per ruotare l\'immagine.',
	'invalidPath'            => 'Il percorso dell\'immagine non è corretto.',
	'copyFailed'             => 'L\'esecuzione del lavoro di copia dell\'immagine è fallito.',
	'missingFont'            => 'Impossibile trovare un font da usare.',
	'saveFailed'             => 'Impossibile salvare l\'immagine. Prego assicurati che l\'immagine e la cartella siano scrivibili.',
	'invalidDirection'       => 'La direzione per capovolgere può essere solo `vertical` o `horizontal`. Selezionato: {0}',
	'exifNotSupported'       => 'La lettura dei dati EXIF non è supportata da questa installazione PHP.',
];
