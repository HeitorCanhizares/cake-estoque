<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitacaos Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\ColaboradorsTable&\Cake\ORM\Association\BelongsTo $Colaboradors
 *
 * @method \App\Model\Entity\Solicitacao newEmptyEntity()
 * @method \App\Model\Entity\Solicitacao newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Solicitacao> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitacao get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Solicitacao findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Solicitacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Solicitacao> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitacao|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Solicitacao saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Solicitacao>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Solicitacao>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Solicitacao>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Solicitacao> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Solicitacao>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Solicitacao>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Solicitacao>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Solicitacao> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SolicitacaosTable extends Table
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

        $this->setTable('solicitacaos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->scalar('tamanho')
            ->maxLength('tamanho', 255)
            ->requirePresence('tamanho', 'create')
            ->notEmptyString('tamanho');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 255)
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->integer('categoria_id')
            ->notEmptyString('categoria_id');

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'), ['errorField' => 'categoria_id']);
        $rules->add($rules->existsIn(['colaborador_id'], 'Colaboradors'), ['errorField' => 'colaborador_id']);

        return $rules;
    }
}
