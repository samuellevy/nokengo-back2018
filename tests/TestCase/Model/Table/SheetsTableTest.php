<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SheetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SheetsTable Test Case
 */
class SheetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SheetsTable
     */
    public $Sheets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sheets',
        'app.works',
        'app.datasheet',
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
        $config = TableRegistry::exists('Sheets') ? [] : ['className' => 'App\Model\Table\SheetsTable'];
        $this->Sheets = TableRegistry::get('Sheets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sheets);

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
