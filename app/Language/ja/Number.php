<?php
/**
 * Number language strings.
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
   'terabyteAbbr' => 'TB',
   'gigabyteAbbr' => 'GB',
   'megabyteAbbr' => 'MB',
   'kilobyteAbbr' => 'KB',
   'bytes'        => 'Bytes',

	// don't forget the space in front of these!
    // Japanese numeral are ten-thousand-based, cause it can not adapt 'number_to_amount()' as below.
    // 日本語の位取りは万進法なのでnumber_to_amount()の動作に適応するのは困難なためローカライズしません。
    // あえて使いたい人は、完全ではありませんがコメントの内容に置き換えることも可能です
   'thousand'     => ' thousand', //thousand → '千'
   'million'      => ' million', //million → '百万'
   'billion'      => ' billion', //billion → '0億' 1 billionは 10億 ただし、カンマ位取りがおかしくなります（1,0000億というような表示になります）
   'trillion'     => ' trillion', //trillion → '兆'
   'quadrillion'  => ' quadrillion', //quadrillion → ',000兆' 京としたいところだが 1 quadrillion は 1000兆なので
];
