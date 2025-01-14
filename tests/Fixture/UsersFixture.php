<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'login' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'permissao' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-14 01:43:15',
                'modified' => '2025-01-14 01:43:15',
                'colaborador_id' => 1,
            ],
        ];
        parent::init();
    }
}
