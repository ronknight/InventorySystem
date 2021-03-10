<?php
/**
 * Migration language strings.
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
	// Migration Runner
   'missingTable'      => 'マイグレーション・テーブルを設定する必要があります。', //Migrations table must be set.
   'disabled'          => 'マイグレーションは読み込まれていますが、無効化されているか、設定が間違っています。', //Migrations have been loaded but are disabled or setup incorrectly.
   'notFound'          => 'マイグレーション・ファイルが見つかりません。: ', //Migration file not found:
   'batchNotFound'     => 'ターゲットバッチが見つかりません: ', //Target batch not found:
   'empty'             => 'マイグレーション・ファイルが見つかりませんでした。', //No Migration files found
   'gap'               => 'バージョン番号付近のマイグレーション・シーケンスに飛びがあります: ', //There is a gap in the migration sequence near version number:
   'classNotFound'     => 'マイグレーション・クラス "%s" が見つかりませんでした。', //The migration class "%s" could not be found.
   'missingMethod'     => 'マイグレーション・クラスには "%s" メソッドがありません。', //The migration class is missing an "%s" method.

	// Migration Command
   'migHelpLatest'     => "\t\tデータベースを最新の利用可能なマイグレーションに移行します。", //\t\tMigrates database to latest available migration.
   'migHelpCurrent'    => "\t\t'current'設定のバージョンにデータベースを移行します。", //\t\tMigrates database to version set as 'current' in configuration.
   'migHelpVersion'    => "\tデータベースをバージョン {v} に移行します。", //\tMigrates database to version {v}.
   'migHelpRollback'   => "\tすべてのマイグレーションをバージョン0に「ダウン」します", //\tRuns all migrations 'down' to version 0.
   'migHelpRefresh'    => "\t\tデータベースを一新するためにすべての移行をアンインストールして再実行します。", //\t\tUninstalls and re-runs all migrations to freshen database.
   'migHelpSeed'       => "\t[name]というseederを実行します。", //\tRuns the seeder named [name].
   'migCreate'         => "\t[name]という名前の新しいマイグレーションを作成します。", //\tCreates a new migration named [name]
   'nameMigration'     => 'マイグレーション・ファイルの名前', //Name the migration file
   'badCreateName'     => 'マイグレーション・ファイル名を指定する必要があります。', //You must provide a migration file name.
   'writeError'        => '{0} ファイルを作成しようとするとエラーが発生します。ディレクトリが書き込み可能かどうかを確認してください。', //Error trying to create {0} file, check if the directory is writable.
   'migNumberError'    => 'マイグレーション・ナンバーは3桁でなければならず、シーケンスに飛びがあってはなりません。', //Migration number must be three digits, and there must not be any gaps in the sequence.
   'rollBackConfirm'   => '本当にロールバックしますか？', //Are you sure you want to rollback?
   'refreshConfirm'    => '本当にリフレッシュしますか？', //Are you sure you want to refresh?

   'latest'            => 'すべての新しいマイグレーションを実行しています...', //Running all new migrations...
   'generalFault'      => 'マイグレーション失敗！', //Migration failed!
   'migInvalidVersion' => '無効なバージョン番号です。', //Invalid version number provided.
   'toVersionPH'       => 'バージョン %s に移行しています...', //Migrating to version %s...
   'toVersion'         => 'currentバージョンに移行しています...', //Migrating to current version...
   'rollingBack'       => 'バッチへのマイグレーションをロールバック: ', //Rolling back migrations to batch:
   'noneFound'         => 'マイグレーションは見つかりませんでした。', //No migrations were found.
   'on'                => '移行先: ', //Migrated On:
   'migSeeder'         => 'seeder名', //Seeder name
   'migMissingSeeder'  => 'seeder名が必要です。', //You must provide a seeder name.
   'removed'           => 'ロールバック: ', //Rolling back:
   'added'             => '実行中: ', //Running:

   'version'           => 'バージョン', //Version
   'filename'          => 'ファイル名', //Filename
];
