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
 * @author     Shoji Ogura
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
   'noRuleSets'            => 'バリデーション構成で指定されたルールセットはありません。', //No rulesets specified in Validation configuration.
   'ruleNotFound'          => '{0}は有効なルールではありません。', //{0} is not a valid rule.
   'groupNotFound'         => '{0}はバリデーションルールグループではありません。', //{0} is not a validation rules group.
   'groupNotArray'         => '{0}ルールグループは配列でなければなりません。', //{0} rule group must be an array.
   'invalidTemplate'       => '{0}は有効なバリデーションテンプレートではありません。', //{0} is not a valid Validation template.

	// Rule Messages
   'alpha'                 => '{field} は半角英字のみ利用可能です。', //The {field} field may only contain alphabetical characters.
   'alpha_dash'            => '{field} は半角の英数・アンダースコア・ハイフンのみ利用可能です。', //The {field} field may only contain alphanumeric, underscore, and dash characters.
   'alpha_numeric'         => '{field} は半角英数のみ利用可能です。', //The {field} field may only contain alphanumeric characters.
   'alpha_numeric_punct'   => '{field} は半角の英数・空白と「~ ! # $ % & * - _ + = | : .」のみ利用可能です。', //The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.
   'alpha_numeric_space'   => '{field} は半角の英数と空白のみ利用可能です。', //The {field} field may only contain alphanumeric and space characters.
   'alpha_space'           => '{field} は半角の英字と空白のみ利用可能です。', //The {field} field may only contain alphabetical characters and spaces.
   'decimal'               => '{field} は半角数値を入力してください。', //The {field} field must contain a decimal number.
   'differs'               => '{field} には {param} と異なる値を入力してください。', //The {field} field must differ from the {param} field.
   'equals'                => '{field} は {param} と同じ値でなければなりません。', //The {field} field must be exactly: {param}.
   'exact_length'          => '{field} の文字数は、{param}文字で入力してください。', //The {field} field must be exactly {param} characters in length.
   'greater_than'          => '{field} には {param} より大きな半角数値を入力してください。', //The {field} field must contain a number greater than {param}.
   'greater_than_equal_to' => '{field} には {param} 以上の半角数値を入力してください。', //The {field} field must contain a number greater than or equal to {param}.
   'hex'                   => '{field} は16進数で入力してください。', //The {field} field may only contain hexidecimal characters.
   'in_list'               => '{field} には、{param} のいずれかの値を入力してください', //The {field} field must be one of: {param}.
   'integer'               => '{field} には、半角整数を入力してください。', //The {field} field must contain an integer.
   'is_natural'            => '{field} には、半角数字のみを入力してください。', //The {field} field must only contain digits.
   'is_natural_no_zero'    => '{field} には、半角数字で0より大きな数値を入力してください。', //The {field} field must only contain digits and must be greater than zero.
   'is_not_unique'         => '{field} には、データベース内に存在する値を入力してください。', //The {field} field must contain a previously existing value in the database.
   'is_unique'             => '{field} はユニークな値でなければなりません。', //The {field} field must contain a unique value.
   'less_than'             => '{field} は {param} より小さな半角数値を入力してください。', //The {field} field must contain a number less than {param}.
   'less_than_equal_to'    => '{field} は {param} 以下の半角数値を入力してください。', //The {field} field must contain a number less than or equal to {param}.
   'matches'               => '{field} と {param} が一致しません。.', //The {field} field does not match the {param} field.
   'max_length'            => '{field} は {param} 文字以内で入力してください。', //The {field} field cannot exceed {param} characters in length.
   'min_length'            => '{field} は {param} 文字以上で入力してください。', //The {field} field must be at least {param} characters in length.
   'not_equals'            => '{field} を {param} にすることはできません。', //The {field} field cannot be: {param}.
   'numeric'               => '{field} は半角の数値のみを入力してください。.', //The {field} field must contain only numbers.
   'regex_match'           => '{field} は正しいフォーマットではありません。', //The {field} field is not in the correct format.
   'required'              => '{field} 必須項目です。', //The {field} field is required.
   'required_with'         => '{field} は {param} が存在する場合には必須項目です。', //The {field} field is required when {param} is present.
   'required_without'      => '{field} は {param} が存在しない場合には必須項目です。', //The {field} field is required when {param} is not present.
   'string'                => '{field} には、有効な文字列入力してください。', //The {field} field must be a valid string.
   'timezone'              => '{field} には、有効なタイムゾーンを入力してください。', //The {field} field must be a valid timezone.
   'valid_base64'          => '{field} には、有効なbase64文字列を入力してください。', //The {field} field must be a valid base64 string.
   'valid_email'           => '{field} には、有効なメールアドレスを入力してください。', //The {field} field must contain a valid email address.
   'valid_emails'          => '{field} には、すべて有効なメールアドレスを入力してください。', //The {field} field must contain all valid email addresses.
   'valid_ip'              => '{field} には、有効なIPアドレスを入力してください。', //The {field} field must contain a valid IP.
   'valid_url'             => '{field} には、有効なURLを入力してください。', //The {field} field must contain a valid URL.
   'valid_date'            => '{field} には、有効な日付を入力してください。', //The {field} field must contain a valid date.

	// Credit Cards
   'valid_cc_num'          => '{field} は有効なクレジットカード番号ではないようです。', //{field} does not appear to be a valid credit card number.

	// Files
   'uploaded'              => '{field} は有効なファイルではありません。', //{field} is not a valid uploaded file.
   'max_size'              => '{field} はファイルサイズが大きすぎます。', //{field} is too large of a file.
   'is_image'              => '{field} には画像ファイルを指定してください。', //{field} is not a valid, uploaded image file.
   'mime_in'               => '{field} は有効なMIMEタイプではありません。', //{field} does not have a valid mime type.
   'ext_in'                => '{field} は有効なファイル拡張子ではありません。', //{field} does not have a valid file extension.
   'max_dims'              => '{field} は画像ではないか、幅が広すぎるか高すぎるかのどちらかです。', //{field} is either not an image, or it is too wide or tall.
];
