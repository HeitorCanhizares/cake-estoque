<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventariosFixture
 */
class InventariosFixture extends TestFixture
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
                'quantidade' => 1,
                'data' => '2025-01-14',
                'transacao' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:42:41',
                'modified' => '2025-01-14 01:42:41',
                'equipaestoque_id' => 1,
                'colaborador_id' => 1,
            ],
        ];
        parent::init();
    }
}
