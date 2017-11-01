<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PollAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PollAnswersTable Test Case
 */
class PollAnswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PollAnswersTable
     */
    public $PollAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poll_answers',
        'app.polls',
        'app.users',
        'app.chat_messages',
        'app.discussions',
        'app.event_comments',
        'app.events',
        'app.participations',
        'app.relations',
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
        $config = TableRegistry::exists('PollAnswers') ? [] : ['className' => PollAnswersTable::class];
        $this->PollAnswers = TableRegistry::get('PollAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PollAnswers);

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
