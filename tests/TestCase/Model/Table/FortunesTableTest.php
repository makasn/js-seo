<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FortunesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FortunesTable Test Case
 */
class FortunesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FortunesTable
     */
    protected $Fortunes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Fortunes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fortunes') ? [] : ['className' => FortunesTable::class];
        $this->Fortunes = TableRegistry::getTableLocator()->get('Fortunes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Fortunes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
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
