<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipaestoques Model
 *
 * @property \App\Model\Table\EquipamentosTable&\Cake\ORM\Association\BelongsTo $Equipamentos
 * @property \App\Model\Table\EntradasTable&\Cake\ORM\Association\HasMany $Entradas
 * @property \App\Model\Table\FichasTable&\Cake\ORM\Association\HasMany $Fichas
 * @property \App\Model\Table\InventariosTable&\Cake\ORM\Association\HasMany $Inventarios
 *
 * @method \App\Model\Entity\Equipaestoque newEmptyEntity()
 * @method \App\Model\Entity\Equipaestoque newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipaestoque> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipaestoque get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Equipaestoque findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Equipaestoque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipaestoque> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipaestoque|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Equipaestoque saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Equipaestoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipaestoque>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipaestoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipaestoque> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipaestoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipaestoque>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipaestoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipaestoque> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EquipaestoquesTable extends Table
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

        $this->setTable('equipaestoques');
        $this->setDisplayField('ca');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Equipamentos', [
            'foreignKey' => 'equipamento_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Entradas', [
            'foreignKey' => 'equipaestoque_id',
        ]);
        $this->hasMany('Fichas', [
            'foreignKey' => 'equipaestoque_id',
        ]);
        $this->hasMany('Inventarios', [
            'foreignKey' => 'equipaestoque_id',
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
            ->scalar('ca')
            ->maxLength('ca', 255)
            ->requirePresence('ca', 'create')
            ->notEmptyString('ca');

        $validator
            ->date('datafab')
            ->requirePresence('datafab', 'create')
            ->notEmptyDate('datafab');

        $validator
            ->scalar('tipoperiodoval')
            ->maxLength('tipoperiodoval', 255)
            ->requirePresence('tipoperiodoval', 'create')
            ->notEmptyString('tipoperiodoval');

        $validator
            ->integer('quantperiodoval')
            ->requirePresence('quantperiodoval', 'create')
            ->notEmptyString('quantperiodoval');

        $validator
            ->scalar('tamanho')
            ->maxLength('tamanho', 255)
            ->requirePresence('tamanho', 'create')
            ->notEmptyString('tamanho');

        $validator
            ->integer('quantdisponivel')
            ->requirePresence('quantdisponivel', 'create')
            ->notEmptyString('quantdisponivel');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 255)
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->integer('equipamento_id')
            ->notEmptyString('equipamento_id');

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
        $rules->add($rules->existsIn(['equipamento_id'], 'Equipamentos'), ['errorField' => 'equipamento_id']);

        return $rules;
    }
}
