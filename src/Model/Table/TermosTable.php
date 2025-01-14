<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Termos Model
 *
 * @property \App\Model\Table\ColaboradorsTable&\Cake\ORM\Association\BelongsTo $Colaboradors
 *
 * @method \App\Model\Entity\Termo newEmptyEntity()
 * @method \App\Model\Entity\Termo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Termo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Termo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Termo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Termo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Termo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Termo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Termo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Termo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Termo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Termo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Termo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Termo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Termo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Termo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Termo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TermosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('termos');
        $this->setDisplayField('assinado');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Colaboradors', [
            'foreignKey' => 'colaborador_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('assinado')
            ->maxLength('assinado', 255)
            ->requirePresence('assinado', 'create')
            ->notEmptyString('assinado');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmptyDate('data');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 255)
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->integer('colaborador_id')
            ->notEmptyString('colaborador_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['colaborador_id'], 'Colaboradors'), ['errorField' => 'colaborador_id']);

        return $rules;
    }
}
