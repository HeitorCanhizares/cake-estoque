<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipamentosFixture
 */
class EquipamentosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:42:30',
                'modified' => '2025-01-14 01:42:30',
                'categoria_id' => 1,
                'marca_id' => 1,
            ],
        ];
        parent::init();
    }
}
