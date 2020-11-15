<?php
/**
 * Email language strings.
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
   'mustBeArray'          => 'email 검증 메서드에는 반드시 배열을 넘겨줘야 합니다.', // CI4 기준 : is_array()를 통과하지 못한 경우에 발생하는 에러 메시지. // 'The email validation method must be passed an array.',
   'invalidAddress'       => '유효하지 않은 이메일 주소: {0}', // 'Invalid email address: {0}',
   'attachmentMissing'    => '다음 첨부파일을 찾을 수 없습니다: {0}', // 'Unable to locate the following email attachment: {0}',
   'attachmentUnreadable' => '이 첨부파일을 열 수 없습니다: {0}', // 'Unable to open this attachment: {0}',
   'noFrom'               => '"From"헤더 정보(발신인) 없이 메일을 보낼 수 없습니다.', // 'Cannot send mail with no "From" header.',
   'noRecipients'         => '반드시 수신인(To, Cc, 또는 Bcc)을 지정해야 합니다.', // 'You must include recipients: To, Cc, or Bcc',
   'sendFailurePHPMail'   => 'PHP의 mail()을 사용해서 메일을 보낼 수 없습니다. PHP의 mail()을 사용해서, 메일을 보낼 수 없도록 서버에 설정되어 있을 수도 있습니다.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
   'sendFailureSendmail'  => 'PHP의 Sendmail을 사용해서 메일을 보낼 수 없습니다. PHP의 Sendmail을 사용해서, 메일을 보낼 수 없도록 서버에 설정되어 있을 수도 있습니다.', // 'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.',
   'sendFailureSmtp'      => 'PHP의 SMTP를 사용해서 메일을 보낼 수 없습니다. PHP의 SMTP를 사용해서, 메일을 보낼 수 없도록 서버에 설정되어 있을 수도 있습니다.', // 'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.',
   'sent'                 => '다음 protocol을 사용해서 메일 보내기 성공: {0}', // 'Your message has been successfully sent using the following protocol: {0}',
   'noSocket'             => 'Sendmaill을 사용하기 위해서 소켓을 열 수가 없습니다. 환경설정을 확인해 주세요.', // 'Unable to open a socket to Sendmail. Please check settings.',
   'noHostname'           => 'SMTP hostname을 지정하지 않았습니다.', // 'You did not specify a SMTP hostname.',
   'SMTPError'            => '다음의 SMTP 에러가 발생하였습니다: {0}', // 'The following SMTP error was encountered: {0}',
   'noSMTPAuth'           => '에러: SMTP에서 사용되는 username(ID)과 password를 지정해야 합니다.', // 'Error: You must assign a SMTP username and password.',
   'failedSMTPLogin'      => '로그인 명령을 보낼 수 없습니다. SMTP 에러: {0}', // CI4 기준 : 334 에러 // 'Failed to send AUTH LOGIN command. Error: {0}',
   'SMTPAuthUsername'     => 'username(ID) 인증 실패. SMTP 에러: {0}', // 'Failed to authenticate username. Error: {0}',
   'SMTPAuthPassword'     => 'password 인증 실패. SMTP 에러: {0}', // 'Failed to authenticate password. Error: {0}',
   'SMTPDataFailure'      => 'SMTP를 통해, data를 전송할 수 없습니다. {0}', // CI4 기준 : sendData() 결과가 false일 경우 에러 메시지 발생. // 'Unable to send data: {0}',
   'exitStatus'           => '종료 상태 코드: {0}', // 'Exit status code: {0}',
];
