<?php

/**
 * Images language strings.
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
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'В настройках необходимо указать исходное изображение.',
   'gdRequired'             => 'Для использования этой функции требуется библиотека изображений GD.',
   'gdRequiredForProps'     => 'Ваш сервер должен поддерживать библиотеку изображений GD для определения свойств изображения.',
   'gifNotSupported'        => 'Изображения GIF часто не поддерживаются из-за лицензионных ограничений.',
   'jpgNotSupported'        => 'Изображения JPG не поддерживаются.',
   'pngNotSupported'        => 'Изображения PNG не поддерживаются.',
   'fileNotSupported'       => 'Предоставленный файл не является поддерживаемым типом изображения.',
   'unsupportedImageCreate' => 'Ваш сервер не поддерживает функцию GD, необходимую для обработки этого типа изображения.',
   'jpgOrPngRequired'       => 'Протокол изменения размера изображения, указанный в настройках, работает только с типами изображений JPEG или PNG.',
   'rotateUnsupported'      => 'Вращение изображений не поддерживается вашим сервером.',
   'libPathInvalid'         => 'Неверный путь к библиотеке изображений.. {0, string)',
   'imageProcessFailed'     => 'Не удалось обработать изображение.',
   'rotationAngleRequired'  => 'Для поворота изображения требуется установить угол поворота.',
   'invalidPath'            => 'Неверный путь к изображению.',
   'copyFailed'             => 'Не удалось выполнить копирование изображения.',
   'missingFont'            => 'Не удается найти шрифт для использования.',
   'saveFailed'             => 'Не удалось сохранить изображение.',
   'invalidDirection'       => 'Направление для поворота может быть только "вертикальным" или "горизонтальным". Указано: {0}.',
   'exifNotSupported'       => 'Чтение данных EXIF не поддерживается в вашем PHP.',
];
