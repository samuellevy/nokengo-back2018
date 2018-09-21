<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitutesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitutesTable Test Case
 */
class InstitutesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitutesTable
     */
    public $Institutes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institutes',
        'app.media',
        'app.authors',
        'app.update_authors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Institutes') ? [] : ['className' => 'App\Model\Table\InstitutesTable'];
        $this->Institutes = TableRegistry::get('Institutes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institutes);

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
