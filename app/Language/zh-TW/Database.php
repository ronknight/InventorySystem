<?php

/**
 * Database language strings.
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
   'invalidEvent'                     => '{0} 並不是一個有效的模型回呼。',
   'invalidArgument'                  => '必須提供有效的： {0}.',
   'invalidAllowedFields'             => '必須為模型指定允許的欄位： {0}',
   'emptyDataset'                     => '{0} 中沒有資料。',
   'failGetFieldData'                 => '無法從資料庫中取得欄位資料。',
   'failGetIndexData'                 => '無法從資料庫中取得索引資料。',
   'failGetForeignKeyData'            => '無法從資料庫中取得外來鍵資料。',
   'parseStringFail'                  => '解析密鑰字串失敗',
   'featureUnavailable'               => '此功能不適用於您所使用的資料庫。',
   'tableNotFound'                    => '在當前的資料庫中找不到資料表：`{0}` ',
   'noPrimaryKey'                     => '在`{0}` 模型類別中未指定主鍵。 ',
   'noDateFormat'                     => '在`{0}` 模型類別中日期格式（dateFormat）無效。 ',
   'fieldNotExists'                   => '找不到欄位：`{0}`。',
   'forEmptyInputGiven'               => '`{0}`欄位不可聲明為空。',
   'forFindColumnHaveMultipleColumns' => '欄位名稱不可為多值。',
];
