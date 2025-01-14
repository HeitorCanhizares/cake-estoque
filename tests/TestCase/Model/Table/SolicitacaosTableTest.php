<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitacaosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitacaosTable Test Case
 */
class SolicitacaosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitacaosTable
     */
    protected $Solicitacaos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Solicitacaos',
        'app.Categorias',
        'app.Colaboradors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Solicitacaos') ? [] : ['className' => SolicitacaosTable::class];
        $this->Solicitacaos = $this->getTableLocator()->get('Solicitacaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Solicitacaos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SolicitacaosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SolicitacaosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
