<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipaestoque Entity
 *
 * @property int $id
 * @property string $ca
 * @property \Cake\I18n\Date $datafab
 * @property string $tipoperiodoval
 * @property int $quantperiodoval
 * @property string $tamanho
 * @property int $quantdisponivel
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $equipamento_id
 *
 * @property \App\Model\Entity\Equipamento $equipamento
 * @property \App\Model\Entity\Entrada[] $entradas
 * @property \App\Model\Entity\Ficha[] $fichas
 * @property \App\Model\Entity\Inventario[] $inventarios
 */
class Equipaestoque extends Entity
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
        'ca' => true,
        'datafab' => true,
        'tipoperiodoval' => true,
        'quantperiodoval' => true,
        'tamanho' => true,
        'quantdisponivel' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'equipamento_id' => true,
        'equipamento' => true,
        'entradas' => true,
        'fichas' => true,
        'inventarios' => true,
    ];
}
