<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelationTypesTable Test Case
 */
class RelationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelationTypesTable
     */
    public $RelationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relation_types',
        'app.relations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RelationTypes') ? [] : ['className' => RelationTypesTable::class];
        $this->RelationTypes = TableRegistry::get('RelationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RelationTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
