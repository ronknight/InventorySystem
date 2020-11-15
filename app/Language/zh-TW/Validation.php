<?php

/**
 * Validation language strings.
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
	// Core Messages
   'noRuleSets'            => '驗證設定中沒有指定任何規則。',
   'ruleNotFound'          => '{0} 不是一個有效的規則。',
   'groupNotFound'         => '{0} 不是一個驗證規則群組。',
   'groupNotArray'         => '{0} 規則群組的型別必須是陣列。',
   'invalidTemplate'       => '{0} 不是一個有效的驗證樣板。',

	// Rule Messages
   'alpha'                 => '欄位 {field} 的組成只能是字母字元。',
   'alpha_dash'            => '欄位 {field} 的組成只能是字母數字、底線，以及破折號。',
   'alpha_numeric'         => '欄位 {field} 的組成只能是字母數字。',
   'alpha_numeric_space'   => '欄位 {field} 的組成只能是字母數字以及空格。',
   'alpha_space'           => '欄位 {field} 的組成只能是字母字元以及空格。',
   'decimal'               => '欄位 {field} 的組成只能是十進位的數字。',
   'differs'               => '欄位 {field} 必須與欄位 {param} 不同。',
   'equals'                => '欄位 {field} 必須全等於欄位 {param}。',
   'exact_length'          => '欄位 {field} 的長度必須剛好是 {param} 個字元。',
   'greater_than'          => '欄位 {field} 中的數字必須大於 {param}。',
   'greater_than_equal_to' => '欄位 {field} 中的數字必須大於或等於 {param}。',
   'in_list'               => '欄位 {field} 必須是下列內容其中之一： {param}。',
   'integer'               => '欄位 {field} 的型別必須是整數。',
   'is_natural'            => '欄位 {field} 只能是數字。',
   'is_natural_no_zero'    => '欄位 {field} 只能是大於零的數字。',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => '欄位 {field} 必須是唯一的值。',
   'less_than'             => '欄位 {field} 中的數字必須小於 {param}。',
   'less_than_equal_to'    => '欄位 {field} 中的數字必須小於或等於 {param}。',
   'matches'               => '欄位 {field} 與欄位 {param} 不匹配。',
   'max_length'            => '欄位 {field} 的長度不能超過 {param} 個字元。',
   'min_length'            => '欄位 {field} 的長度必須至少是 {param} 的字元。',
   'not_equals'            => '欄位 {field} 不能是： {param}.',
   'numeric'               => '欄位 {field} 必須包含數字。',
   'regex_match'           => '欄位 {field} 的格式不正確。',
   'required'              => '欄位 {field} 是必填欄位。',
   'required_with'         => '如果 {param} 存在時，則欄位 {field} 為必填欄位。',
   'required_without'      => '如果 {param} 不存在時，則欄位 {field} 為必填欄位。',
   'timezone'              => '欄位 {field} 必須是有效的時區。',
   'valid_base64'          => '欄位 {field} 必須是有效的 base64 字串。',
   'valid_email'           => '欄位 {field} 必須是有效的 email 字串。',
   'valid_emails'          => '欄位 {field} 中的 email 必須都是有效的email。',
   'valid_ip'              => '欄位 {field} 必須是有效的 IP。',
   'valid_url'             => '欄位 {field} 必須是有效的 URL.',
   'valid_date'            => '欄位 {field} 必須是有效的日期格式',

	// Credit Cards
   'valid_cc_num'          => '欄位 {field} 並不是一組有效的信用卡號碼。',

	// Files
   'uploaded'              => '欄位 {field} 並非上傳檔案的格式。',
   'max_size'              => '欄位 {field} 的檔案大小超過最大值。',
   'is_image'              => '欄位 {field} 並不是圖片擋。',
   'mime_in'               => '欄位 {field} 的類型並非： mime 。',
   'ext_in'                => '欄位 {field} 並不是有效的擴充檔案。',
   'max_dims'              => '欄位 {field} 並不是有效的圖像，或者是太寬、太高。',
];
