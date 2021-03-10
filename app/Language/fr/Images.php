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
   'sourceImageRequired'    => 'Vous devez spécifier une image source dans vos préférences.',
   'gdRequired'             => 'La bibliothèque "GD image library" est nécessaire pour utiliser cette fonctionnalité.',
   'gdRequiredForProps'     => 'Votre serveur doit supporter la bibliothèque "GD image library" afin de déterminer les propriétés de l\'image.',
   'gifNotSupported'        => 'Les images GIF sont souvent non supportées du fait des restrictions de licence. Vous devrez peut-être utiliser des images JPG ou PNG à la place.',
   'jpgNotSupported'        => 'Les images JPG ne sont pas supportées.',
   'pngNotSupported'        => 'Les images PNG ne sont pas supportées.',
   'unsupportedImageCreate' => 'Votre serveur ne supporte pas la fonction GD nécessaire pour traiter ce type d\'image.',
   'jpgOrPngRequired'       => 'Le protocole de redimensionnement d\'image spécifié dans vos préférences ne fonctionne qu\'avec les images de type JPEG ou PNG.',
   'rotateUnsupported'      => 'La rotation d\'image ne semble pas être supportée par votre serveur.',
   'libPathInvalid'         => 'Le chemin vers votre bibliothèque d\'image est incorrect. Veuillez paramétrer le chemin correct dans vos préférences image. {0, string)',
   'imageProcessFailed'     => 'Échec du traitement de l\'image. Veuillez vérifier que votre serveur supporte le protocole choisi et que le chemin vers votre bibliothèque d\'image est correct.',
   'rotationAngleRequired'  => 'Un angle de rotation est requis pour opérer une rotation de l\'image.',
   'invalidPath'            => 'Le chemin vers l\'image est incorrect.',
   'copyFailed'             => 'Échec durant la copie de l\'image.',
   'missingFont'            => 'Impossible de trouver une police de caractéres à utiliser.',
   'saveFailed'             => 'Impossible de sauvegarder l\'image. Veuillez vous assurer que l\'image et le répertoire de fichier ont les permissions en écriture.',
   'invalidDirection'       => 'Seul un retournement `vertical` ou `horizontal` peut être effectué. Donné : {0}',
   'exifNotSupported'       => 'La lecture des données EXIF n\'est pas supportée dans cette installation de PHP.',
];
