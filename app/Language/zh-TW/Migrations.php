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
 * @author     CodeIgniter Dev Team
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
   'missingTable'      => '必須設定被遷移的資料表。',
   'disabled'          => '遷移功能無法使用。請確定 app/Config/Migrations 文件中的 $enabled 是否為 true',
   'notFound'          => '找不到需要遷移的檔案： ',
   'batchNotFound'     => '找不到目標批次檔（Target batch）：',
   'empty'             => '沒有設定任何需要遷移的檔案。',
   'gap'               => '該版本號碼中的遷移序列存在差異： ',
   'classNotFound'     => '找不到遷移類別 "%s" 。',
   'missingMethod'     => '遷移類別缺少 "%s" 方法。',

	// Migration Command
   'migHelpLatest'     => "\t\t資料庫將遷移到最新的可用遷移（available migration）。",
   'migHelpCurrent'    => "\t\t資料庫將遷移到設定中設定為'當前（current）'的版本。",
   'migHelpVersion'    => "\t將資料庫遷移到版本 {v} 。",
   'migHelpRollback'   => "\t執行所有遷移 'down' 方法至版本 0 。",
   'migHelpRefresh'    => "\t\t刷新資料庫：執行解除安裝並且重新執行所有遷移。",
   'migHelpSeed'       => "\t執行所有名為 [name] 的資料填充器（Seeder）。",
   'migCreate'         => "\t新建一個名為 [name] 的遷移。",
   'nameMigration'     => '命名遷移檔案。',
   'badCreateName'     => '遷移檔案必須命名。',
   'writeError'        => '嘗試創建檔案時出現錯誤。',
   'migNumberError'    => '遷移版本號碼必須為三位數字，且序列中不能有任何空格。',

   'latest'            => '遷移到最新版本...',
   'generalFault'      => '遷移失敗!',
   'migInvalidVersion' => '提供了無效的版本號碼。',
   'toVersionPH'       => '正在遷移至 %s 版本號...',
   'toVersion'         => '正在遷移至當前（current）版本...',
   'rollingBack'       => '還原所有遷移: ',
   'noneFound'         => '找不到遷移。',
   'on'                => '遷移到: ',
   'migSeeder'         => '資料填充器（Seeder） 名稱：',
   'migMissingSeeder'  => '您必須提供一個資料填充器（Seeder）名稱。',
   'removed'           => '還原至: ',
   'added'             => '執行: ',

   'version'           => '版本',
   'filename'          => '檔案名稱',
];
