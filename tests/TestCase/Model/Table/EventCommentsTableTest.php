<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventCommentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventCommentsTable Test Case
 */
class EventCommentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventCommentsTable
     */
    public $EventComments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.event_comments',
        'app.users',
        'app.chat_messages',
        'app.discussions',
        'app.events',
        'app.participations',
        'app.poll_answers',
        'app.polls',
        'app.poll_proposals',
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
        $config = TableRegistry::exists('EventComments') ? [] : ['className' => EventCommentsTable::class];
        $this->EventComments = TableRegistry::get('EventComments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventComments);

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
