<?php
/**
 * Time language strings.
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
   'invalidMonth'   => '月は1から12を指定してください。 入力された値: {0}', //Months must be between 1 and 12. Given: {0}
   'invalidDay'     => '日は1から31を指定してください。 入力された値: {0}', //Days must be between 1 and 31. Given: {0}
   'invalidOverDay' => '日は1から{0}を指定してください。 入力された値: {1}', //Days must be between 1 and {0}. Given: {1}
   'invalidHours'   => '時は0から23を指定してください。 入力された値: {0}', //Hours must be between 0 and 23. Given: {0}
   'invalidMinutes' => '分は0から59を指定してください。 入力された値: {0}', //Minutes must be between 0 and 59. Given: {0}
   'invalidSeconds' => '秒は0から59を指定してください。 入力された値: {0}', //Seconds must be between 0 and 59. Given: {0}
   'years'          => '{0, plural, =1{# 年} other{# 年}}', //{0, plural, =1{# year} other{# years}}
   'months'         => '{0, plural, =1{# ヶ月} other{# ヶ月}}', //{0, plural, =1{# month} other{# months}}
   'weeks'          => '{0, plural, =1{# 週間} other{# 週間}}', //{0, plural, =1{# week} other{# weeks}}
   'days'           => '{0, plural, =1{# 日} other{# 日}}', //{0, plural, =1{# day} other{# days}}
   'hours'          => '{0, plural, =1{# 時間} other{# 時間}}', //{0, plural, =1{# hour} other{# hours}}
   'minutes'        => '{0, plural, =1{# 分} other{# 分}}', //{0, plural, =1{# minute} other{# minutes}}
   'seconds'        => '{0, plural, =1{# 秒} other{# 秒}}', //{0, plural, =1{# second} other{# seconds}}
   'ago'            => '{0}前', //{0} ago
   'inFuture'       => '{0}後', //in {0}
   'yesterday'      => '昨日', //Yesterday
   'tomorrow'       => '明日', //Tomorrow
   'now'            => 'ついさっき', //Just now
];
