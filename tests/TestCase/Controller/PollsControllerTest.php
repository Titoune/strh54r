<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PollsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PollsController Test Case
 */
class PollsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.polls',
        'app.users',
        'app.chat_messages',
        'app.discussions',
        'app.event_comments',
        'app.events',
        'app.participations',
        'app.poll_answers',
        'app.relations',
        'app.poll_proposals'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}