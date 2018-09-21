<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DentroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DentroTable Test Case
 */
class DentroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DentroTable
     */
    public $Dentro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dentro',
        'app.tabelas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dentro') ? [] : ['className' => 'App\Model\Table\DentroTable'];
        $this->Dentro = TableRegistry::get('Dentro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dentro);

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
