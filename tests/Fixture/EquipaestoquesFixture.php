<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipaestoquesFixture
 */
class EquipaestoquesFixture extends TestFixture
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
                'ca' => 'Lorem ipsum dolor sit amet',
                'datafab' => '2025-01-14',
                'tipoperiodoval' => 'Lorem ipsum dolor sit amet',
                'quantperiodoval' => 1,
                'tamanho' => 'Lorem ipsum dolor sit amet',
                'quantdisponivel' => 1,
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:42:24',
                'modified' => '2025-01-14 01:42:24',
                'equipamento_id' => 1,
            ],
        ];
        parent::init();
    }
}
