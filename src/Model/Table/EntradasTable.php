<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entradas Model
 *
 * @property \App\Model\Table\EquipaestoquesTable&\Cake\ORM\Association\BelongsTo $Equipaestoques
 * @property \App\Model\Table\ColaboradorsTable&\Cake\ORM\Association\BelongsTo $Colaboradors
 *
 * @method \App\Model\Entity\Entrada newEmptyEntity()
 * @method \App\Model\Entity\Entrada newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Entrada> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entrada get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Entrada findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Entrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Entrada> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entrada|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Entrada saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Entrada>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Entrada>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Entrada>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Entrada> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Entrada>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Entrada>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Entrada>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Entrada> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntradasTable extends Table
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

        $this->setTable('entradas');
        $this->setDisplayField('ativo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Equipaestoques', [
            'foreignKey' => 'equipaestoque_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

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
            ->integer('equipaestoque_id')
            ->notEmptyString('equipaestoque_id');

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
        $rules->add($rules->existsIn(['equipaestoque_id'], 'Equipaestoques'), ['errorField' => 'equipaestoque_id']);
        $rules->add($rules->existsIn(['colaborador_id'], 'Colaboradors'), ['errorField' => 'colaborador_id']);

        return $rules;
    }
}
