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
 * @author     Marco Monteiro
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
	'missingTable'    => 'A tabela de migrações deve ser definida.',
	'disabled'        => 'As migrações foram carregadas, mas estão inativas ou estão configuradas incorretamente.',
	'notFound'        => 'Arquivo de migração não encontrado: ',
	'batchNotFound'     => 'Não foi possível encontrar o ramo selecionado: ',
	'empty'           => 'Nenhum arquivo de migração encontrado',
	'gap'             => 'Há uma lacuna na sequência de migração perto do número da versão: ',
	'classNotFound'   => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod'   => 'A classe de migração está faltando um método "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigra a base de dados para a última migração disponível.",
	'migHelpCurrent'  => "\t\tMigra a base de dados para a versão configurada como 'atual' na configuração.",
	'migHelpVersion'  => "\tMigra a base de dados para a versão {v}.",
	'migHelpRollback' => "\tExecuta todas as migrações 'para baixo' na versão 0.",
	'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para atualizar a base de dados.",
	'migHelpSeed'     => "\tExecuta o semeador chamado [name].",
	'migCreate'       => "\tCria uma nova migração chamada [name]",
	'nameMigration'   => 'Nomeie o arquivo de migração',
	'badCreateName'   => 'Deve fornecer um nome de arquivo de migração.',
	'writeError'      => 'Erro ao tentar criar o arquivo.',
	'migNumberError'    => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',

	'latest'            => 'Executando todas as novas migrações...',
	'generalFault'      => 'A migração falhou!',
	'migInvalidVersion' => 'Número de versão fornecido é inválido.',
	'toVersionPH'       => 'A migrar para a versão %s...',
	'toVersion'         => 'A migrar para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'on'                => 'A migrar para: ',
	'migSeeder'         => 'Nome do semeador',
	'migMissingSeeder'  => 'Deve fornecer um nome de semeador.',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	'version'           => 'Versão',
	'filename'          => 'Nome do arquivo',
];
