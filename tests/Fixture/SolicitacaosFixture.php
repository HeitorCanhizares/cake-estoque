<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitacaosFixture
 */
class SolicitacaosFixture extends TestFixture
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
                'quantidade' => 1,
                'tamanho' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:43:04',
                'modified' => '2025-01-14 01:43:04',
                'categoria_id' => 1,
                'colaborador_id' => 1,
            ],
        ];
        parent::init();
    }
}
