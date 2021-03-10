<?php
/**
 * Encryption language strings.
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
   'noDriverRequested'    => '드라이버가 요청되지 않았습니다.', // 미스 데이지가 화낼 것입니다. (역자 주: 영화 Driving Miss Daisy)', // 영어권 문화와 관련된 유머 - 미스 데이지 제외 : (역자 주: 1989년 개봉된 아카데미 작품상을 받은 드라마/코미디 영화 Driving Miss Daisy) @see: https://en.wikipedia.org/wiki/Driving_Miss_Daisy)', // 'No driver requested; Miss Daisy will be so upset!',
   'noHandlerAvailable'   => '사용이 가능한 {0} 암호화 핸들러를 찾을 수 없습니다.', // 'Unable to find an available {0} encryption handler.',
   'unKnownHandler'       => '알 수 없는 드라이버: "{0}" 경우는 설정될 수 없습니다.', // '"{0}" cannot be configured.',
   'starterKeyNeeded'     => '암호화 처리 시 start key가 필요합니다.', // CI4 기준 : Encryption.php initialize()에서 key가 없거나, OpenSSLHandler.php encrypt()에서 암호화 키값이 없는 경우. 에러 메시지. // 'Encrypter needs a starter key.',
   'authenticationFailed' => '복호화: 인증 실패', // 'Decrypting: authentication failed.',
   'encryptionFailed'     => '암호화 실패함', // 'Encryption failed.',
];
