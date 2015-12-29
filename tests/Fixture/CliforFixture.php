<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CliforFixture
 *
 */
class CliforFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'clifor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idclifor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ativo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => '1', 'comment' => 'sim nao 0 1', 'precision' => null, 'fixed' => null],
        'documento' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'ambos, cliente, fornecedor, 0,1,2', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idclifor'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idclifor' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'ativo' => 'Lorem ipsum dolor sit amet',
            'documento' => 'Lorem ipsum dolor sit amet',
            'tipo' => 1
        ],
    ];
}
