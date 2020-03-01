<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatGodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatGodsTable Test Case
 */
class CatGodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatGodsTable
     */
    protected $CatGods;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatGods',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatGods') ? [] : ['className' => CatGodsTable::class];
        $this->CatGods = TableRegistry::getTableLocator()->get('CatGods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatGods);

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
