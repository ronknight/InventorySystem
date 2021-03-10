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
	'invalidEvent'                     => '{0} não é um callback de Model Event válido.',
	'invalidArgument'                  => 'Você deve fornecer um {0} válido.',
	'invalidAllowedFields'             => 'Os campos permitidos devem ser especificados para o model: {0}',
	'emptyDataset'                     => 'Não há dados para {0}.',
	'emptyPrimaryKey'                  => 'Não há nenhuma chave primária definida ao tentar fazer {0}.',
	'failGetFieldData'                 => 'Falha ao obter dados de campo do banco de dados.',
	'failGetIndexData'                 => 'Falha ao obter dados de índice do banco de dados.',
	'failGetForeignKeyData'            => 'Falha ao obter dados de chave estrangeira do banco de dados.',
	'parseStringFail'                  => 'Análise da chave string falhou.',
	'featureUnavailable'               => 'Este recurso não está disponível para o banco de dados que você está usando.',
	'tableNotFound'                    => 'Tabela `{0}` não foi encontrada no banco de dados atual.',
	'noPrimaryKey'                     => 'Classe model `{0}` não especifica uma Primary Key.',
	'noDateFormat'                     => 'Classe model `{0}` não tem uma data válida.',
	'fieldNotExists'                   => 'Campo `{0}` não encontrado.',
	'forEmptyInputGiven'               => 'Declaração vazia passada para o campo `{0}`',
	'forFindColumnHaveMultipleColumns' => 'Apenas uma coluna é permitida no nome da coluna.',
];
