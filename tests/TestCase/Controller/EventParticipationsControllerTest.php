<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventParticipationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EventParticipationsController Test Case
 */
class EventParticipationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.event_participations',
        'app.event_participation_types',
        'app.events',
        'app.users',
        'app.chat_messages',
        'app.discussions',
        'app.event_comments',
        'app.participations',
        'app.poll_answers',
        'app.polls',
        'app.poll_proposals',
        'app.relations'
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
