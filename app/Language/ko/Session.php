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
   'missingDatabaseTable'   => '데이터베이스 세션 핸들러가 동작하기 위해서, 반드시 `sessionSavePath`에 테이블 명이 지정되어야 합니다.', // '`sessionSavePath` must have the table name for the Database Session Handler to work.',
   'invalidSavePath'        => 'Session: 설정된 세션 저장 경로 "{0}"의 경우, 디렉터리가 아니거나 존재하지 않거나 생성할 수 없습니다.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
   'writeProtectedSavePath' => 'Session: 설정된 세션 저장 경로 "{0}"의 경우, PHP 프로세스에 의해 쓰기를 할 수 없습니다.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
   'emptySavePath'          => 'Session: 저장 경로가 설정되어 있지 않습니다.', // 'Session: No save path configured.',
   'invalidSavePathFormat'  => 'Session: 유효하지 않는 Redis 세션 저장 경로 형식: {0}', // 'Session: Invalid Redis save path format: {0}',
];
