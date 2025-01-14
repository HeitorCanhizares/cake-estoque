<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColaboradorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColaboradorsTable Test Case
 */
class ColaboradorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColaboradorsTable
     */
    protected $Colaboradors;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Colaboradors',
        'app.Entradas',
        'app.Fichas',
        'app.Inventarios',
        'app.Solicitacaos',
        'app.Termos',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Colaboradors') ? [] : ['className' => ColaboradorsTable::class];
        $this->Colaboradors = $this->getTableLocator()->get('Colaboradors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Colaboradors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ColaboradorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
