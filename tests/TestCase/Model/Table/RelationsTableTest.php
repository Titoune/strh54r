<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelationsTable Test Case
 */
class RelationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelationsTable
     */
    public $Relations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relations',
        'app.relation_types',
        'app.users',
        'app.chat_messages',
        'app.discussions',
        'app.discussion_messages',
        'app.event_comments',
        'app.events',
        'app.participations',
        'app.poll_answers',
        'app.polls',
        'app.poll_proposals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Relations') ? [] : ['className' => RelationsTable::class];
        $this->Relations = TableRegistry::get('Relations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Relations);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}