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
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'Validation 설정에서 지정된 규칙 집합이 없습니다.', // 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} 경우는 유효한 규칙이 아닙니다.', // '{0} is not a valid rule.',
   'groupNotFound'         => '{0} 경우는 유효성 규칙 그룹이 아닙니다.', // '{0} is not a validation rules group.',
   'groupNotArray'         => '{0} 규칙 그룹은 반드시 배열이어야 합니다.', // '{0} rule group must be an array.',
   'invalidTemplate'       => '{0} 경우는 유효한 Validation 템플릿이 아닙니다.', // '{0} is not a valid Validation template.',

	// Rule Messages
   'alpha'                 => '{field} 필드에는 알파벳 문자만 포함시킬 수 있습니다.', // 'The {field} field may only contain alphabetical characters.',
   'alpha_dash'            => '{field} 필드에는 알파벳 문자, 밑줄(_) 그리고 붙임표(-)만 포함시킬 수 있습니다.', // 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.',
   'alpha_numeric'         => '{field} 필드에는 알파벳, 숫자만 포함시킬 수 있습니다.', // 'The {field} field may only contain alpha-numeric characters.',
   'alpha_numeric_punct'   => '{field} 필드에는 알파벳, 공백, ~ ! # $ % & * - _ + = | : . 문자만 포함할 수 있습니다.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
   'alpha_numeric_space'   => '{field} 필드에는 알파벳, 숫자 그리고 공백만 포함시킬 수 있습니다.', // 'The {field} field may only contain alpha-numeric characters and spaces.',
   'alpha_space'           => '{field} 필드에는 알파벳과 공백만 포함시킬 수 있습니다.', // 'The {field} field may only contain alphabetical characters and spaces.',
   'decimal'               => '{field} 필드에는 소수(decimal number)만 포함시킬 수 있습니다.', // 'The {field} field must contain a decimal number.',
   'differs'               => '{field} 필드는 {param} 필드와 서로 달라야 합니다.', // 'The {field} field must differ from the {param} field.',
   'equals'                => '{field} 필드와 {param} 필드는 서로 같아야 합니다.', // 'The {field} field must be exactly: {param}.',
   'exact_length'          => '{field} 필드의 길이는 {param} 이어야 합니다.', // 'The {field} field must be exactly {param} characters in length.',
   'greater_than'          => '{field} 필드 값은 {param}보다 커야 합니다.', // 'The {field} field must contain a number greater than {param}.',
   'greater_than_equal_to' => '{field} 필드 값은 {param} 이상이어야 합니다.', // 'The {field} field must contain a number greater than or equal to {param}.',
   'hex'                   => '{field} 필드에는 16진수만 포함할 수 있습니다.', // 'The {field} field may only contain hexidecimal characters.',
   'in_list'               => '{field} 필드는 반드시 {param} 중에 하나여야 합니다.', // 'The {field} field must be one of: {param}.',
   'integer'               => '{field} 필드는 정수여야 합니다.', // 'The {field} field must contain an integer.',
   'is_natural'            => '{field} 필드는 숫자여야 합니다.', // 'The {field} field must only contain digits.',
   'is_natural_no_zero'    => '{field} 필드는 0보다 큰 숫자여야 합니다.', // 'The {field} field must only contain digits and must be greater than zero.',
   'is_not_unique'         => '{field} 필드에는 데이터베이스에 존재하는 기존 값을 포함해야 합니다.', // 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => '{field} 필드는 유일한 값이어야 합니다.', // 'The {field} field must contain a unique value.',
   'less_than'             => '{field} 필드 값은 {param}보다 작아야 합니다.', // 'The {field} field must contain a number less than {param}.',
   'less_than_equal_to'    => '{field} 필드 값은 {param} 이하여야 합니다.', // 'The {field} field must contain a number less than or equal to {param}.',
   'matches'               => '{field} 필드와 {param} 필드가 서로 일치하지 않습니다.', // 'The {field} field does not match the {param} field.',
   'max_length'            => '{field} 길이는 {param} 글자 수를 초과할 수 없습니다.', // 'The {field} field cannot exceed {param} characters in length.',
   'min_length'            => '{field} 길이는 적어도 {param} 글자 수보다 커야 합니다.', // 'The {field} field must be at least {param} characters in length.',
   'not_equals'            => '{field} 필드는 다음이 될 수 없습니다: {param}', // 'The {field} field cannot be: {param}.',
   'numeric'               => '{field} 필드는 오직 숫자만 포함되어야 합니다.', // 'The {field} field must contain only numbers.',
   'regex_match'           => '{field} 필드의 형식이 맞지 않습니다.', // 'The {field} field is not in the correct format.',
   'required'              => '{field} 필드가 있어야 합니다.', // 'The {field} field is required.',
   'required_with'         => '{field} 필드는 {param} 값이 있을 때, 해당 필드가 있어야 합니다.', // 'The {field} field is required when {param} is present.',
   'required_without'      => '{field} 필드는 {param} 값이 없을 때, 해당 필드가 있어야 합니다.', // 'The {field} field is required when {param} is not present.',
   'timezone'              => '{field} 필드는 반드시 유요한 시간대(timezone)이어야 합니다.', // 'The {field} field must be a valid timezone.',
   'valid_base64'          => '{field} 필드는 유효한 base64문자열이어야 합니다.', // 'The {field} field must be a valid base64 string.',
   'valid_email'           => '{field} 필드 값은 유효한 이메일 주소이어야 합니다.', // 'The {field} field must contain a valid email address.',
   'valid_emails'          => '{field} 필드의 값들은 유효한 이메일 주소이어야 합니다.', // 'The {field} field must contain all valid email addresses.',
   'valid_ip'              => '{field} 필드 값은 유요한 IP 주소이어야 합니다.', // 'The {field} field must contain a valid IP.',
   'valid_url'             => '{field} 필드 값은 유요한 URL 주소이어야 합니다.', // 'The {field} field must contain a valid URL.',
   'valid_date'            => '{field} 필드 값은 유요한 날짜여야 합니다.', // 'The {field} field must contain a valid date.',

	// Credit Cards
   'valid_cc_num'          => '{field}의 값은 잘못된 신용카드 번호입니다.', // '{field} does not appear to be a valid credit card number.',

	// Files
   'uploaded'              => '{field} 업로드 파일이 올바르지 않습니다.', // '{field} is not a valid uploaded file.',
   'max_size'              => '{field} 파일이 너무 큽니다.', // '{field} is too large of a file.',
   'is_image'              => '{field} 파일이 유효한 이미지 파일이 아닙니다.', // '{field} is not a valid, uploaded image file.',
   'mime_in'               => '{field} 경우, 유효한 MIME 타입을 갖고 있지 않습니다.', // '{field} does not have a valid mime type.',
   'ext_in'                => '{field} 경우, 유요한 파일 확장자를 갖고 있지 않습니다.', // '{field} does not have a valid file extension.',
   'max_dims'              => '{field} 경우, 이미지가 아니거나 이미지의 크기가 너무 넓거나 큽니다.', // '{field} is either not an image, or it is too wide or tall.',
];
