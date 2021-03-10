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
   'missingTable'      => '必须设置迁移表。',
//   'invalidType'       => '指定的迁移类型编号无效: {0}',
   'disabled'          => '迁移状态为禁用或不正确，请确认 app/Config/Migrations 文件的 $enabled 值是否为 true。',
   'notFound'          => '找不到指定的迁移文件：',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => '没有指定的迁移文件。',
   'gap'               => '版本号附近的迁移序列存在差异: ',
   'classNotFound'     => '找不到指定的迁移类 "%s" 。',
   'missingMethod'     => '迁移类缺少 "%s" 方法。',

	// Migration Command
   'migHelpLatest'     => "\t\t数据库将迁移至最新的可用迁移。",
   'migHelpCurrent'    => "\t\t数据库将迁移至配置文件中 'current' 的版本。",
   'migHelpVersion'    => "\t数据库将迁移至 {v} 版本。",
   'migHelpRollback'   => "\t运行所有迁移 'down'方法 至 0 版本。",
   'migHelpRefresh'    => "\t\t卸载且重新运行所有迁移，重置数据库。",
   'migHelpSeed'       => "\t运行填充程序，名称：[name]",
   'migCreate'         => "\t创建一个新的迁移，名称：[name]",
   'nameMigration'     => '命名迁移文件。',
   'badCreateName'     => '你必须提供迁移文件名。',
   'writeError'        => '尝试创建文件时出错。',
   'migNumberError'    => '迁移号必须为3位数字且中间不能有任何空格。',

//   'toLatest'          => '迁移到最新版本...',
   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
   'migInvalidVersion' => '提供的版本号无效。',
   'toVersionPH'       => '迁移至 %s...',
   'toVersion'         => '迁移至当前（current）版本...',
   'rollingBack'       => '回滚所有迁移...',
   'noneFound'         => '没有发现任何迁移。',
   'on'                => '迁移: ',
   'migSeeder'         => '填充（seeder）名',
   'migMissingSeeder'  => '必须提供一个填充（seeder）名',
   'removed'           => '回滚操作: ',
   'added'             => '执行操作: ',

   'version'           => '版本',
   'filename'          => '文件名',
];
