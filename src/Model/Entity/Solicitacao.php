<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitacao Entity
 *
 * @property int $id
 * @property string $descricao
 * @property int $quantidade
 * @property string $tamanho
 * @property string $status
 * @property string $ativo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $categoria_id
 * @property int $colaborador_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Colaborador $colaborador
 */
class Solicitacao extends Entity
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
        'quantidade' => true,
        'tamanho' => true,
        'status' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'categoria_id' => true,
        'colaborador_id' => true,
        'categoria' => true,
        'colaborador' => true,
    ];
}
