<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClubesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClubesTable Test Case
 */
class ClubesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClubesTable
     */
    public $Clubes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clubes',
        'app.media',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Clubes') ? [] : ['className' => 'App\Model\Table\ClubesTable'];
        $this->Clubes = TableRegistry::get('Clubes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clubes);

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
