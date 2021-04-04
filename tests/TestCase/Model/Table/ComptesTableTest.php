<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComptesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComptesTable Test Case
 */
class ComptesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComptesTable
     */
    protected $Comptes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Comptes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Comptes') ? [] : ['className' => ComptesTable::class];
        $this->Comptes = TableRegistry::getTableLocator()->get('Comptes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Comptes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
