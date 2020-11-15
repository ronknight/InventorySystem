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
   'mustBeArray'          => 'メール検証メソッドには配列を渡す必要があります。', //The email validation method must be passed an array.
   'invalidAddress'       => '無効なメールアドレス: {0}', //Invalid email address: {0}
   'attachmentMissing'    => '次のメールの添付ファイルを見つけることができません。: {0}', //Unable to locate the following email attachment: {0}
   'attachmentUnreadable' => 'この添付ファイルを開くことができません。: {0}', //Unable to open this attachment: {0}
   'noFrom'               => '"From"ヘッダの無いメールは送信できません。', //Cannot send mail with no "From" header.
   'noRecipients'         => 'To, Cc, または Bccを受信者に含める必要があります。', //You must include recipients: To, Cc, or Bcc
   'sendFailurePHPMail'   => 'PHP関数mail()がメール送信に利用できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', //Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.
   'sendFailureSendmail'  => 'PHPでSendmailコマンドがメール送信に利用できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', //Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.
   'sendFailureSmtp'      => 'PHPでSMTPを使ったメール送信が利用できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', //Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.
   'sent'                 => 'あなたのメッセージは、以下のプロトコルを使用して正常に送信されました。: {0}', //Your message has been successfully sent using the following protocol: {0}
   'noSocket'             => 'Sendmailへのソケットが開けません。設定を確認してください。', //Unable to open a socket to Sendmail. Please check settings.
   'noHostname'           => 'SMTPホスト名を指定していません。', //You did not specify a SMTP hostname.
   'SMTPError'            => '以下のSMTPエラーが発生しました。: {0}', //The following SMTP error was encountered: {0}
   'noSMTPAuth'           => 'エラー: SMTPのユーザー名とパスワードを設定する必要があります。', //Error: You must assign a SMTP username and password.
   'failedSMTPLogin'      => 'AUTH LOGIN コマンドの送信に失敗しました。 エラー: {0}', //Failed to send AUTH LOGIN command. Error: {0}
   'SMTPAuthUsername'     => 'ユーザ名の認証に失敗しました。 エラー: {0}', //Failed to authenticate username. Error: {0}
   'SMTPAuthPassword'     => 'パスワードの認証に失敗しました。 エラー: {0}', //Failed to authenticate password. Error: {0}
   'SMTPDataFailure'      => 'データの送信ができません: {0}', //Unable to send data: {0}
   'exitStatus'           => '終了ステータスコード: {0}', //Exit status code: {0}
];
