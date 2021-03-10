<?php
/**
 * Database language strings.
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
   'invalidEvent'                     => '{0} は有効なモデルイベントコールバックではありません。', //{0} is not a valid Model Event callback.
   'invalidArgument'                  => '有効な {0} を与えてください。', //You must provide a valid {0}.
   'invalidAllowedFields'             => 'モデル「{0}」には許可フィールドを指定する必要があります。: ', //Allowed fields must be specified for model: {0}
   'emptyDataset'                     => '{0} へのデータはありません。', //There is no data to {0}.
   'failGetFieldData'                 => 'データベースからフィールド・データの取得に失敗しました。', //Failed to get field data from database.
   'failGetIndexData'                 => 'データベースからインデックス・データの取得に失敗しました。', //Failed to get index data from database.
   'failGetForeignKeyData'            => 'データベースからの外部キー・データの取得に失敗しました。', //Failed to get foreign key data from database.
   'parseStringFail'                  => 'キー文字列の解析に失敗しました。', //Parsing key string failed.
   'featureUnavailable'               => 'この機能は、使用しているデータベースでは利用できません。', //This feature is not available for the database you are using.
   'tableNotFound'                    => 'テーブル `{0}` が現在のデータベースに見つかりませんでした。', //Table `{0}` was not found in the current database.
   'noPrimaryKey'                     => 'モデルクラス `{0}` で主キーを指定していません。', //`{0}` model class does not specify a Primary Key.
   'noDateFormat'                     => 'モデルクラス `{0}` に有効なdateFormatがありません。', //`{0}` model class does not have a valid dateFormat.
   'fieldNotExists'                   => 'フィールド `{0}` はありません。', //Field `{0}` not found.
   'forEmptyInputGiven'               => 'フィールド `{0}` に空の文が与えられてます。', //Empty statement is given for the field `{0}`
   'forFindColumnHaveMultipleColumns' => 'カラム名には単一のカラムのみ使用可能です。', //Only single column allowed in Column name.
];
