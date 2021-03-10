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
 * @author     XuanDung38 (Fox)
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
   'noRuleSets'            => 'Không có quy tắc nào được chỉ định trong cấu hình Xác thực.',
   'ruleNotFound'          => '{0} không phải là một quy tắc hợp lệ.',
   'groupNotFound'         => '{0} không phải là một nhóm quy tắc xác nhận.',
   'groupNotArray'         => '{0} nhóm quy tắc phải là một mảng.',
   'invalidTemplate'       => '{0} không phải là mẫu Xác thực hợp lệ.',

	// Rule Messages
   'alpha'                 => 'Trường {field} chỉ có thể chứa các ký tự chữ cái.',
   'alpha_dash'            => 'Trường {field} chỉ có thể chứa các ký tự chữ và số, gạch dưới và dấu gạch ngang.',
   'alpha_numeric'         => 'Trường {field} chỉ có thể chứa các ký tự chữ và số.',
   'alpha_numeric_punct'   => 'Trường {field} chỉ có thể chứa các ký tự chữ và số, dấu cách và ký tự ~! # $% & * - _ + = | :. ',
   'alpha_numeric_space'   => 'Trường {field} chỉ có thể chứa các ký tự chữ và số.',
   'alpha_space'           => 'Trường {field} chỉ có thể chứa các ký tự chữ cái and spaces.',
   'decimal'               => 'Trường {field} phải chứa một số thập phân.',
   'differs'               => 'Trường {field} phải khác với trường {param}.',
   'equals'                => 'Trường {field} phải chính xác: {param}.',
   'exact_length'          => 'Trường {field} phải có độ dài chính xác {param} ký tự.',
   'greater_than'          => 'Trường {field} phải chứa một số lớn hơn {param}.',
   'greater_than_equal_to' => 'Trường {field} phải chứa một số lớn hơn hoặc bằng {param}.',
   'hex'                   => 'Trường {field} chỉ có thể chứa các ký tự thập lục phân.',
   'in_list'               => 'Trường {field} phải là một trong: {param}.',
   'integer'               => 'Trường {field} phải chứa một số nguyên.',
   'is_natural'            => 'Trường {field} chỉ được chứa các chữ số.',
   'is_natural_no_zero'    => 'Trường {field} chỉ được chứa các chữ số và phải lớn hơn 0.',
   'is_not_unique'         => 'Trường {field} phải chứa một giá trị hiện có trước đó trong cơ sở dữ liệu.',
   'is_unique'             => 'Trường {field} phải chứa một giá trị duy nhất.',
   'less_than'             => 'Trường {field} phải chứa một số nhỏ hơn {param}.',
   'less_than_equal_to'    => 'Trường {field} phải chứa một số nhỏ hơn hoặc bằng {param}.',
   'matches'               => 'Trường {field} không khớp với trường {param}.',
   'max_length'            => 'Trường {field} không thể vượt quá {param} ký tự.',
   'min_length'            => 'Trường {field} phải có ít nhất {param} ký tự.',
   'not_equals'            => 'Trường {field} không thể là: {param}.',
   'numeric'               => 'Trường {field} chỉ được chứa số.',
   'regex_match'           => 'Trường {field} không đúng định dạng',
   'required'              => 'Trường {field} bắt buộc.',
   'required_with'         => 'Trường {field} bắt buộc khi {param} tồn tại.',
   'required_without'      => 'Trường {field} bắt buộc khi {param} không tồn tại.',
   'timezone'              => 'Trường {field} phải là múi giờ hợp lệ. ',
   'valid_base64'          => 'Trường {field} phải là một chuỗi base64 hợp lệ.',
   'valid_email'           => 'Trường {field} phải là địa chỉ email hợp lệ.',
   'valid_emails'          => 'Trường {field} phải chứa tất cả các địa chỉ email hợp lệ.',
   'valid_ip'              => 'Trường {field} phải là một địa chỉ IP hợp lệ.',
   'valid_url'             => 'Trường {field} phải là một đường dẫn URL hợp lệ.',
   'valid_date'            => 'Trường {field} phải là một ngày hợp lệ.',

	// Credit Cards
   'valid_cc_num'          => '{field} dường như không phải là số thẻ tín dụng hợp lệ.',

	// Files
   'uploaded'              => '{field} không phải là một tập tin tải lên hợp lệ.',
   'max_size'              => '{field} tệp quá nặng.',
   'is_image'              => '{field} không phải là một tập tin hình ảnh được tải lên hợp lệ.',
   'mime_in'               => '{field} phải là một tập tin có định dạng hợp lệ.',
   'ext_in'                => '{field} phải là phần mở rộng tập tin hợp lệ.',
   'max_dims'              => '{field} không phải là một hình ảnh, hoặc nó quá rộng hoặc quá cao.',
];
