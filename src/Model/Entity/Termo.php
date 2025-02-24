<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Termo Entity
 *
 * @property int $id
 * @property string $assinado
 * @property \Cake\I18n\Date $data
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $colaborador_id
 *
 * @property \App\Model\Entity\Colaborador $colaborador
 */
class Termo extends Entity
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
        'assinado' => true,
        'data' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'colaborador_id' => true,
        'colaborador' => true,
    ];
}
