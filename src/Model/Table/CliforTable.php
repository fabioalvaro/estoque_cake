<?php
namespace App\Model\Table;

use App\Model\Entity\Clifor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clifor Model
 *
 */
class CliforTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('clifor');
        $this->displayField('idclifor');
        $this->primaryKey('idclifor');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('idclifor', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idclifor', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('ativo');

        $validator
            ->allowEmpty('documento');

        $validator
            ->add('tipo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tipo');

        return $validator;
    }
}
