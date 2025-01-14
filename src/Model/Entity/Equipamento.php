<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipamento Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $categoria_id
 * @property int $marca_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Marca $marca
 * @property \App\Model\Entity\Equipaestoque[] $equipaestoques
 */
class Equipamento extends Entity
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
        'descricao' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'categoria_id' => true,
        'marca_id' => true,
        'categoria' => true,
        'marca' => true,
        'equipaestoques' => true,
    ];
}
