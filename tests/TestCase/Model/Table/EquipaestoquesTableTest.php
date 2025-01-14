<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipaestoquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipaestoquesTable Test Case
 */
class EquipaestoquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipaestoquesTable
     */
    protected $Equipaestoques;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Equipaestoques',
        'app.Equipamentos',
        'app.Entradas',
        'app.Fichas',
        'app.Inventarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Equipaestoques') ? [] : ['className' => EquipaestoquesTable::class];
        $this->Equipaestoques = $this->getTableLocator()->get('Equipaestoques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Equipaestoques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EquipaestoquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EquipaestoquesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
