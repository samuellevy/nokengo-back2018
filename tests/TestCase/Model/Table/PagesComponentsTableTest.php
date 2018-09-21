<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagesComponentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagesComponentsTable Test Case
 */
class PagesComponentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PagesComponentsTable
     */
    public $PagesComponents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pages_components',
        'app.pages',
        'app.components'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PagesComponents') ? [] : ['className' => 'App\Model\Table\PagesComponentsTable'];
        $this->PagesComponents = TableRegistry::get('PagesComponents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PagesComponents);

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
