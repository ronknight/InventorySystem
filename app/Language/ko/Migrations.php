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
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => '마이그레이션 테이블은 반드시 설정되어야 합니다.', // 'Migrations table must be set.',
   'disabled'          => '마이그레이션이 로드되었지만, 사용할 수 없거나 설정이 잘못되었습니다.', //'Migrations have been loaded but are disabled or setup incorrectly.',
   'notFound'          => '마이그레이션 파일 찾기 실패: ', // 'Migration file not found: ',
   'batchNotFound'     => '대상이 되는 batch 찾기 실패: ', // 'Target batch not found: ',
   'empty'             => '마이그레이션 파일을 찾을 수 없습니다.', // 'No Migration files found',
   'gap'               => '순차적인 마이그레이션 sequence 값 부근의 버전 번호 값에 차이가 있습니다.', // 'There is a gap in the migration sequence near version number: ',
   'classNotFound'     => '해당 마이그레이션 클래스 "%s" 찾기 실패', // 'The migration class "%s" could not be found.',
   'missingMethod'     => '해당 마이그레이션 클래스의 "%s" 메서드를 찾을 수 없습니다.', // 'The migration class is missing an "%s" method.',

	// Migration Command
   'migHelpLatest'     => "\t\t데이터베이스를 사용이 가능한 최신 마이그레이션으로 마이그레이트합니다.", // "\t\tMigrates database to latest available migration.",
   'migHelpCurrent'    => "\t\t환경설정에서 데이터베이스의 버전을 'current'로 마이그레이트합니다.", // "\t\tMigrates database to version set as 'current' in configuration.",
   'migHelpVersion'    => "\t데이터베이스의 버전을 {v} 경우로 마이그레이트.", // "\tMigrates database to version {v}.",
   'migHelpRollback'   => "\t버전을 0으로 설정하기 위해, 모든 마이그레이션들의 'down()'을 실행합니다.", // "\tRuns all migrations 'down' to version 0.",
   'migHelpRefresh'    => "\t\t데이터베이스를 새로 만들기 위해서 모든 마이그레이션을 내렸다가 다시 실행합니다.", // "\t\tUninstalls and re-runs all migrations to freshen database.",
   'migHelpSeed'       => "\t[name]이라고 명명된 seeder를 실행합니다.", // "\tRuns the seeder named [name].",
   'migCreate'         => "\t[name]이라고 명명된 새로운 마이그레이션을 생성합니다.", // "\tCreates a new migration named [name]",
   'nameMigration'     => '마이그레이션 파일 이름 지정', // 'Name the migration file',
   'badCreateName'     => '반드시 마이그레이션 파일명이 지정되어야 합니다.', // 'You must provide a migration file name.',
   'writeError'        => '파일 생성 시도 중에 에러 발생', // 'Error trying to create file.',
   'migNumberError'    => '마이그레이션 숫자 값은 반드시 세 자리 숫자 값이어야 합니다. 그리고 순차적인 마이그레이션 값에 간격이 없어야 합니다.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',

   'latest'            => '새로운 모든 마이그레이션들을 실행 중...', // 'Running all new migrations...',
   'generalFault'      => '마이그레이션 실패!', // 'Migration failed!',
   'migInvalidVersion' => '유효하지 않은 숫자 버전 값이 지정되었습니다.', // 'Invalid version number provided.',
   'toVersionPH'       => '버전 %s 경우로 마이그레이션 중...', // 'Migrating to version %s...',
   'toVersion'         => '현재 버전으로 마이그레이션 중...', // 'Migrating to current version...',
   'rollingBack'       => '일괄적으로 마이그레이션을 되돌리는 중: ', // 'Rolling back migrations to batch: ',
   'noneFound'         => '마이그레이션을 찾지 못했습니다.', // 'No migrations were found.',
   'on'                => '마이그레이션 대상: ', // 'Migrated On: ',
   'migSeeder'         => 'Seeder 명', // 'Seeder name',
   'migMissingSeeder'  => '반드시 Seeder 명을 지정하여야 합니다.', // 'You must provide a seeder name.',
   'removed'           => '되돌리기: ', // 'Rolling back: ',
   'added'             => '실행 중: ', // 'Running: ',

   'version'           => '버전', // 'Version',
   'filename'          => '파일명', // 'Filename',
];
