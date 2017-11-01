<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscussionMessagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscussionMessagesTable Test Case
 */
class DiscussionMessagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscussionMessagesTable
     */
    public $DiscussionMessages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discussion_messages',
        'app.discussions',
        'app.users',
        'app.chat_messages',
        'app.event_comments',
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
        $config = TableRegistry::exists('DiscussionMessages') ? [] : ['className' => DiscussionMessagesTable::class];
        $this->DiscussionMessages = TableRegistry::get('DiscussionMessages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiscussionMessages);

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
