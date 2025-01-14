<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColaboradorsFixture
 */
class ColaboradorsFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'dtnascimento' => '2025-01-14',
                'dtadmissao' => '2025-01-14',
                'cpf' => 'Lorem ipsum dolor sit amet',
                'rg' => 'Lorem ipsum dolor sit amet',
                'celular' => 'Lorem ipsum dolor sit amet',
                'sexob' => 'Lorem ipsum dolor sit amet',
                'estadocivil' => 'Lorem ipsum dolor sit amet',
                'digital' => 'Lorem ipsum dolor sit amet',
                'foto' => 'Lorem ipsum dolor sit amet',
                'cargo' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:42:10',
                'modified' => '2025-01-14 01:42:10',
            ],
        ];
        parent::init();
    }
}
