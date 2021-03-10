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
 * @author     Marco Monteiro
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'sourceImageRequired'    => 'Deve especificar uma imagem de origem em suas preferências.',
	'gdRequired'             => 'A biblioteca de imagens GD é necessária para usar esse recurso.',
	'gdRequiredForProps'     => 'O servidor deve suportar a biblioteca de imagens GD para determinar as propriedades da imagem.',
	'gifNotSupported'        => 'Imagens GIF geralmente não são suportadas devido a restrições de licenciamento. Pode usar imagens JPG ou PNG.',
	'jpgNotSupported'        => 'Imagens JPG não são suportadas.',
	'pngNotSupported'        => 'Imagens PNG não são suportadas.',
	'unsupportedImageCreate' => 'O servidor não suporta a função GD necessária para processar este tipo de imagem.',
	'jpgOrPngRequired'       => 'O protocolo de redimensionamento de imagem especificado nas suas preferências só funciona com os tipos de imagem JPEG ou PNG.',
	'rotateUnsupported'      => 'A rotação de imagem não parece ser suportada pelo seu servidor.',
	'libPathInvalid'         => 'O caminho para a sua biblioteca de imagens não está correto. Por favor, defina o caminho correto nas suas preferências de imagem. {0, string)',
	'imageProcessFailed'     => 'O processamento de imagem falhou. Por favor, verifique se o seu servidor suporta o protocolo escolhido e se o caminho para a sua biblioteca de imagens está correto.',
	'rotationAngleRequired'  => 'Um ângulo de rotação é necessário para girar a imagem.',
	'invalidPath'            => 'O caminho para a imagem não está correto.',
	'copyFailed'             => 'A rotina de cópia de imagem falhou.',
	'missingFont'            => 'Não é possível encontrar uma fonte para usar.',
	'saveFailed'             => 'Não é possível salvar a imagem. Por favor, certifique-se de que a imagem e o diretório de arquivos são graváveis.',
	'invalidDirection'       => 'A direção de inversão pode ser apenas `vertical` ou `horizontal`. Fornecido: {0}',
	'exifNotSupported'       => 'A leitura de dados EXIF não é suportada por esta instalação do PHP.',
];
