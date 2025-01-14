<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipamentosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipamentosTable Test Case
 */
class EquipamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipamentosTable
     */
    protected $Equipamentos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Equipamentos',
        'app.Categorias',
        'app.Marcas',
        'app.Equipaestoques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Equipamentos') ? [] : ['className' => EquipamentosTable::class];
        $this->Equipamentos = $this->getTableLocator()->get('Equipamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Equipamentos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EquipamentosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EquipamentosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
