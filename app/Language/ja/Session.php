<?php
/**
 * Session language strings.
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
   'missingDatabaseTable'   => '`sessionSavePath`はDBセッションハンドラが動作するテーブルが必要です。', //`sessionSavePath` must have the table name for the Database Session Handler to work.
   'invalidSavePath'        => 'Session: 設定された保存パス"{0}"はディレクトリではないか、存在しないか、作成できません。', //Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.
   'writeProtectedSavePath' => 'Session: 設定された保存パス"{0}"はPHPプロセスから書き込みができません。', //Session: Configured save path "{0}" is not writable by the PHP process.
   'emptySavePath'          => 'Session: 保存パスが存在しません。', //Session: No save path configured.
   'invalidSavePathFormat'  => 'Session: 無効な Redis 保存パス形式です。: {0}', //Session: Invalid Redis save path format: {0}
];
