<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ficha Entity
 *
 * @property int $id
 * @property int $quantidade
 * @property string $assinado
 * @property \Cake\I18n\Date $data
 * @property string $transacao
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $equipaestoque_id
 * @property int $colaborador_id
 *
 * @property \App\Model\Entity\Equipaestoque $equipaestoque
 * @property \App\Model\Entity\Colaborador $colaborador
 */
class Ficha extends Entity
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
        'quantidade' => true,
        'assinado' => true,
        'data' => true,
        'transacao' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'equipaestoque_id' => true,
        'colaborador_id' => true,
        'equipaestoque' => true,
        'colaborador' => true,
    ];
}
