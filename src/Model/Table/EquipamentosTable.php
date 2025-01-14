<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipamentos Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\MarcasTable&\Cake\ORM\Association\BelongsTo $Marcas
 * @property \App\Model\Table\EquipaestoquesTable&\Cake\ORM\Association\HasMany $Equipaestoques
 *
 * @method \App\Model\Entity\Equipamento newEmptyEntity()
 * @method \App\Model\Entity\Equipamento newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipamento> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipamento get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Equipamento findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Equipamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipamento> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipamento|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Equipamento saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Equipamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipamento>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipamento> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipamento>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipamento> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EquipamentosTable extends Table
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

        $this->setTable('equipamentos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Equipaestoques', [
            'foreignKey' => 'equipamento_id',
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 255)
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->integer('categoria_id')
            ->notEmptyString('categoria_id');

        $validator
            ->integer('marca_id')
            ->notEmptyString('marca_id');

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'), ['errorField' => 'categoria_id']);
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'), ['errorField' => 'marca_id']);

        return $rules;
    }
}
