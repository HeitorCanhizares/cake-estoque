<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colaborador Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\Date $dtnascimento
 * @property \Cake\I18n\Date $dtadmissao
 * @property string $cpf
 * @property string $rg
 * @property string $celular
 * @property string $sexob
 * @property string $estadocivil
 * @property string $digital
 * @property string $foto
 * @property string $cargo
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Entrada[] $entradas
 * @property \App\Model\Entity\Ficha[] $fichas
 * @property \App\Model\Entity\Inventario[] $inventarios
 * @property \App\Model\Entity\Solicitacao[] $solicitacaos
 * @property \App\Model\Entity\Termo[] $termos
 * @property \App\Model\Entity\User[] $users
 */
class Colaborador extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome' => true,
        'dtnascimento' => true,
        'dtadmissao' => true,
        'cpf' => true,
        'rg' => true,
        'celular' => true,
        'sexob' => true,
        'estadocivil' => true,
        'digital' => true,
        'foto' => true,
        'cargo' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'entradas' => true,
        'fichas' => true,
        'inventarios' => true,
        'solicitacaos' => true,
        'termos' => true,
        'users' => true,
    ];
}
