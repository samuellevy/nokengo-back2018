<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatasheetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatasheetTable Test Case
 */
class DatasheetTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DatasheetTable
     */
    public $Datasheet;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.datasheet',
        'app.works'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Datasheet') ? [] : ['className' => 'App\Model\Table\DatasheetTable'];
        $this->Datasheet = TableRegistry::get('Datasheet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Datasheet);

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
