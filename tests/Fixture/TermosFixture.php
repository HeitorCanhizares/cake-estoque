<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TermosFixture
 */
class TermosFixture extends TestFixture
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
                'assinado' => 'Lorem ipsum dolor sit amet',
                'data' => '2025-01-14',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:43:10',
                'modified' => '2025-01-14 01:43:10',
                'colaborador_id' => 1,
            ],
        ];
        parent::init();
    }
}
