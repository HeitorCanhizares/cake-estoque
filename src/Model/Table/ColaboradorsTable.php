<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colaboradors Model
 *
 * @property \App\Model\Table\EntradasTable&\Cake\ORM\Association\HasMany $Entradas
 * @property \App\Model\Table\FichasTable&\Cake\ORM\Association\HasMany $Fichas
 * @property \App\Model\Table\InventariosTable&\Cake\ORM\Association\HasMany $Inventarios
 * @property \App\Model\Table\SolicitacaosTable&\Cake\ORM\Association\HasMany $Solicitacaos
 * @property \App\Model\Table\TermosTable&\Cake\ORM\Association\HasMany $Termos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Colaborador newEmptyEntity()
 * @method \App\Model\Entity\Colaborador newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Colaborador> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Colaborador findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Colaborador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Colaborador> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Colaborador saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Colaborador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colaborador>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colaborador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colaborador> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colaborador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colaborador>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Colaborador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Colaborador> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ColaboradorsTable extends Table
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

        $this->setTable('colaboradors');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Entradas', [
            'foreignKey' => 'colaborador_id',
        ]);
        $this->hasMany('Fichas', [
            'foreignKey' => 'colaborador_id',
        ]);
        $this->hasMany('Inventarios', [
            'foreignKey' => 'colaborador_id',
        ]);
        $this->hasMany('Solicitacaos', [
            'foreignKey' => 'colaborador_id',
        ]);
        $this->hasMany('Termos', [
            'foreignKey' => 'colaborador_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'colaborador_id',
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->date('dtnascimento')
            ->requirePresence('dtnascimento', 'create')
            ->notEmptyDate('dtnascimento');

        $validator
            ->date('dtadmissao')
            ->requirePresence('dtadmissao', 'create')
            ->notEmptyDate('dtadmissao');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 255)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 255)
            ->requirePresence('rg', 'create')
            ->notEmptyString('rg');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 255)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular');

        $validator
            ->scalar('sexob')
            ->maxLength('sexob', 255)
            ->requirePresence('sexob', 'create')
            ->notEmptyString('sexob');

        $validator
            ->scalar('estadocivil')
            ->maxLength('estadocivil', 255)
            ->requirePresence('estadocivil', 'create')
            ->notEmptyString('estadocivil');

        $validator
            ->scalar('digital')
            ->maxLength('digital', 255)
            ->requirePresence('digital', 'create')
            ->notEmptyString('digital');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 255)
            ->requirePresence('foto', 'create')
            ->notEmptyString('foto');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 255)
            ->requirePresence('cargo', 'create')
            ->notEmptyString('cargo');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 255)
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        return $validator;
    }
}
