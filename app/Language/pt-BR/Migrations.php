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
	'missingTable'    => 'Tabela de migrações deve ser definida.',
	'disabled'        => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
	'notFound'        => 'Arquivo de migração não encontrado: ',
	'batchNotFound'   => 'Alvo batch não encontrado: ',
	'empty'           => 'Nenhum arquivo de migração encontrado',
	'gap'             => 'Há uma diferença na sequência de migração perto do número de versão: ',
	'classNotFound'   => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod'   => 'A classe de migração está sem um método "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigra o banco de dados para a última migração disponível.",
	'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
	'migHelpVersion'  => "\tMigra o banco de dados para versão {v}.",
	'migHelpRollback' => "\tExecuta todas as migrações 'down' até a versão 0.",
	'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para renovar o banco de dados..",
	'migHelpSeed'     => "\tRoda o seeder nomeado [name].",
	'migCreate'       => "\tCria uma nova migração nomeada [name]",
	'nameMigration'   => 'Nomeie o arquivo de migração',
	'badCreateName'   => 'Você deve fornecer um nome de arquivo de migração.',
	'writeError'      => 'Erro ao tentar criar arquivo.',
	'migNumberError'  => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',
	'rollBackConfirm' => 'Você tem certeza que deseja reverter?',
	'refreshConfirm'  => 'Você tem certeza que deseja atualizar?',

	'latest'            => 'Executando todas as novas migrações...',
	'generalFault'      => 'Migração falhou!',
	'migInvalidVersion' => 'Número da versão fornecida é inválido.',
	'toVersionPH'       => 'Migrando para a versão %s...',
	'toVersion'         => 'Migrando para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'migSeeder'         => 'Nome do seeder',
	'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.',
	'nameSeeder'        => 'Name the seeder file',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	// Migrate Status
	'namespace'         => 'Namespace',
	'filename'          => 'Nome do arquivo',
	'version'           => 'Versão',
	'group'             => 'Grupo',
	'on'                => 'Migrado em: ',
	'batch'             => 'Lote',
];
