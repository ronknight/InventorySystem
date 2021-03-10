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
 * @author     Fernán Castro Asensio
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'sourceImageRequired'    => 'Debe especificar el origen de la imagen en las preferencias.',
	'gdRequired'             => 'Se requiere la librería de imágenes GD para esta funcionalidad.',
	'gdRequiredForProps'     => 'Su servidor debe soportar la librería de imágenes GD para determinar las propiedades de la imagen.',
	'gifNotSupported'        => 'Las imágnes GIF no suelen ser soportadas por restricciones de licencia. Puede utilizar imágenes JPG o PNG en su lugar.',
	'jpgNotSupported'        => 'No se soportan imágnes JPG.',
	'pngNotSupported'        => 'No se soportan imágnes PNG.',
	'unsupportedImageCreate' => 'Su servidor no soporta la función GD necesaria para procesar este tipo de imagen.',
	'jpgOrPngRequired'       => 'El protocolo de escalado especificado en sus preferencias solo funciona con imágenes JPEG o PNG.',
	'rotateUnsupported'      => 'La rotación de imágenes no parece estar soportada por su servidor.',
	'libPathInvalid'         => 'La ruta a su librería de imágenes no es correcta. Por fabor corrija la ruta en sus preferencias de imagen. {0, string)',
	'imageProcessFailed'     => 'Ha fallado el procesamiento de imagen. Por favor, verifique que su servidor soporta el protocolo seleccionado y que la ruta a su librería de imágenes es correcta.',
	'rotationAngleRequired'  => 'Es necesario un ángulo de rotación para rotar la imagen.',
	'invalidPath'            => 'La ruta a la imagen no es correcta.',
	'copyFailed'             => 'La rutina de copiado de imagen ha fallado.',
	'missingFont'            => 'Incapaz de encontrar la fuente a utilizar.',
	'saveFailed'             => 'Incapaz de guardar la imagen. Por favor compruebe el archivo que la imagen y el directorio tienen permiso de escritura.',
	'invalidDirection'       => 'La dirección de girado puede ser solo `vertical` o `horizontal`. Seleccionado: {0}',
	'exifNotSupported'       => 'Leer datos EXIF no está soportado por esta instalación de PHP.',
];
