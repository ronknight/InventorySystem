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
   'noRuleSets'            => '验证配置中没有指定任何规则。',
   'ruleNotFound'          => '{0} 不是一个有效的规则。',
   'groupNotFound'         => '{0} 不是一个有效的规则验证组。',
   'groupNotArray'         => '{0} 验证组必须是一个数组类型。',
   'invalidTemplate'       => '{0} 不是有效的验证模板。',

	// Rule Messages
   'alpha'                 => '{field} 字段只能包含字母字符。',
   'alpha_dash'            => '{field} 字段只能包含字母数字、下划线和中划线。',
   'alpha_numeric'         => '{field} 字段只能包含字母数字。',
   'alpha_numeric_space'   => '{field} 字段只能包含字母数字和空格。',
   'alpha_space'           => '{field} 字段只能包含字母字符和空格。',
   'decimal'               => '{field} 字段只能包含十进制数字。',
   'differs'               => '{field} 字段必须与 {param} 字段不同。',
   'equals'                => 'The {field} field must be exactly: {param}.',
   'exact_length'          => '{field} 字段的长度必须是 {param} 个字符。',
   'greater_than'          => '{field} 字段必须是大于 {param} 的数字。',
   'greater_than_equal_to' => '{field} 字段必须是大于或等于 {param} 的数字。',
   'in_list'               => '{field} 字段必须是以下内容之一: {param}.',
   'integer'               => '{field} 字段必须是整数。',
   'is_natural'            => '{field} 字段必须是数字。',
   'is_natural_no_zero'    => '{field} 字段必须是数字且大于0。',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => '{field} 字段必须是唯一的值。',
   'less_than'             => '{field} 字段必须小于 {param} 的数字。',
   'less_than_equal_to'    => '{field} 字段必须小于或等于 {param} 的数字。',
   'matches'               => '{field} 字段与 {param} 字段不匹配。',
   'max_length'            => '{field} 字段长度不能超过 {param} 个字符。',
   'min_length'            => '{field} 字段长度至少是 {param} 个字符。',
   'not_equals'            => 'The {field} field cannot be: {param}.',
   'numeric'               => '{field} 字段只能包含数字。',
   'regex_match'           => '{field} 字段格式不正确。',
   'required'              => '{field} 是必填字段。',
   'required_with'         => '如果 {param} 存在时，{field} 是必填字段。',
   'required_without'      => '如果 {param} 不存在时，{field} 是必填字段。',
   'timezone'              => '{field} 字段必须是有效的时区。',
   'valid_base64'          => '{field} 字段必须是有效的 base64 字符串。',
   'valid_email'           => '{field} 字段必须是有效的 Email 地址。',
   'valid_emails'          => '{field} 字段必须包含所有有效的 Email 地址。',
   'valid_ip'              => '{field} 字段必须是有效的 IP 地址。',
   'valid_url'             => '{field} 字段必须是有效的 URL 地址。',
   'valid_date'            => '{field} 字段必须是有效的日期。',

	// Credit Cards
   'valid_cc_num'          => '{field} 字段不是有效的信用卡号码。',

	// Files
   'uploaded'              => '{field} 不是有效上传文件。',
   'max_size'              => '{field} 文件太大了。',
   'is_image'              => '{field} 不是有效的图片上传文件。',
   'mime_in'               => '{field} 不是有效的 mime 类型。',
   'ext_in'                => '{field} 没有有效的文件扩展名。',
   'max_dims'              => '{field} 不是有效的图片文件，或图片太高、太宽了，请调整图片尺寸。',
];
